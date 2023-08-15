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
                            <x-button href="{{route('user-management.create')}}" red label="Add Employee"/>
                        </div>
                    </div>

                    <div class="mt-4">
                        <livewire:tables.user-table />
                    </div>
                </div>
            </main>
        </main>
    </div>
</div>
