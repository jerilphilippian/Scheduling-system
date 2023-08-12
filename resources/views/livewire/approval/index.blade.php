<div class="px-5 sm:pl-24">
    <div class="w-full">
        <p class="text-2xl font-medium text-black ">
          Approval
        </p>

        <!-- BREADCRUMBS -->
        {{-- <nav class="text-black">
            <ol class="inline-flex gap-1 p-0 list-none">
               <li class="flex items-end ">
                  <p class="">Approval</p>
               </li>
            </ol>
         </nav> --}}

         <!-- MENUS -->
         <div class="flex items-center justify-between">
             @include('components.approval-menu')
         </div>
         <!-- MENUS -->


        <div>
            {{-- <div class="relative overflow-x-auto">
            <div class="relative overflow-x-auto animate__animated animate__bounceInUp">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Event
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Created By
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Time
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
                                August 20, 2023
                            </td>
                            <td class="px-6 py-4">
                                Employee
                            </td>
                            <td class="px-6 py-4">
                                8:00 AM - 9:00AM
                            </td>
                            <td class="px-6 py-4">
                                <x-button href="{{route('approval.view')}}" dark label="View" />
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Seminar
                            </th>
                            <td class="px-6 py-4">
                                August 20, 2023
                            </td>
                            <td class="px-6 py-4">
                                Employee
                            </td>
                            <td class="px-6 py-4">
                                8:00 AM - 9:00AM
                            </td>
                            <td class="px-6 py-4">
                                <x-button href="{{route('approval.view')}}" dark label="View" />
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Seminar
                            </th>
                            <td class="px-6 py-4">
                                August 20, 2023
                            </td>
                            <td class="px-6 py-4">
                                Employee
                            </td>
                            <td class="px-6 py-4">
                                8:00 AM - 9:00AM
                            </td>
                            <td class="px-6 py-4">
                                <x-button href="{{route('approval.view')}}" dark label="View" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
            <livewire:tables.livewire-table.approval-table />
        </div>

    </div>
</div>


