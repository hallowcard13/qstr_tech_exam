<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Factory</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="min-h-full">
        <div class="bg-indigo-600 pb-32">
            <nav class="border-b border-indigo-300 border-opacity-25 bg-indigo-600 lg:border-none">
                <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
                    <div
                        class="relative flex h-16 items-center justify-between lg:border-b lg:border-indigo-400 lg:border-opacity-25">
                        <div class="flex items-center px-2 lg:px-0">
                            <div class="flex-shrink-0">
                                <img class="block h-8 w-8"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=300"
                                    alt="Your Company">
                            </div>
                            <div class="hidden lg:ml-10 lg:block">
                                <div class="flex space-x-4">
                                    <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                                    <a href="#"
                                        class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium"
                                        aria-current="page">Factories</a>
                                    <a href="/factories"
                                        class="bg-indigo-700 text-white rounded-md py-2 px-3 text-sm font-medium">Factory</a>
                                    <a href="/employees"
                                        class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">Employees</a>
                                    <a href="{{route('userlogout')}}"
                                        class="text-white hover:bg-indigo-500 hover:bg-opacity-75 rounded-md py-2 px-3 text-sm font-medium">Sign
                                        out</a>
                                </div>
                            </div>
                        </div>

                        <div class="flex lg:hidden">
                            <!-- Mobile menu button -->
                            <button type="button"
                                class="relative inline-flex items-center justify-center rounded-md bg-indigo-600 p-2 text-indigo-200 hover:bg-indigo-500 hover:bg-opacity-75 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="absolute -inset-0.5"></span>
                                <span class="sr-only">Open main menu</span>
                                <!-- Menu open: "hidden", Menu closed: "block" -->
                                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                                <!-- Menu open: "block", Menu closed: "hidden" -->
                                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="lg:hidden" id="mobile-menu">
                    <div class="space-y-1 px-2 pb-3 pt-2">
                        <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                        <a href="#" class="bg-indigo-700 text-white block rounded-md py-2 px-3 text-base font-medium"
                            aria-current="page">Dashboard</a>
                        <a href="#"
                            class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">Team</a>
                        <a href="#"
                            class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">Projects</a>
                        <a href="#"
                            class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">Calendar</a>
                        <a href="#"
                            class="text-white hover:bg-indigo-500 hover:bg-opacity-75 block rounded-md py-2 px-3 text-base font-medium">Reports</a>
                    </div>
                    <div class="border-t border-indigo-700 pb-3 pt-4">
                        <div class="flex items-center px-5">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                            </div>
                            <div class="ml-3">
                                <div class="text-base font-medium text-white">Tom Cook</div>
                                <div class="text-sm font-medium text-indigo-300">tom@example.com</div>
                            </div>
                            <button type="button"
                                class="relative ml-auto flex-shrink-0 rounded-full bg-indigo-600 p-1 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-3 space-y-1 px-2">
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Your
                                Profile</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Settings</a>
                            <a href="#"
                                class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-indigo-500 hover:bg-opacity-75">Sign
                                out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <header class="py-10">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-white">Add Factory</h1>
                </div>
            </header>
        </div>

        <main class="-mt-32">
            <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
                <div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6">
                    <div class="flex">
                        <form class="w-1/2" action="{{route('factories.store')}}" method="POST">
                            @csrf
                            <div>
                                <label for="factory_name"
                                    class="block text-sm font-medium leading-6 text-gray-900">Factory
                                    Name</label>
                                <div class="mt-2">
                                    <input type="text" name="factory_name" id="factory_name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="factory name">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="location"
                                    class="block text-sm font-medium leading-6 text-gray-900">Location</label>
                                <div class="mt-2">
                                    <input type="text" name="location" id="location"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="location">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="email"
                                    class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                                <div class="mt-2">
                                    <input type="email" name="email" id="email"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="email address">
                                </div>
                            </div>
                            <div class="mt-4">
                                <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="website" id="website"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="website">
                                </div>
                            </div>
                            <div class="pt-5">
                                <button type="submit" class="bg-indigo-700 text-white rounded-md shadow py-2 px-2">Save
                                    factory</button>
                            </div>
                        </form>
                        <div class="p-10">
                            @if ($errors->any())
                            <div class="bg-red-500 p-4 rounded">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li class="text-white">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (session('status'))
                            <div class="bg-green-500 text-white rounded p-4">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
        </main>
    </div>
</body>

</html>
