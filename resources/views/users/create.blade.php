<!DOCTYPE html >
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body class="bg-ivory">
<header class="flex w-full h-fit p-2 pt-4" xmlns:livewire="http://www.w3.org/1999/html">
    <livewire:navbar>
    </livewire:navbar>
</header>
<main class="pl-16 pr-16">
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold font-serif text-kobicha">Profile</h2>
                <p class="mt-1 text-sm/6 text-kobicha0">This information will be displayed publicly so be careful what you share.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="username" class="block text-sm/6 font-medium text-kobicha">Username</label>
                        <div class="mt-2">
                            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-kobicha focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-kobicha">
                                <input type="text" name="username" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-kobicha placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="janesmith">
                            </div>
                            @error('username')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold font-serif text-kobicha">Personal Information</h2>
                <p class="mt-1 text-sm/6 text-kobicha0">Use a permanent address where you can receive mail.</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm/6 font-medium text-kobicha">Full name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-kobicha outline-1 -outline-offset-1 outline-kobicha placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-kobicha sm:text-sm/6">
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm/6 font-medium text-kobicha">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-kobicha outline-1 -outline-offset-1 outline-kobicha placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-kobicha sm:text-sm/6">
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="password" class="block text-sm/6 font-medium text-kobicha">Password</label>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="new-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-kobicha outline-1 -outline-offset-1 outline-kobicha placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-kobicha sm:text-sm/6">
                        </div>
                    </div>

                </div>
            </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold font-serif text-kobicha">Cancel</button>
            <button type="submit" class="rounded-md bg-kobicha px-3 py-2 text-sm font-semibold font-serif text-white shadow-xs hover:bg-kobicha-50 hover:text-kobicha hover:cursor-pointer focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-kobicha">Save</button>
        </div>
        </div>
    </form>
</main>
</body>
</html>
