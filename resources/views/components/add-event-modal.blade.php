<x-modal.card title="Add Event" blur wire:model.defer="addEventModal">
    <div class="grid md:grid-cols-[1fr_1fr] gap-3">
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

    <x-slot name="footer">
        <div class="flex items-center justify-end">
            <x-button dark label="Save Event" />
        </div>
    </x-slot>
</x-modal.card>
