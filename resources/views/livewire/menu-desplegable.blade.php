<div>
    <button wire:click="toggle" class="flex items-center text-sm font-normal rounded transition">
        <x-icon name="academic-cap" class="w-3.5 h-3.5 me-2" />
        {{ __('Unidades curriculares') }}
        <x-icon name="chevron-down" class="w-3.5 h-3.5 ms-auto transition-transform" :class="$open ? 'rotate-180' : ''" />
    </button>
    @if ($open)
        <div>
            <flux:navlist.item icon="pencil-square" wire:navigate>
                Castellano
            </flux:navlist.item>
            <flux:navlist.item icon="language" wire:navigate>
                Ingles
            </flux:navlist.item>
            <flux:navlist.item icon="calculator" wire:navigate>
                Matematicas
            </flux:navlist.item>
            <flux:navlist.item icon="cube" wire:navigate>
                Fisica
            </flux:navlist.item>
            <flux:navlist.item icon="computer-desktop" wire:navigate>
                Informatica
            </flux:navlist.item>
            <flux:navlist.item icon="globe-americas" wire:navigate>
                Biologia
            </flux:navlist.item>
            <flux:navlist.item icon="globe-alt" wire:navigate>
                Historia
            </flux:navlist.item>
            <flux:navlist.item icon="beaker" wire:navigate>
                Quimica
            </flux:navlist.item>
        </div>
    @endif
</div>
