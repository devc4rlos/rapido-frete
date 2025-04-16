<?php

namespace App\Helpers;

class ApiDataHydrate
{
    public static function hydrate(array $rawData): array
    {
        if (!isset($rawData['data'])) {
            return [];
        }

        $data = $rawData['data'];

        return [
            'name' => $data['name'],
            'websites' => [
                'portfolio' => $data['links'][0]['url'] ?? '',
            ],
            'phone' => [
                'self' => preg_replace('/^\+55(\d{2})(\d+)$/', '$2', $data['phone']),
                'number' => preg_replace('/^\+55(\d{2})(\d+)$/', '$1$2', $data['phone']),
                'full' => $data['phone'],
                'areaCode' => preg_replace('/^\+55(\d{2}).*$/', '$1', $data['phone']),
                'countryCode' => '+55'
            ],
            'email' => [
                'url' => 'mailto:' . $data['email'],
                'self' => $data['email']
            ],
            'social_media' => array_reduce($data['socials'], function ($carry, $social) {
                $carry[$social['name']] = [
                    'links' => [
                        'url' => $social['url'],
                        'base_url' => parse_url($social['url'], PHP_URL_SCHEME) . '://' . parse_url($social['url'], PHP_URL_HOST)
                    ]
                ];

                if ($social['name'] === 'whatsapp') {
                    $carry[$social['name']]['phone_number'] = '+5511994411592';
                } else {
                    $carry[$social['name']]['text'] = strtolower(parse_url($social['url'], PHP_URL_HOST)) . '/' . basename($social['url']);
                    $carry[$social['name']]['nickname'] = basename($social['url']);
                }

                return $carry;
            }, [])
        ];
    }
}
