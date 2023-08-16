<section class="h-full gradient-form bg-neutral-200 dark:bg-neutral-700">
    <div class="container h-full p-10">
      <div
        class="flex flex-wrap items-center justify-center h-full g-6 text-neutral-800 dark:text-neutral-200">
        <div class="w-full">
          <div
            class="block bg-white rounded-lg shadow-lg dark:bg-neutral-800">
            <div class="g-0 lg:flex lg:flex-wrap">
              <!-- Left column container-->
              <div class="px-4 md:px-0 lg:w-6/12">
                <div class="md:mx-6 md:p-12">
                  <!--Logo-->
                  <div class="text-center">
                    <img
                      class="w-48 mx-auto"
                      src="{{asset('img/philippian-icon-transparent.png')}}"
                      alt="logo" />
                    <h4 class="pb-1 mt-1 mb-12 text-xl font-semibold">
                      Philippian Marketing Corporation
                    </h4>
                  </div>

                  <form class="flex flex-col w-full gap-5" method="post" action="{{ route('login.authenticate') }}">
                    @csrf
                    @method('POST')
                    <p class="mb-4">Please login to your account</p>
                    <!--Username input-->
                    <div class="relative mb-4" data-te-input-wrapper-init>
                      <input type="text" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput1" placeholder="Email@email.com" name="email" />
                      <label
                        for="exampleFormControlInput1"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Email
                      </label>
                    </div>

                    <!--Password input-->
                    <div class="relative mb-4" data-te-input-wrapper-init>
                      <input
                        type="password"
                        class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlInput11"
                        placeholder="Password" name="password" />
                      <label
                        for="exampleFormControlInput11"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                        >Password
                      </label>
                    </div>

                    <!--Submit button-->
                    <div class="pt-1 pb-1 mb-12 text-center">
                      <button
                        class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                        type="sumbit"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        style="
                          background: linear-gradient(to right, #C51605, #C51605, #272829);
                        ">
                        Log in
                      </button>

                      <!--Forgot password link-->
                      <a href="#!">Forgot password?</a>
                    </div>

                    <!--Register button-->
                    <div class="flex items-center justify-between pb-6">
                      <p class="mb-0 mr-2">Don't have an account?</p>

                    </div>
                  </form>
                </div>
              </div>

              <!-- Right column container with background and description-->
              <div
                class="flex items-center bg-cover rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none bg-origin-content"
                style="background-image:url('/img/bglogin.jpeg')">
                <div class="px-4 py-6 bg-gradient-to-r from-[#C51605] to-[#272829] opacity-70 w-full text-white md:p-12">
                  <h4 class="mb-6 text-xl font-semibold">
                    We are more than just a company
                  </h4>
                  <p class="text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex
                    ea commodo consequat.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- TODO: Connect inputs to the new functions/To log in uncomment this part --}}
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
  </section>
