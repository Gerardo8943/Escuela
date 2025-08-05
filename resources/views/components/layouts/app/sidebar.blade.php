<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <x-app-logo />
        </a>

        <!-- Dashboard principal -->
        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Principal')" class="grid">
                <flux:navlist.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')"
                    wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
            </flux:navlist.group>

            <!-- Inscripcion -->
 
    @livewire('menu-desplegable', [
        'heading' => 'Inscripcion',
        'icon' => 'pencil-square',
        'items' => [
            ['label' => 'Nuevo trayecto', 'icon' => 'pencil-square'],
            ['label' => 'Inscripcion para reparacion', 'icon' => 'language'],
        ],
    ])

 <!--Unidades Curriculares -->

    @livewire('menu-desplegable', [
        'heading' => 'Unidades Curriculares',
        'icon' => 'academic-cap',
        'items' => [
            ['label' => 'Castellano', 'icon' => 'pencil-square'],
            ['label' => 'Ingles', 'icon' => 'language'],
            ['label' => 'Matematicas', 'icon' => 'calculator'],
            ['label' => 'Fisica', 'icon' => 'cube'],
            ['label' => 'Geografia', 'icon' => 'map'],
            ['label' => 'Informatica', 'icon' => 'computer-desktop'],
            ['label' => 'Biologia', 'icon' => 'globe-americas'],
            ['label' => 'Historia', 'icon' => 'globe-alt'],
            ['label' => 'Quimica', 'icon' => 'beaker'],
            ['label' => 'Educacion Fisica', 'icon' => 'hand-raised'],
        ],
    ])

                <!-- Notas -->

    @livewire('menu-desplegable', [
        'heading' => 'Notas',
        'icon' => 'clipboard-document-list',
        'items' => [
            ['label' => 'Calificacion final', 'icon' => 'magnifying-glass-circle'],
            ['label' => 'Primer corte de notas', 'icon' => 'magnifying-glass-circle'],
            ['label' => 'Mejores notas del salon', 'icon' => 'magnifying-glass-circle'],
            ['label' => 'Ranking de los mejores estudiantes', 'icon' => 'magnifying-glass-circle'],

        
            
        ],
    ])

    @livewire('menu-desplegable', [
        'heading' => 'Actividades recreativas',
        'icon' => 'flag',
        'items' => [
            ['label' => 'Futbol',  'icon' => 'globe-alt'],
            ['label' => 'Baloncesto',  'icon' => 'globe-alt'],
            ['label' => 'Voleibol',  'icon' => 'globe-alt'],
            ['label' => 'Ajedrez',  'icon' => 'globe-alt'],
            ['label' => 'Arte y dibujos',  'icon' => 'globe-alt']
        ]
    ])

 

              <!-- Cursos -->
         
        </flux:navlist>

        <flux:spacer />

   

     

        <!-- Desktop User Menu -->
        <flux:dropdown class="hidden lg:block" position="bottom" align="start">
            <flux:profile :name="auth()->user()->name" :initials="auth()->user()->initials()"
                icon:trailing="chevrons-up-down" />

            <flux:menu class="w-[220px]">
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>

    <!-- Mobile User Menu -->
    <flux:header class="lg:hidden">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <flux:spacer />

        <flux:dropdown position="top" align="end">
            <flux:profile :initials="auth()->user()->initials()" icon-trailing="chevron-down" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    {{ $slot }}

    @fluxScripts
</body>

</html>
