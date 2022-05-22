<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Open Transport Manager') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- Livewire --}}
    @livewireStyles
    @powerGridStyles
</head>

<body class="font-sans antialiased max-h-screen overflow-hidden" x-data="{menu_open: false}">
    <div x-show="menu_open" class="md:hidden w-screen h-screen absolute bg-gray-600 z-20 opacity-25"></div>
    <div class="max-w-screen max-h-screen">

        <!-- sidebar -->

        <div x-bind:class="! menu_open ? '-left-48' : 'left-[0.1px]'" @click.outside="menu_open = false"
            class="max-w-48 min-w-48 fixed -left-48 z-20 h-screen w-48 bg-slate-50 transition-all md:static md:float-left">

            {{-- logo --}}
            <div class="p-2">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img class="max-w-full h-auto" src="{{ asset('images/logo3.png')}}" alt="OTM Logo">
                    </a>
                </div>
            </div>
            {{-- <x-button>test</x-button> --}}
            <ul class="relative px-1">

                {{-- home button --}}
                <x-menu-item-link class="my-3" :active="request()->url() == route('home')" href="/">
                    <i class="ri-home-5-line mr-2 w-4"></i>
                    <span>Home</span>
                </x-menu-item-link>

                {{-- Outbound --}}
                <x-menu-item-link :active="request()->routeIs('outbound')" href="{{route('outbound')}}">
                    <i class="ri-inbox-unarchive-line mr-2 w-4"></i>
                    <span>Outbound</span>
                </x-menu-item-link>

                {{-- Inbound --}}
                <x-menu-item-link :active="request()->routeIs('inbound')" href="{{route('inbound')}}">
                    <i class="ri-inbox-archive-line mr-2 w-4"></i>
                    <span>Inbound</span>
                </x-menu-item-link>

                {{-- loads --}}
                <x-menu-item-link :active="request()->routeIs('loads')" href="{{route('loads')}}">
                    <i class="ri-luggage-cart-fill mr-2 w-4"></i>
                    <span>Loads</span>
                </x-menu-item-link>

                {{-- planning --}}
                <x-menu-item-link :active="request()->routeIs('planning')" href="{{route('planning')}}">
                    <i class="ri-git-merge-line mr-2 w-4"></i>
                    <span>Planning</span>
                </x-menu-item-link>

                {{-- orders --}}
                <x-menu-item-link :active="request()->routeIs('orders')" href="{{route('orders')}}">
                    <i class="ri-shopping-bag-line mr-2 w-4"></i>
                    <span>Orders</span>
                </x-menu-item-link>
            </ul>

            <div class="absolute bottom-0">
                <div class="pt-4 pb-1 px-2">
                    <span class="text-xs text-gray-500">Open Transport Manager v{{ env('APP_VER', 'n/a') }}</span>
                </div>
            </div>
        </div>

        <div class="relative flex h-screen flex-col overflow-auto bg-slate-300 md:relative">

            <!-- top menu bar -->
            <div class="min-h-12 h-12 w-full flex-none bg-slate-50 px-3">
                <div class="float-left flex h-full md:hidden">
                    <div class="m-auto">
                        <a class="focus:bg-slate-200 block md:hidden mx-5 my-auto pt-3 " data-turbolinks="false"
                            @click.debounce.50ms="menu_open = !menu_open"><i class="ri-menu-line ri-xl"></i></a>
                    </div>
                </div>

                <div class="float-right flex h-full">
                    <div class="m-auto">
                        <div class="flex gap-x-4">
                            {{-- help link --}}
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <a href="#" @click.prevent="alert('here will be a link to help page')">
                                    <div class="flex items-center">
                                        <div class="shrink-0">
                                            <i class="ri-question-line ri-lg"></i>
                                        </div>
                                        <div class="grow ml-1 mb-1">
                                            <p class="text-sm font-semibold text-gray-600">
                                                Help
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </button>

                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <a data-turbolinks="false">
                                            <div class="flex items-center">
                                                <div class="shrink-0">
                                                    <i class="ri-user-3-line ri-lg"></i>
                                                </div>
                                                <div class="grow ml-1 mb-1">
                                                    <p class="text-sm font-semibold text-gray-600">
                                                        Account
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="ml-1 mb-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>

                        </div>
                    </div>

                </div>

            </div>

            <!-- main content view -->
            <div class="h-full bg-white">
                <div class="mx-auto max-h-80 px-6 pt-3 md:px-1 md:pt-2">
                    <div>{{ $slot }}</div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
    @powerGridScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>