<div class="px-5 sm:pl-24">
    <div class="w-full">
        <p class="text-2xl font-medium text-black">
          Invitations
        </p>
        <!-- BREADCRUMBS -->
        <nav class="text-black">
           <ol class="inline-flex gap-1 p-0 list-none">
              <li class="flex items-end ">
                 <p class="">Events</p>
              </li>
              <li>
                 <svg class="w-5 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                 </svg>
              </li>
              <li class="flex items-end ">
                 <p class="">Invitations</p>
              </li>
           </ol>
        </nav>

        <!-- MENUS -->
        <div class="flex items-center justify-between">
            @include('components.event-menu')
        </div>
        <!-- MENUS -->

        <div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Event
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rooms
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Seminar
                            </th>
                            <td class="px-6 py-4">
                                Room 1
                            </td>
                            <td class="px-6 py-4">
                                August 20, 2023
                            </td>
                            <td class="px-6 py-4">
                                8:00 AM - 9:00AM
                            </td>
                            <td class="px-6 py-4">
                                Ongoing
                            </td>
                            <td class="px-6 py-4">
                                <x-button href="{{route('invitation.view')}}" dark label="View" />
                                {{-- <x-button emerald label="Accept" />
                                <x-button red label="Decline" /> --}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Seminar
                            </th>
                            <td class="px-6 py-4">
                                Room 1
                            </td>
                            <td class="px-6 py-4">
                                August 20, 2023
                            </td>
                            <td class="px-6 py-4">
                                8:00 AM - 9:00AM
                            </td>
                            <td class="px-6 py-4">
                                Ongoing
                            </td>
                            <td class="px-6 py-4">
                                <x-button href="{{route('invitation.view')}}" dark label="View" />
                                {{-- <x-button emerald label="Accept" />
                                <x-button red label="Decline" /> --}}
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Seminar
                            </th>
                            <td class="px-6 py-4">
                                Room 1
                            </td>
                            <td class="px-6 py-4">
                                August 20, 2023
                            </td>
                            <td class="px-6 py-4">
                                8:00 AM - 9:00AM
                            </td>
                            <td class="px-6 py-4">
                                Ongoing
                            </td>
                            <td class="px-6 py-4">
                                <x-button href="{{route('invitation.view')}}" dark label="View" />
                                {{-- <x-button emerald label="Accept" />
                                <x-button red label="Decline" /> --}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

