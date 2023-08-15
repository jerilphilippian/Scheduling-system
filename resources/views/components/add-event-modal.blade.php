<x-modal.card title="Add Event" blur wire:model.defer="addEventModal">
    <div class="grid md:grid-cols-[1fr_1fr] gap-3">
        <div class="flex flex-col gap-4">
            <div>
                <x-input icon="calendar" label="Event Name" wire:model.lazy='eventName' />
            </div>
            <div>
                <x-select
                    label="Event Type"
                    wire:model.defer="eventType"
                    placeholder="Select some user"
                    :async-data="route('api.eventtypes.references')"
                    option-label="type"
                    option-value="id"
                />
            </div>
            <div>
                <x-select
                    label="Room"
                    wire:model.defer="eventRoom"
                    :async-data="route('api.room.references')"
                    option-label="name"
                    option-value="id"
                />
            </div>
            <div>
                <x-datetime-picker
                    label="Appointment Date"
                    placeholder="Appointment Date"
                    display-format="DD-MM-YYYY HH:mm"
                    without-time
                    wire:model.defer="eventDate"
                />
            </div>
            <div class="flex items-center gap-4">
                <x-time-picker
                    label="Start Time"
                    placeholder="12:00 AM"
                    wire:model.defer="startTime"
                />
                <x-time-picker
                    label="End Time"
                    placeholder="12:00 AM"
                    wire:model.defer="endTime"
                />
            </div>
            <div>
                <x-textarea label="Event Description" wire:model='eventDescription' />
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <x-select
                    label="Participants"
                    wire:model.defer="eventUser"
                    multiselect
                    :async-data="route('api.user.references')"
                    option-label="full_name"
                    option-value="id"
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
            <x-button dark label="Save Event" wire:click='create' />
        </div>
    </x-slot>
</x-modal.card>
