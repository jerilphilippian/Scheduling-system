<div class="px-5 sm:pl-24">
        <main class="flex flex-col flex-1">
            <div class="w-full">
                <p class="text-2xl font-medium text-black">USER MANAGEMENT</p>
                <nav class="text-white">
                    <ol class="inline-flex gap-1 p-0 list-none">
                        <li class="flex items-end "> <p class="text-black"><a href="{{ route('user-management.index') }}">User Management</a></p>
                        </li>
                        <li>
                            <svg class="w-5 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                               <polyline points="9 18 15 12 9 6" />
                            </svg>
                         </li>
                        <li class="flex items-end "> <p class="text-black"><a href="{{ route('user-management.edit', ['user'=> $userId]) }}">Edit User</a></p>
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- CONTENT -->
            <main class="container left-0 right-0 w-full">
                <form wire:submit.prevent='updateUser'>
                    <div class="w-full h-full p-6 mt-8 bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="flex items-center justify-center mb-7">
                            <h3 class="text-lg font-bold">Personal Information</h3>
                        </div>
                        <div class="grid md:grid-cols-[30%_1fr] gap-6">
                            {{-- account --}}
                            <div class="flex flex-col gap-3">
                                <x-input class="pr-28" label="Email Address" suffix="@mail.com" wire:model='email' />
                            </div>
                            <div class="flex flex-col gap-3">
                                <div class="grid gap-2 md:grid-cols-3">
                                    <x-input label="First Name" placeholder="first name" wire:model='firstName' />
                                    <x-input label="Middle Name" placeholder="middle name" wire:model='middleName' />
                                    <x-input label="Last Name" placeholder="last name" wire:model='lastName' />
                                </div>
                                <div class="grid gap-2 md:grid-cols-3">
                                    <x-select
                                        label="Department"
                                        wire:model.defer="model"
                                        placeholder="Select department"
                                        :async-data="route('api.department.references')"
                                        option-label="name"
                                        option-value="id"
                                        wire:model.defer="department"
                                    />
                                    <x-select
                                        label="Position"
                                        wire:model.defer="model"
                                        placeholder="Select Position"
                                        :async-data="route('api.position.references')"
                                        option-label="name"
                                        option-value="id"
                                        wire:model.defer="position"
                                    />
                                    <x-select
                                        label="Role"
                                        placeholder="Select Role"
                                        :options="['Admin', 'User']"
                                        wire:model.defer="role"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-3 mt-3">
                        <x-button href="{{route('user-management.index')}}" red label="Back" />
                        <x-button type='submit' dark label="Save" />
                    </div>
                </form>
            </main>
        </main>
    </div>
</div>

