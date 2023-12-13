<div class="w-96">

    <div class="flex w-full">
        <div class="flex-grow">
            <p class="text-xl">Filters</p>
        </div>
        <x-filament::dropdown>
            <x-slot name="trigger">
                <x-filament::button>
                    Export
                </x-filament::button>
            </x-slot>

            <x-filament::dropdown.list>
                <x-filament::dropdown.list.item wire:click="openViewModal">
                    To PDF
                </x-filament::dropdown.list.item>

                <x-filament::dropdown.list.item wire:click="openEditModal">
                    To Excel
                </x-filament::dropdown.list.item>

                <x-filament::dropdown.list.item wire:click="openDeleteModal">
                    Print
                </x-filament::dropdown.list.item>
            </x-filament::dropdown.list>
        </x-filament::dropdown>
    </div>
    <div>
        <x-filament-panels::form :wire:key="$this->getId() . '.forms.' . $this->getFormStatePath()"
            wire:submit="filter">
            {{ $this->filterForm }}

            <x-filament-panels::form.actions :actions="$this->getCachedFormActions()" :full-width="$this->hasFullWidthFormActions()" />
        </x-filament-panels::form>

    </div>
</div>