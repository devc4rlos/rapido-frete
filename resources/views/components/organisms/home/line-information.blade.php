<div
    @class([
        $class,
    ])
{{ $attributes }}>
    <x-molecules.text-with-icon class="flex-col gap-5">
        <x-slot:icon>
            <x-icons.calendar-days size="3xl" />
        </x-slot:icon>
        +5 anos de experiência
    </x-molecules.text-with-icon>
    <x-molecules.text-with-icon class="flex-col gap-5">
        <x-slot:icon>
            <x-icons.truck-fast size="3xl" />
        </x-slot:icon>
        Equipe treinada e veículos modernos
    </x-molecules.text-with-icon>
    <x-molecules.text-with-icon class="flex-col gap-5">
        <x-slot:icon>
            <x-icons.city size="3xl" />
        </x-slot:icon>
        Atendimento em toda a cidade e região
    </x-molecules.text-with-icon>
</div>
