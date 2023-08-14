<div class="px-5 sm:pl-24">
    <div class="w-full">
        <p class="mb-3 text-2xl font-medium text-black">
          My Events
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
                 <p class="">My Events</p>
              </li>
           </ol>
        </nav>

        <!-- MENUS -->
        <div class="flex items-center justify-between">
            @include('components.event-menu')
            {{-- <x-button red label="Add Event" data-modal-target="saveEventModal" data-modal-toggle="saveEventModal" /> --}}
            <x-button red label="Add Event" wire:click="openModal" />
        </div>
        <!-- MENUS -->

        <div>
            <livewire:tables.livewire-table.events-table />
        </div>

        {{-- add event modal --}}
        <div id="saveEventModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-auto max-w-[60%]  max-h-full">
                <!-- Modal content -->
                <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add Event
                        </h3>
                        <button type="button" class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="saveEventModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-[1fr_300px] gap-3">
                            <div class="flex flex-col gap-4">
                                <div>
                                    <x-input icon="calendar" label="Event Name" />
                                </div>
                                <div>
                                    <x-select
                                        label="Event Type"
                                        wire:model.defer="model"
                                        placeholder="Select some user"
                                        {{-- :async-data="route('api.users.index')" --}}
                                        option-label="name"
                                        option-value="id"
                                    />
                                </div>
                                <div>
                                    <x-select
                                        label="Room"
                                        wire:model.defer="model"
                                        placeholder="Select some user"
                                        {{-- :async-data="route('api.users.index')" --}}
                                        option-label="name"
                                        option-value="id"
                                    />
                                </div>
                                <div>
                                    <x-datetime-picker
                                        label="Appointment Date"
                                        placeholder="Appointment Date"
                                        display-format="DD-MM-YYYY HH:mm"
                                        {{-- wire:model.defer="displayFormat" --}}
                                    />
                                </div>
                                <div class="flex items-center gap-4">
                                    <x-time-picker
                                        label="Start Time"
                                        placeholder="12:00 AM"
                                        wire:model.defer="timePicker"
                                    />
                                    <x-time-picker
                                        label="End Time"
                                        placeholder="12:00 AM"
                                        wire:model.defer="timePicker"
                                    />
                                </div>
                                <div>
                                    <x-textarea label="Event Description"/>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div>
                                    <x-select
                                        label="Participants"
                                        placeholder="Select many statuses"
                                        multiselect
                                        :options="['Active', 'Pending', 'Stuck', 'Done']"
                                        wire:model.defer="model"
                                    />
                                </div>
                                <div>
                                    <h2 class="font-bold text-[#374151] mb-1">Selected participants</h2>
                                    <ul class="p-3 bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] rounded h-[400px] overflow-y-scroll">
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="saveEventModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                        <x-button red label="Save" />
                    </div>
                </form>
            </div>
        </div>
        {{-- add event modal --}}

        {{-- Edit event modal --}}
        <div id="editEventModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-auto max-w-[60%]  max-h-full">
                <!-- Modal content -->
                <form class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Add Event
                        </h3>
                        <button type="button" class="inline-flex items-center justify-center w-8 h-8 ml-auto text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editEventModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-[1fr_300px] gap-3">
                            <div class="flex flex-col gap-4">
                                <div>
                                    <x-input icon="calendar" label="Event Name" />
                                </div>
                                <div>
                                    <x-select
                                        label="Event Type"
                                        wire:model.defer="model"
                                        placeholder="Select some user"
                                        {{-- :async-data="route('api.users.index')" --}}
                                        option-label="name"
                                        option-value="id"
                                    />
                                </div>
                                <div>
                                    <x-select
                                        label="Room"
                                        wire:model.defer="model"
                                        placeholder="Select some user"
                                        {{-- :async-data="route('api.users.index')" --}}
                                        option-label="name"
                                        option-value="id"
                                    />
                                </div>
                                <div>
                                    <x-datetime-picker
                                        label="Appointment Date"
                                        placeholder="Appointment Date"
                                        display-format="DD-MM-YYYY HH:mm"
                                        {{-- wire:model.defer="displayFormat" --}}
                                    />
                                </div>
                                <div class="flex items-center gap-4">
                                    <x-time-picker
                                        label="Start Time"
                                        placeholder="12:00 AM"
                                        wire:model.defer="timePicker"
                                    />
                                    <x-time-picker
                                        label="End Time"
                                        placeholder="12:00 AM"
                                        wire:model.defer="timePicker"
                                    />
                                </div>
                                <div>
                                    <x-textarea label="Event Description"/>
                                </div>
                            </div>
                            <div class="flex flex-col gap-4">
                                <div>
                                    <x-select
                                        label="Participants"
                                        placeholder="Select many statuses"
                                        multiselect
                                        :options="['Active', 'Pending', 'Stuck', 'Done']"
                                        wire:model.defer="model"
                                    />
                                </div>
                                <div>
                                    <h2 class="font-bold text-[#374151] mb-1">Selected participants</h2>
                                    <ul class="p-3 bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] rounded h-[400px] overflow-y-scroll">
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                        <li>
                                            <p>Ronel Florida</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="saveEventModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                        <x-button red label="Save" />
                    </div>
                </form>
            </div>
        </div>
        {{-- Edit event modal --}}
        @include('components.edit-event-modal')
        @include('components.add-event-modal')


    </div>
</div>
