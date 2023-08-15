<div class="px-5 sm:pl-24">
    <div class="flex flex-col flex-1">
        <main class="">
            <div class="w-full mb-3">
                <p class="text-2xl font-medium text-black">USER MANAGEMENT</p>
                <nav class="text-white">
                    <ol class="inline-flex gap-1 p-0 list-none">
                        <li class="flex items-end "> <p class="text-black"><a href="{{ route('user-management.index') }}">User Management</a></p>
                        </li>
                    </ol>
                </nav>
            </div>
            {{-- menu --}}
            @include('components.user-management-menu')
            {{-- menu --}}
            <!-- CONTENT -->
            <main class="container left-0 right-0 w-full">
                <div class="w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <div class="md:flex md:justify-between md:items-center">
                        <div>
                            <x-button red label="Add Position" wire:click.lazy='addPositionModal'/>
                        </div>
                    </div>

                    <div class="mt-4">
                        <livewire:tables.livewire-table.position-table />
                    </div>
                </div>
            </main>

            {{-- add position modal --}}
            <x-modal.card title="Add Position" blur wire:model.defer="openAddPositionModal">
                <div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Position name" wire:model.lazy='position' />
                        </div>
                    </div>


                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" wire:click='savePosition' />
                        </div>
                    </x-slot>
                </div>
            </x-modal.card>
            {{-- add department modal --}}

            {{-- edit department modal --}}
            <x-modal.card title="Edit Position" blur wire:model.defer="openEditModal">
                <div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Department name" wire:model.lazy='editPosition' />
                        </div>
                    </div>


                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" wire:click='editPosition' />
                        </div>
                    </x-slot>
                </div>
            </x-modal.card>
            {{-- edit department modal --}}


        </main>
    </div>
</div>


