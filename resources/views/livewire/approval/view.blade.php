<div class="px-5 sm:pl-24">
    <div class="w-full">
        <p class="text-2xl font-medium text-black">
          Approval
        </p>
        <!-- BREADCRUMBS -->
        <nav class="text-black">
           <ol class="inline-flex gap-1 p-0 list-none">
              <li class="flex items-end ">
                 <p class="">Approval</p>
              </li>
              <li>
                 <svg class="w-5 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                 </svg>
              </li>
              <li class="flex items-end ">
                 <p class="">Approval view</p>
              </li>
           </ol>
        </nav>

        <!-- MENUS -->
        <div class="flex items-center justify-between">
            @include('components.approval-menu')
            <div>
                <x-button emerald label="Accept" />
                <x-button red label="Decline" data-modal-target="declineModal" data-modal-toggle="declineModal" />
            </div>
        </div>
        <!-- MENUS -->
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-[450px_1fr] gap-2">
        <div class="p-4 bg-white rounded shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <h3 class="mb-3 text-lg font-bold">{{$eventTitle}}</h3>
            <div class="">
                <div class="mb-3">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-3 mb-2 text-sm text-gray-600">
                            <p class="font-bold">Event Organizer:</p>
                            <p>{{$eventOrganizer}}</p>
                        </div>
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
            <h3 class="mb-3 text-lg font-bold">List of participants</h3>
            <div class="relative overflow-x-auto">
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
            </div>
        </div>
    </div>

    {{-- decline invitation modal --}}
    <div id="declineModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Decline Event
                    </h3>
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="declineModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <x-textarea label="Reason" placeholder="write your reason why you decline this event" />
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    <x-button red label="Submit" />
                </div>
            </form>
        </div>
    </div>
    {{-- decline invitation modal --}}
</div>
