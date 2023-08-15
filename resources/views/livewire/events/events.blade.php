<div class="px-5 sm:pl-24">
    <div class="w-full">
        <p class="capitalize text-2xl mb-7 text-black font-mono font-bold animate__animated animate__bounceInLeft">
          Events
        </p>
        <!-- BREADCRUMBS -->
        <nav class="text-black">
           <ol class="inline-flex gap-1 p-0 list-none">
              <li class="flex items-end ">
                 <p class="">Events</p>
              </li>
              <li>
                 <svg class="w-5 h-6 text-black" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                 </svg>
              </li>
              <li class="flex items-end ">
                 <p class="">All Events</p>
              </li>
           </ol>
        </nav>

        <!-- MENUS -->
        @include('components.event-menu')
        <!-- MENUS -->
    </div>
     <!-- This is an example component -->
    <div>
        <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak >
            <div class="container grid grid-cols-1 lg:grid-cols-[1fr_450px] gap-2 animate__animated animate__bounceInUp">
                <div class="overflow-hidden bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] rounded-lg">
                    <div class="flex items-center justify-between px-6 py-2">
                        <div>
                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                            <span x-text="year" class="ml-1 text-lg font-normal text-gray-600"></span>
                        </div>
                        <div class="px-1 border rounded-lg" style="padding-top: 2px;">
                            <button
                                type="button"
                                class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out rounded-lg cursor-pointer hover:bg-gray-200"
                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                :disabled="month == 0 ? true : false"
                                @click="month--; getNoOfDays()">
                                <svg class="inline-flex w-6 h-6 leading-none text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </button>
                            <div class="inline-flex h-6 border-r"></div>
                            <button
                                type="button"
                                class="inline-flex items-center p-1 leading-none transition duration-100 ease-in-out rounded-lg cursor-pointer hover:bg-gray-200"
                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                :disabled="month == 11 ? true : false"
                                @click="month++; getNoOfDays()">
                                <svg class="inline-flex w-6 h-6 leading-none text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="-mx-1 -mb-1">
                        <div class="flex flex-wrap" style="margin-bottom: -40px;">
                            <template x-for="(day, index) in DAYS" :key="index">
                                <div style="width: 14.26%" class="px-2 py-2">
                                    <div x-text="day" class="text-sm font-bold tracking-wide text-center text-gray-600 uppercase"></div>
                                </div>
                            </template>
                        </div>

                        <div class="flex flex-wrap border-t border-l">
                            <template x-for="blankday in blankdays">
                                <div
                                    style="width: 14.28%; height: 120px"
                                    class="px-4 pt-2 text-center border-b border-r"
                                ></div>
                            </template>
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                <div style="width: 14.28%; height: 120px" class="relative px-4 pt-2 border-b border-r">
                                    <div
                                        @click="showEventModal(date)"
                                        x-text="date"
                                        class="inline-flex items-center justify-center w-6 h-6 leading-none text-center transition duration-100 ease-in-out rounded-full cursor-pointer"
                                        :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                    ></div>
                                    <div style="height: 80px;" class="mt-1 overflow-y-auto">
                                        <!-- <div
                                            class="absolute top-0 right-0 inline-flex items-center justify-center w-6 h-6 mt-2 mr-2 text-sm leading-none text-white bg-gray-700 rounded-full"
                                            x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
                                            x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

                                        <template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                            <div
                                                class="px-2 py-1 mt-1 overflow-hidden border rounded-lg"
                                                :class="{
                                                    'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
                                                    'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
                                                    'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
                                                    'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
                                                    'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
                                                }"
                                            >
                                                <p x-text class="text-sm leading-tight truncate">wadawd</p>
                                            </div>
                                        </template>
                                        <p data-modal-target="staticModal" data-modal-toggle="staticModal" class="text-sm leading-tight truncate">wadawd</p>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full rounded-lg shadow">
                    <div class="w-full h-full p-4 bg-white rounded-lg shadow">
                        <div class="flex gap-2 mb-7">
                            <div class="w-[3px] h-4px bg-[#860909]"></div>
                            <h2 class="text-base font-bold text-[#860909]">Weekly Events</h2>
                        </div>
                        <div>
                            <ul class="flex flex-col gap-3 ">
                                @forelse ($eventList as $event)
                                    {{-- {{dd($event->users[0]['name'])}} --}}
                                    <a href="{{route('events.view', $event->id)}}" class="p-3 rounded hover:bg-gray-100">
                                        <li class="flex gap-2">
                                            <div class="w-[50px] h-[50px]">
                                                <img
                                                    src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                    alt="sample image"
                                                    class="object-cover w-full h-full"
                                                >
                                            </div>
                                            <div class="flex flex-col">
                                                <h4 class="flex-1 font-bold">{{$event->name}}</h4>
                                                <div>
                                                    <div class="flex items-center gap-4">
                                                        <p class="text-sm text-gray-600">
                                                            <i class="fa-solid fa-building-user"></i>
                                                            {{$event->users[0]['name']}}
                                                        </p>
                                                        <p class="text-sm text-gray-600">
                                                            <i class="fa-solid fa-clock"></i>
                                                            {{\Carbon\Carbon::parse($event->start_time)->format('g:i A')}} - {{\Carbon\Carbon::parse($event->end_time)->format('g:i A')}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                @empty

                                @endforelse
                                {{-- <a href="{{route('events.view')}}" class="p-3 rounded hover:bg-gray-100">
                                    <li class="flex gap-2">
                                        <div class="w-[50px] h-[50px]">
                                            <img
                                                src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                                alt="sample image"
                                                class="object-cover w-full h-full"
                                            >
                                        </div>
                                        <div class="flex flex-col">
                                            <h4 class="flex-1 font-bold">Digital Marketing Summit</h4>
                                            <div>
                                                <div class="flex items-center gap-4">
                                                    <p class="text-sm text-gray-600">
                                                        <i class="fa-solid fa-building-user"></i>
                                                        IT Department
                                                    </p>
                                                    <p class="text-sm text-gray-600">
                                                        <i class="fa-solid fa-clock"></i>
                                                        12:00 AM - 1:00 PM
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </a> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div id="eventModal" style="background-color: rgba(0, 0, 0, 0.8)" class="fixed top-0 bottom-0 left-0 right-0 z-40 w-full h-full" x-show.transition.opacity="openEventModal">
                <div class="absolute left-0 right-0 max-w-xl p-4 mx-auto mt-24 overflow-hidden">
                    <div class="absolute top-0 right-0 inline-flex items-center justify-center w-10 h-10 text-gray-500 bg-white rounded-full shadow cursor-pointer hover:text-gray-800"
                        x-on:click="openEventModal = !openEventModal">
                        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                        </svg>
                    </div>

                    <div class="block w-full p-8 overflow-hidden bg-white rounded-lg shadow">
                        <h2 class="pb-2 mb-6 text-2xl font-bold text-gray-800 border-b">Add Event Details</h2>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Event title</label>
                            <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_title">
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Event date</label>
                            <input class="w-full px-4 py-2 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" readonly>
                        </div>

                        <div class="inline-block w-64 mb-4">
                            <label class="block mb-1 text-sm font-bold tracking-wide text-gray-800">Select a theme</label>
                            <div class="relative">
                                <select @change="event_theme = $event.target.value;" x-model="event_theme" class="block w-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-gray-200 border-2 border-gray-200 rounded-lg appearance-none hover:border-gray-500 focus:outline-none focus:bg-white focus:border-blue-500">
                                        <template x-for="(theme, index) in themes">
                                            <option :value="theme.value" x-text="theme.label"></option>
                                        </template>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-right">
                            <button type="button" class="px-4 py-2 mr-2 font-semibold text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100" @click="openEventModal = !openEventModal">
                                Cancel
                            </button>
                            <button type="button" class="px-4 py-2 font-semibold text-white bg-gray-800 border border-gray-700 rounded-lg shadow-sm hover:bg-gray-700" @click="addEvent()">
                                Save Event
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Modal -->
        </div>

        <script>
            window.addEventListener('load', function(){
                document.querySelector('#eventModal').style.display = 'none'
            })
        </script>

        <script>
            const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            function app() {
                return {
                    month: '',
                    year: '',
                    no_of_days: [],
                    blankdays: [],
                    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                    events: [
                        {
                            event_date: new Date(2020, 3, 1),
                            event_title: "April Fool's Day",
                            event_theme: 'blue'
                        },

                        {
                            event_date: new Date(2020, 3, 10),
                            event_title: "Birthday",
                            event_theme: 'red'
                        },

                        {
                            event_date: new Date(2020, 3, 16),
                            event_title: "Upcoming Event",
                            event_theme: 'green'
                        }
                    ],
                    event_title: '',
                    event_date: '',
                    event_theme: 'blue',

                    themes: [
                        {
                            value: "blue",
                            label: "Blue Theme"
                        },
                        {
                            value: "red",
                            label: "Red Theme"
                        },
                        {
                            value: "yellow",
                            label: "Yellow Theme"
                        },
                        {
                            value: "green",
                            label: "Green Theme"
                        },
                        {
                            value: "purple",
                            label: "Purple Theme"
                        }
                    ],

                    openEventModal: false,

                    initDate() {
                        let today = new Date();
                        this.month = today.getMonth();
                        this.year = today.getFullYear();
                        this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                    },

                    isToday(date) {
                        const today = new Date();
                        const d = new Date(this.year, this.month, date);

                        return today.toDateString() === d.toDateString() ? true : false;
                    },

                    showEventModal(date) {
                        // open the modal
                        this.openEventModal = true;
                        this.event_date = new Date(this.year, this.month, date).toDateString();
                    },

                    addEvent() {
                        if (this.event_title == '') {
                            return;
                        }

                        this.events.push({
                            event_date: this.event_date,
                            event_title: this.event_title,
                            event_theme: this.event_theme
                        });

                        console.log(this.events);

                        // clear the form data
                        this.event_title = '';
                        this.event_date = '';
                        this.event_theme = 'blue';

                        //close the modal
                        this.openEventModal = false;
                    },

                    getNoOfDays() {
                        let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                        // find where to start calendar day of week
                        let dayOfWeek = new Date(this.year, this.month).getDay();
                        let blankdaysArray = [];
                        for ( var i=1; i <= dayOfWeek; i++) {
                            blankdaysArray.push(i);
                        }

                        let daysArray = [];
                        for ( var i=1; i <= daysInMonth; i++) {
                            daysArray.push(i);
                        }

                        this.blankdays = blankdaysArray;
                        this.no_of_days = daysArray;
                    }
                }
            }
        </script>
    </div>
</div>
<!-- Main modal -->
<div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="bg-gray-500 fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Static modal
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <h1 class="text-center">Event 1</h1>
                <div class="flex flex-row gap-4">
                <p class="text-black text-bold">Event Name:</p>
                <p></p>
                </div>
                <div class="flex flex-row gap-4">
                    <p class="text-black text-bold">Event Organizer:</p>
                    <p></p>
                    </div>
                    <div class="flex flex-row gap-4">
                        <p class="text-black text-bold">Event Time:</p>
                        <p></p>
                        </div>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="{{route('events.view-event')}}">View</a></button>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="staticModal" type="button" class=" text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>
