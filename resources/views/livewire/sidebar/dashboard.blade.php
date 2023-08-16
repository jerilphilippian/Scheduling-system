


<div class="fixed top-0 left-0 z-[2] flex transition-all">
    {{-- <div
      x-show="isSidebarOpen"
      @click="isSidebarOpen = false"
      class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"
    ></div> --}}
    {{-- <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div> --}}

    <!-- Mobile bottom bar -->
    <nav aria-label="Options" class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-indigo-100 border- sm:hidden shadow-t rounded-t-3xl">
      <!-- Menu button -->
        <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#860909] hover:text-white focus:outline-none focus:ring focus:[#860909] focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-[#860909]' : 'text-gray-500 bg-white'" >
            <span class="sr-only">Toggle sidebar</span>
            <svg
                aria-hidden="true"
                class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>

      <!-- Logo -->
        <a href="">
            <img
            class="w-10 h-auto"
            src="{{asset('img/philippian-icon-transparent.png')}}"
            alt="K-UI"
            />
        </a>

      <!-- User avatar button -->
      <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
        <button
          @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
          class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
        >
          <img
            class="w-8 h-8 rounded-lg shadow-md"
            src="{{asset('img/philippian-icon-transparent.png')}}"
            alt="Ahmed Kamel"
          />
          <span class="sr-only">User menu</span>
        </button>
        <div
          x-show="isOpen"
          @click.away="isOpen = false"
          @keydown.escape="isOpen = false"
          x-ref="userMenu"
          tabindex="-1"
          class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
          role="menu"
          aria-orientation="vertical"
          aria-label="user menu"
        >
          <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
            >Your Profile</a
          >

            {{-- <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a> --}}

            <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
            </div>
        </div>
    </nav>

    <!-- Left mini bar -->
    <nav
      aria-label="Options"
      style="background-image:linear-gradient(to top, rgba(255, 255, 255, 0.168),rgba(255, 255, 255, 0.168), rgba(117, 19, 19, 0.529)),url('/img/calendar.png')"
      class="z-20 bg-cover flex-col items-center flex-shrink-0 hidden w-16 h-screen py-4  shadow-md sm:flex"
    >
      <!-- Logo -->
      {{-- <div class="flex-shrink-0 py-4">
        <i class="text-xl text-red-800 fa-solid fa-user"></i>
      </div> --}}
      <div class="animation duration-700 ease-in-out hover:-translate-y-2 flex flex-col items-center flex-1 p-2 space-y-4">
        <!-- Menu button -->
        <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#860909] hover:text-white focus:outline-none focus:ring focus:[#860909] focus:ring-offset-white focus:ring-offset-2"
          :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-[#860909]' : 'text-gray-500 bg-white'">
          <span class="sr-only">Toggle sidebar</span>
          <svg
            aria-hidden="true"
            class="w-6 h-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
        </button>
        <!-- Messages button -->

        <!-- Notifications button -->
        {{-- <button
          @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#860909] hover:text-white focus:outline-none focus:ring focus:bg-[#860909] focus:ring-offset-white focus:ring-offset-2"
          :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-[#860909]' : 'text-gray-500 bg-white'">
            <span class="relative flex w-3 h-1">
                <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-sky-400"></span>
                <span class="relative inline-flex w-3 h-3 rounded-full bg-sky-500"></span>
                <span class="sr-only">Toggle notifications panel</span>
            </span>

          <svg
            aria-hidden="true"
            class="w-6 h-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
            />
          </svg>
        </button> --}}
      </div>

      <!-- User avatar -->
      <div class="animation duration-700 ease-in-out hover:-translate-y-2 relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
        <button  @click="isOpen = !isOpen;" class="group py-2 px-3 transition-colors rounded-lg shadow-md hover:bg-[#860909] focus:outline-none">
            <i class="hover:animate-spin text-lg fa-solid fa-gear text-[#6b7280] group-hover:text-white"></i>
        </button>
        <div
          x-show="isOpen"
          @click.away="isOpen = false"
          @keydown.escape="isOpen = false"
          x-ref="userMenu"
          tabindex="-1"
          class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
          role="menu"
          aria-orientation="vertical"
          aria-label="user menu">
          <a href="{{route('profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"
            >Your Profile</a
          >

          {{-- <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a> --}}

          <a href="{{route('login.logout')}}" data-modal-target="staticModal" data-modal-toggle="staticModal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
        </div>
      </div>
    </nav>

    <div
      x-transition:enter="transform transition-transform duration-300"
      x-transition:enter-start="-translate-x-full"
      x-transition:enter-end="translate-x-0"
      x-transition:leave="transform transition-transform duration-300"
      x-transition:leave-start="translate-x-0"
      x-transition:leave-end="-translate-x-full"
      x-show="isSidebarOpen"
      style="background-image:linear-gradient(to left, rgba(255, 255, 255, 0.048), rgba(117, 19, 19, 0.529)),url('/img/coverphoto.jpg')"
      class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 border-r-2 border-indigo-100 shadow-lg sm:left-16 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:static lg:w-64"
    >
      <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
        <!-- Logo -->
        <div class="flex items-center  justify-center flex-shrink-0 py-10">
            <div class="w-[149px] h-[39px] mr">
                <img src="{{asset('img/PMC-LOGO.png')}}" alt="">
            </div>
          {{-- <div class="font-mono text-2xl font-bold text-left text-black capitalize mb-7">Welcome</div>
          <div class="font-mono text-sm font-bold text-left text-black mb-7">rjgrdijgdrsrejfhwesfhseiofesf</div> --}}
        </div>

            <!-- Links mobile -->
            <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
            <a href="{{route('index')}}" class="flex items-center w-full space-x-2 text-black hover:text-white hover:bg-[#860909]  {{ request()->routeIs('index') ? 'text-white bg-[#860909] ' : '' }} rounded-lg">
                <span aria-hidden="true" class="group-hover:bg-[#860909] p-2 rounded-lg">
                <svg
                    class="w-6 h-6"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    />
                </svg>
                </span>
                <span>Dashboard</span>
            </a>
            <a href="{{route('events.index')}}" class="flex items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-[#860909] {{ request()->routeIs('events.index') ? 'text-white bg-[#860909] ' : '' }} hover:text-white">
                <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-[#860909] group-hover:text-white flex items-center justify-center">
                    <i class="text-lg fa-solid fa-calendar"></i>
                </span>
                <span>Events</span>
            </a>

            {{-- <a href="{{route('approval.index')}}" class="flex items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-[#860909] hover:text-white {{ request()->routeIs('approval.index') ? 'text-white bg-[#860909] ' : '' }}">
                <span aria-hidden="true" class="p-2 transition-colors rounded-lg group-hover:bg-[#860909] group-hover:text-white">
                    <i class="text-lg fa-solid fa-calendar-check"></i>
                </span>
                <span>Approval</span>
            </a> --}}

          <a
            href="{{route('room')}}"
            class="flex items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-[#860909] hover:text-white {{ request()->routeIs('room') ? 'text-white bg-[#860909] ' : '' }}"
          >
            <span
              aria-hidden="true"
              class="p-2 transition-colors rounded-lg group-hover:bg-[#860909] group-hover:text-white"
            >
              {{-- <svg
                class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                />
              </svg> --}}
              <i class="text-lg fa-solid fa-house"></i>
            </span>
            <span>Room</span>
          </a>

          <a
            href="{{route('user-management.index')}}"
            class="flex items-center space-x-2 text-black transition-colors rounded-lg group hover:bg-[#860909] hover:text-white {{ request()->routeIs('user-management') ? 'text-white bg-[#860909] ' : '' }}"
          >
            <span
              aria-hidden="true"
              class="p-2 transition-colors rounded-lg group-hover:bg-[#860909] group-hover:text-white"
            >
              {{-- <svg
                class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                />
              </svg> --}}
              <i class="text-lg fa-solid fa-user-group"></i>
            </span>
            <span>User Management</span>
          </a>
        </div>
<!-- Links mobile -->
        {{-- <div class="flex-shrink-0 p-4 mt-10">


          <button
            class="w-full px-4 py-2 text-center text-white transition-colors bg-[#860909] rounded-lg md:hidden hover:bg-[#860909] focus:outline-none focus:ring focus:bg-[#860909] focus:ring-offset-2 focus:ring-offset-gray-100"
          >
            Upgrade to pro
          </button>
        </div> --}}
      </nav>

        <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
            <h2 class="text-xl">Messages</h2>
        </section>

        <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
                <h2 class="text-xl">Notifications</h2>


                <div id="toast-message-cta" class="w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400" role="alert">
                    <div class="flex">
                        <img class="w-8 h-8 rounded-full shadow-lg" src="{{asset('img/philippian-icon-transparent.png')}}" alt="Jese Leos image"/>
                        <div class="ml-3 text-sm font-normal">
                            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Jeril</span>
                            <div class="flex items-end justify-end">
                                <span class="relative w-3 h-3">
                                    <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-sky-400"></span>
                                    <span class="relative inline-flex w-3 h-3 rounded-full bg-sky-500"></span>
                                </span>
                            </div>
                            <div class="mb-2 text-sm font-normal">Hi jeril is Invited you to join the room</div>
                            <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Join</a>
                            <a href="#" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Decline</a>
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-message-cta" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </button>
                    </div>
                </div>

        </section>
    </div>
</div>




