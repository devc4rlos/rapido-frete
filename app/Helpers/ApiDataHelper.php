<?php

namespace App\Helpers;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class ApiDataHelper
{
    protected static string $endpoint = 'https://api.carlosalexandre.com.br/v1/contacts';
    protected static string $storageFile = 'data.json';
    protected static string $lastUpdateFile = 'data_last_update.txt';
    protected static int $cacheMinutes = 480;

    public static function getData(): array
    {
        $disk = Storage::disk('local');

        $now = now();

        if (Storage::exists(self::$lastUpdateFile)) {
            $lastUpdate = Carbon::parse($disk->get(self::$lastUpdateFile));

            if ($lastUpdate->diffInMinutes($now) < self::$cacheMinutes && $disk->exists(self::$storageFile)) {
                return json_decode($disk->get(self::$storageFile), true);
            }
        }

        try {
            $response = Http::timeout(10)->get(self::$endpoint);

            if ($response->successful()) {
                $data = $response->json();

                $disk->put(self::$storageFile, json_encode($data, JSON_PRETTY_PRINT));
                $disk->put(self::$lastUpdateFile, $now->toDateTimeString());

                return $data;
            }
        } catch (Exception $e) {
            logger()->warning('Error querying external API', ['error' => $e->getMessage()]);
        }

        if (Storage::exists(self::$storageFile)) {
            return json_decode($disk->get(self::$storageFile), true);
        }

        $defaultPath = base_path('data.json');
        if (file_exists($defaultPath)) {
            return json_decode(file_get_contents($defaultPath), true);
        }

        return [];
    }
}
