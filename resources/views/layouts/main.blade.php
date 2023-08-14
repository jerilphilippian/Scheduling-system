<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Philippian Marketing Management</title>
    {{-- <link href="/dist/output.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <wireui:scripts />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script> --}}
    @livewireStyles

</head>
<body class="">
    <main class="w-full h-auto min-h-screen bg-[url('/img/bg3a.jpg')] relative">
        <div class="absolute inset-0 z-[1] bg-black bg-opacity-50"></div>
        {{$slot}}
    </main>
    @vite('resources/js/app.js')
    @livewireScripts
</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</html>
