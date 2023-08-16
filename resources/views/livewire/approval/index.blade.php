<div class="px-5 sm:pl-24"style="height:100vh">
    <div class="w-full">
         <p class="font-mono text-2xl font-bold text-white capitalize mb-7 animate__animated animate__bounceInLeft">
            Approval
          </p>
          <!-- BREADCRUMBS -->
          <nav class="text-black">
             <ol class="inline-flex gap-1 p-0 text-white list-none">
                <li class="flex items-end ">
                   <p class="">Events</p>
                </li>
                <li>
                   <svg class="w-5 h-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="9 18 15 12 9 6" />
                   </svg>
                </li>
                <li class="flex items-end ">
                   <p class="">Approval</p>
                </li>
             </ol>
          </nav>

         <!-- MENUS -->
         <div class="flex items-center justify-between">
             @include('components.event-menu')
         </div>
         <!-- MENUS -->

         <div class="w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow ">
            <div>
                <livewire:tables.livewire-table.approval-table />
            </div>
        </div>

        <x-modal wire:model.defer="simpleModal">
            <x-card title="Consent Terms">
                <p class="text-gray-600">
                    Lorem Ipsum...
                </p>

                <x-slot name="footer">
                    <div class="flex justify-end gap-x-4">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button primary label="I Agree" />
                    </div>
                </x-slot>
            </x-card>
        </x-modal>

    </div>
</div>


