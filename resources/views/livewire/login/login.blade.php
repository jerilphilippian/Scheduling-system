<div>
    <div class="absolute inset-0 z-[2] flex items-center justify-center w-full h-auto min-h-screen">
        <div class="w-[30%] h-[300px] py-4 px-7 bg-white rounded flex flex-col justify-center items-center bg-opacity-60">
            <h2 class="mb-3 text-lg font-bold text-white uppercase">Login</h2>
            <form class="flex flex-col w-full gap-5" method="post" action="{{ route('login.authenticate') }}">
                @csrf
                @method('POST')
                <div>
                    <input type="text" name="email">
                </div>
                <div>
                    <input type="password" name="password">
                </div>
                <div class="flex items-center justify-end">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
