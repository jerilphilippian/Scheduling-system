<div class="px-5 sm:pl-24"style="height:100vh">
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
            <div class="my-6 md:flex md:justify-between md:items-center">
                <div>
                    <x-button red label="Add Department" wire:click.lazy='openDepartmentModal'/>
                </div>
            </div>
            <main class="container left-0 right-0 w-full">
                <div class="w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow ">

                    <div class="mt-4">
                        <livewire:tables.livewire-table.department-table />
                    </div>
                </div>
            </main>

            {{-- add department modal --}}
            <x-modal.card title="Add Department" blur wire:model.defer="departmentAddModal">
                <div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Department name" wire:model.lazy='departmentName' />
                        </div>
                    </div>


                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" wire:click='saveDepartment' />
                        </div>
                    </x-slot>
                </div>
            </x-modal.card>
            {{-- add department modal --}}

            {{-- edit department modal --}}
            <x-modal.card title="Edit Department" blur wire:model.defer="departmentEditModal">
                <div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Department name" wire:model.lazy='editDepartmentName' />
                        </div>
                    </div>


                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" wire:click='updateDepartment' />
                        </div>
                    </x-slot>
                </div>
            </x-modal.card>
            {{-- edit department modal --}}


        </main>
    </div>
</div>

