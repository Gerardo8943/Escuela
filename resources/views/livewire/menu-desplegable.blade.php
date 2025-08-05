<flux:navlist.group :heading="__($heading)" class="grid">
    <button wire:click="toggle" class="flex items-center text-sm font-normal rounded transition">
        <x-icon name="{{ $icon }}" class="w-3.5 h-3.5 me-2" />
        {{ __($heading) }}
        <x-icon name="chevron-down" class="w-3.5 h-3.5 ms-auto transition-transform" :class="$open ? 'rotate-180' : ''" />
    </button>
    @if ($open)
        <div>
            @foreach ($items as $item)
                <flux:navlist.item icon="{{ $item['icon'] }}" wire:navigate>
                    {{ $item['label'] }}
                </flux:navlist.item>
            @endforeach
        </div>
    @endif
</flux:navlist.group>