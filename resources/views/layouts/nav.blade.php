
<nav class="fixed top-0 z-20 flex flex-shrink-0 w-full p-4 pl-24 bg-[#ffffff] shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
    <div class="flex flex-row items-center justify-around">
        <div class="w-[149px] h-[39px]">
            <img src="{{asset('img/PMC-LOGO.png')}}" alt="" class="w-full h-full">
        </div>
        <div>
            <span>{{Auth::user()->email}}</span>
        </div>
        </div>
    </div>


</nav>
