<div class="px-5 sm:pl-24">
    <div class="capitalize text-2xl mb-7 text-black font-mono font-bold animate__animated animate__bounceInLeft">Dashboard</div>
    <div class="flex flex-1 flex-col">
        <!-- Main -->
        <main class="flex flex-col flex-1 ">
            <div class="grid justify-between grid-cols-1 gap-6 mb-6 md:grid-cols-1 xl:grid-cols-3 animate__animated animate__bounceInUp">
                <div class="bg-white"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
                    <div class="flex justify-between mx-3">
                        <div class="flex text-base font-medium text-gray-600">Total Number of Users</div>
                        <div
                            class="flex items-center justify-center mt-2 transition-all duration-500 bg-white border border-red-800 rounded-full w-11 h-11 bg-opacity-10">
                            <i class="text-xl text-red-800 fa-solid fa-user"></i>
                        </div>
                    </div>
                    <div class="flex justify-center mt-4 mb-8">
                        <span class="text-5xl font-normal ">{{$activeUser+$inactiveUser}}</span>
                    </div>

                    <div class="w-full p-3 bg-gray-200">
                        <div class="flex justify-around">
                            <div class="text-center">
                                <p class="text-lg font-bold">{{$activeUser}}</p>
                                <p class="text-xs">Active</p>
                            </div>
                            <div class="text-center">
                                <p class="text-lg font-bold">{{$inactiveUser}}</p>
                                <p class="text-xs">Inactive</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
                    <div class="flex justify-between mx-3">
                        <div class="flex items-center text-base font-medium text-gray-600">Total Number of Rooms
                        </div>
                        <div
                            class="flex items-center justify-center mt-2 transition-all duration-500 bg-white border border-red-800 rounded-full w-11 h-11 bg-opacity-10">
                            <i class="text-xl text-red-800 fa-solid fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="flex justify-center mt-4 mb-8">
                        <span class="text-5xl font-normal ">{{$totalRooms}}</span>
                    </div>
                    <div class="w-full p-3 bg-gray-200">
                        <div class="flex justify-around">
                            <div class="text-center">
                                <p class="text-lg font-bold">0</p>
                                <p class="text-xs">Available</p>
                            </div>
                            <div class="text-center">
                                <p class="text-lg font-bold">0</p>
                                <p class="text-xs">Unavailable</p>
                                {{-- <p class="text-xs">Decline</p> --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="bg-white"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
                    <div class="flex justify-between mx-3">
                        <div class="flex items-center text-base font-medium text-gray-600">Total Number of Events Today</div>
                        <div
                            class="flex items-center justify-center mt-2 transition-all duration-500 bg-white border border-red-800 rounded-full w-11 h-11 bg-opacity-10">
                            <i class="text-xl text-red-800 fa-solid fa-briefcase"></i>
                        </div>
                    </div>

                    <div class="flex justify-center mt-4 mb-8">
                        <span class="text-5xl font-normal ">0</span>
                    </div>

                    <div class="w-full p-3 bg-gray-200">
                        <div class="flex justify-around">
                            <div class="text-center">
                                <p class="text-lg font-bold">0</p>
                                <p class="text-xs">Incoming</p>
                            </div>
                            <div class="text-center">
                                <p class="text-lg font-bold">0</p>
                                <p class="text-xs">Ongoing</p>
                            </div>
                            <div class="text-center">
                                <p class="text-lg font-bold">0</p>
                                <p class="text-xs">Done</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--bar event 1 start-->
            <div class="gap-5 mt-1 rounded-lg lg:grid lg:grid-cols-2">
                <div class="w-full h-auto bg-white rounded-lg animate__animated animate__bounceInLeft"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <p class="flex items-center justify-center h-auto px-5 py-4 text-sm font-medium text-gray-800 ">
                        Total Number Of
                        Events Per Month</p>

                    <!--date start-->
                        <div class="flex justify-center">

<div date-rangepicker class="flex items-center">
    <div class="relative">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
          </svg>
      </div>
      <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
    </div>
    <span class="mx-4 text-gray-500">to</span>
    <div class="relative">
      <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
          </svg>
      </div>
      <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
  </div>
  </div>

                        </div>

                    <!--date end-->
                    <div class="flex justify-start mb-5 md:mt-5">

                            <div class="w-full p-5" id="bar-chart"></div>
                          <div class="grid items-center justify-between grid-cols-1 border-t border-gray-200 dark:border-gray-700">
                          </div>

                    </div>

                </div>
                <div class="w-full h-auto bg-white rounded-lg animate__animated animate__bounceInRight"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <p class="flex items-center justify-center h-auto px-5 py-4 text-sm font-medium text-gray-800 ">
                        Total
                        Number of Set Events Per Department</p>
                    <div class="flex justify-center w-full mt-12">
                        <div class="flex items-start w-11/12 sm:w-9/12 md:w-10/12 ">
                            <canvas id="myChart1" class="w-full"></canvas>
                        </div>
                    </div>
                </div>

            </div>
            <!--bar 1 event end-->

            <!--2nd box graph-->
            <div class="w-full h-full col-span-2 mt-6 bg-white rounded-lg"
                style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); display: flex; flex-direction: column;">
                <p class="flex items-center justify-center px-5 my-3 font-medium text-gray-800"
                    style="white-space: pre-line;">Total Number Of Use Rooms Per Month</p>
                <div class="flex items-start w-11/12 m-8 sm:w-9/12 md:w-10/12 ">
                    <canvas id="myChart-room" class="w-full"></canvas>
                </div>
            </div>


            <!--2nd box graph end-->
            <!-- Content -->
        </main>
    </div>



</div>
