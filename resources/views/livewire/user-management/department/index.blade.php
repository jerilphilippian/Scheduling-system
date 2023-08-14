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
            <ul class="inline-flex items-center gap-6 px-5 py-3 mt-2 mb-2 text-xs font-semibold tracking-wider text-red-900 bg-white rounded-md shadow">
                <a href="{{ route('user-management.index') }}" class="relative nav active">
                    <li class="font-bold capitalize">User Management</li>
                    <div class="nav-underline"></div>
                </a>
                <a href="{{route('department.index')}}" class="relative nav">
                    <li class="font-bold capitalize">Department</li>
                    <div class="nav-underline"></div>
                </a>
            </ul>
            <!-- CONTENT -->
            <main class="container left-0 right-0 w-full">
                <div class="w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow ">
                    <div class="md:flex md:justify-between md:items-center">
                        <div>
                            <x-button red label="Add Department" wire:click.lazy='openDepartmentModal'/>
                        </div>
                    </div>

                    <div class="mt-4">
                        <livewire:tables.livewire-table.department-table />
                    </div>
                </div>
            </main>

            {{-- add department modal --}}
            <x-modal.card title="Add Department" blur wire:model.defer="departmentAddModal">
                <form wire:submit.prevent="saveDepartment">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Department name" wire:model.lazy='departmentName' />
                        </div>
                    </div>


                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" type="submit" />
                        </div>
                    </x-slot>
                </form>
            </x-modal.card>
            {{-- add department modal --}}

            {{-- edit department modal --}}
            <x-modal.card title="Edit Department" blur wire:model.defer="departmentEditModal">
                <form wire:submit.prevent="updateDepartment">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Department name" wire:model.lazy='departmentName' />
                        </div>
                    </div>


                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" type="submit" />
                        </div>
                    </x-slot>
                </form>
            </x-modal.card>
            {{-- edit department modal --}}


        </main>
    </div>
</div>

