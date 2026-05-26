<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


     <nav class="bg-white shadow-md p-4">
            <ul class="flex">
                <x-link-item href="/" :active="Route::currentRouteName() === 'homepage' ? true : false">Hommepage</x-link-item>
                <x-link-item href="/projects" :active="Route::currentRouteName() === 'projects' ? true : false">Projects</x-link-item>
                <x-link-item href="/recipes" :active="fnmatch('recipes.*', Route::currentRouteName()) ? true : false">Recipies</x-link-item>
            </ul>
        </nav>
       
        {{ $slot }}
</body>
</html>
