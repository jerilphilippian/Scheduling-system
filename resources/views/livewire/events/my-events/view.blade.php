<div class="px-5 sm:pl-24">
    <div class="w-full">
        <p class="text-2xl font-medium text-black">
          Events
        </p>
        <!-- BREADCRUMBS -->
        <nav class="text-black">
           <ol class="inline-flex gap-1 p-0 list-none">
              <li class="flex items-end ">
                 <p class="">All Event</p>
              </li>
              <li>
                 <svg class="w-5 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                 </svg>
              </li>
              <li class="flex items-end ">
                 <p class="">view</p>
              </li>
           </ol>
        </nav>

        <!-- MENUS -->
        @include('components.event-menu')
        <!-- MENUS -->
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-[450px_1fr] gap-2">
        <div class="p-4 bg-white rounded shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <h3 class="mb-3 text-lg font-bold">{{$eventTitle}}</h3>
            <div class="">
                <div class="mb-3">
                    <div class="flex flex-col">
                        {{-- <div class="flex items-center gap-3 mb-2 text-sm text-gray-600">
                            <p class="font-bold">Event Organizer:</p>
                            <p>{{$eventOrganizer}}</p>
                        </div> --}}
                        <div class="flex gap-5 item-center" >
                            <p class="text-sm text-gray-600">
                                <i class="fa-solid fa-calendar-days"></i>
                                {{$eventDate}}
                            </p>
                            <p class="text-sm text-gray-600">
                                <i class="fa-solid fa-clock"></i>
                                {{$eventStartTime}} - {{$eventEndTime}}
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <p>
                        {{$eventDesc}}
                    </p>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white rounded shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <h3 class="mb-3 text-lg font-bold">Invited Participants</h3>
            <livewire:tables.livewire-table.my-event-participant-table />
            {{-- <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Participant
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Department
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Position
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Jeff Hall
                            </th>
                            <td class="px-6 py-4">
                                Sales
                            </td>
                            <td class="px-6 py-4">
                                Associate
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Clarence Ortiz
                            </th>
                            <td class="px-6 py-4">
                                HR
                            </td>
                            <td class="px-6 py-4">
                                Head
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Edward Manning
                            </th>
                            <td class="px-6 py-4">
                                IT
                            </td>
                            <td class="px-6 py-4">
                                Supervisor
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Edward Manning
                            </th>
                            <td class="px-6 py-4">
                                IT
                            </td>
                            <td class="px-6 py-4">
                                Supervisor
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
</div>
