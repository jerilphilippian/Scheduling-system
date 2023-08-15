<div class="px-5 sm:pl-24">
    <div class="flex flex-col flex-1">
        <main class="">
            <div class="w-full mb-3">
                <p class="text-2xl font-medium text-black">ROLES MANAGEMENT</p>
                <nav class="text-white">
                    <ol class="inline-flex gap-1 p-0 list-none">
                        <li class="flex items-end "> <p class="text-black"><a href="{{ route('user-management.index') }}">Roles Management</a></p>
                        </li>
                    </ol>
                </nav>
            </div>
            <ul class="inline-flex items-center gap-6 px-5 py-3 mt-2 mb-2 text-xs font-semibold tracking-wider text-red-900 bg-white rounded-md shadow">
                <a href="{{ route('user-management.index') }}" class="relative nav">
                    <li class="font-bold capitalize">User Management</li>
                    <div class="nav-underline"></div>
                </a>
                <a href="{{route('roles.index')}}" class="relative nav active">
                    <li class="font-bold capitalize">Roles</li>
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
                            <x-button red label="Add Roles" wire:click.lazy='openRolesModal'/>
                        </div>
                    </div>

                    <div class="mt-4">
                        <livewire:tables.roles.roles-table />
                    </div>
                </div>
            </main>
            <x-modal.card title="Add Department" blur wire:model.defer="isaddModalOpen">
                <form wire:submit.prevent="saveRoles">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Permission Name" wire:model.lazy='permission_name' auto/>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            @foreach ($restrictions as $index => $restriction)
                           <p class="font-medium text-gray-600">{{ $restriction['description'] }}</p>

                           @foreach ($restriction['section'] as $key => $item)
                              <p class="font-medium text-gray-600">{{ \Str::headline($key) }}</p>

                              <table class="w-full whitespace-nowrap">
                                 <tbody class="divide-y ">
                                    @foreach ($item as $section_key => $section_item)
                                       <tr class="text-gray-700 transition-all duration-150 dark:text-gray-400 cursor-point hover:bg-gray-200">
                                          <td class="px-3 py-2">
                                             <input type="checkbox" id="{{ $key.'-'.$section_key }}" wire:model.lazy="restrictions.{{ $index }}.section.{{ $key }}.{{ $section_key }}.status">
                                             <label class="py-2 font-semibold cursor-pointer" for="{{ $key.'-'.$section_key }}">{{ $section_item['description'] }}</label>
                                          </td>
                                       </tr>
                                    @endforeach

                                 </tbody>
                              </table>
                           @endforeach
                        @endforeach
                        </div>
                    </div>
                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" wire:click="saveRoles" type="submit" />
                        </div>
                    </x-slot>
                </form>
            </x-modal.card>

            <x-modal.card title="Edit Roles" blur wire:model.defer="isEditModalOpen">
                <form wire:submit.prevent="updateRoles">
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            <x-input label="Permission Name" wire:model.lazy='permission_name' />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="col-span-1 sm:col-span-2">
                            @if ($restrictionsUpdate)
                                @foreach ($restrictionsUpdate as $index => $restriction)
                                    <p class="font-medium text-gray-600">{{ $restriction['description'] }}</p>

                                    @foreach ($restriction['section'] as $key => $item)
                                        <p class="font-medium text-gray-600">{{ \Str::headline($key) }}</p>

                                        <table class="w-full whitespace-nowrap">
                                        <tbody class="divide-y ">
                                            @foreach ($item as $section_key => $section_item)
                                                <tr class="text-gray-700 transition-all duration-150 dark:text-gray-400 cursor-point hover:bg-gray-200">
                                                    <td class="px-3 py-2">
                                                    <input type="checkbox" id="{{ $section_key }}" wire:model.lazy="restrictionsUpdate.{{ $index }}.section.{{ $key }}.{{ $section_key }}.status">
                                                    <label class="py-2 font-semibold cursor-pointer" for="{{ $section_key }}">{{ $section_item['description'] }}</label>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                        </table>
                                    @endforeach
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <x-slot name="footer">
                        <div class="flex items-center justify-end">
                            <x-button red label="Save" wire:click="updateRoles" type="submit" />
                        </div>
                    </x-slot>
                </form>
            </x-modal.card>
        </main>
    </div>
</div>
