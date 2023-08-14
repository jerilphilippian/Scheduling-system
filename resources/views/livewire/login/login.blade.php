<div>
    {{-- background overlay --}}
    <div class="absolute inset-0 z-[2] flex items-center justify-center w-full h-auto min-h-screen">
        <div class="w-[30%] h-[300px] py-4 px-7 bg-white rounded flex flex-col justify-center items-center bg-opacity-60">
            <h2 class="mb-3 text-lg font-bold text-white uppercase">Login</h2>
            <form class="flex flex-col w-full gap-5">
                <div>
                    <x-input label="Name" placeholder="your name" />
                </div>
                <div>
                    <x-inputs.password label="Password" />
                </div>
                <div class="flex items-center justify-end">
                    <x-button red label="Login" />
                </div>
            </form>
        </div>
    </div>
</div>
