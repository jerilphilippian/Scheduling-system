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
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    @livewireStyles

</head>
<body class="py-24 bg-[url('/img/coverphoto.jpg')]">
    {{$slot}}


    <!-- component -->
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
        <div class="flex antialiased text-gray-900 dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div
            x-ref="loading"

        >

        </div>
        <!-- Sidebar-->
        @include('livewire.sidebar.dashboard')
        <!-- Sidebar end-->
        <div class="flex flex-col flex-1 ">

            <!--header-->
                @include('layouts.nav')
            <!--header end-->

        </div>
        </div>

        <!-- Panels -->

        <!-- Settings Panel -->
        <!-- Backdrop -->
        <div
        x-show="isSettingsPanelOpen"
        class="fixed inset-0 bg-black bg-opacity-50"
        @click="isSettingsPanelOpen = false"
        aria-hidden="true"
        ></div>
        <!-- Panel -->




    <!-- Author links -->

    </div>

    <script>
        const setup = () => {
            return {
            isSidebarOpen: false,
            currentSidebarTab: null,
            isSettingsPanelOpen: false,
            isSubHeaderOpen: false,
            watchScreen() {
                if (window.innerWidth <= 1024) {
                this.isSidebarOpen = false
                }
            },
        }
        }
    </script>
    @livewireScripts

</body>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</html>
