<div class="px-5 sm:pl-24"style="height:100vh">
    <div class="w-full">
         <p class="font-mono text-2xl font-bold text-black capitalize mb-7 animate__animated animate__bounceInLeft">
            Approval
          </p>
          <!-- BREADCRUMBS -->
          <nav class="text-black">
             <ol class="inline-flex gap-1 p-0 text-black list-none">
                <li class="flex items-end ">
                   <p class="">Events</p>
                </li>
                <li>
                   <svg class="w-5 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
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

    </div>
</div>


