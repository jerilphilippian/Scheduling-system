<div>


    <div class="flex flex-1 flex-col px-24">
        <!-- Main -->
        <main class="flex flex-col px-8 flex-1 ">
          <div class="grid justify-between grid-cols-1 gap-6 mb-6 md:grid-cols-1 xl:grid-cols-3">
              <div class="bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
                  <div class="flex justify-between mx-3">
                      <div class="flex items-center text-base font-medium text-gray-600">Total Number of Users</div>
                      <div
                          class="flex items-center justify-center mt-2 transition-all duration-500 bg-white border border-red-800 rounded-full w-11 h-11 bg-opacity-10">
                          <i class="text-xl text-red-800 fa-solid fa-user"></i>
                      </div>
                  </div>
                  <div class="flex justify-center mt-4 mb-8">
                      <span class="text-5xl font-normal ">0</span>
                  </div>

                  <div class="w-full p-3 bg-gray-200">
                      <div class="flex justify-around">
                          <div class="text-center">
                              <p class="text-lg font-bold">0</p>
                              <p class="text-xs">Active</p>
                          </div>
                          <div class="text-center">
                              <p class="text-lg font-bold">0</p>
                              <p class="text-xs">Inactive</p>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
                  <div class="flex justify-between mx-3">
                      <div class="flex items-center text-base font-medium text-gray-600">Total Number of Applicants</div>
                      <div
                          class="flex items-center justify-center mt-2 transition-all duration-500 bg-white border border-red-800 rounded-full w-11 h-11 bg-opacity-10">
                          <i class="text-xl text-red-800 fa-solid fa-user-tie"></i>
                      </div>
                  </div>
                  <div class="flex justify-center mt-4 mb-8">
                      <span class="text-5xl font-normal ">0</span>
                  </div>
                  <div class="w-full p-3 bg-gray-200">
                      <div class="flex justify-around">
                          <div class="text-center">
                              <p class="text-lg font-bold">0</p>
                              <p class="text-xs">Hired</p>
                          </div>
                          <div class="text-center">
                              <p class="text-lg font-bold">0</p>
                              <p class="text-xs">Pending</p>
                              {{-- <p class="text-xs">Decline</p> --}}
                          </div>
                          <div class="text-center">
                              <p class="text-lg font-bold">0</p>
                              <p class="text-xs">On Process</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
                  <div class="flex justify-between mx-3">
                      <div class="flex items-center text-base font-medium text-gray-600">Total Number of Careers</div>
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
                              <p class="text-xs">Active</p>
                          </div>
                          <div class="text-center">
                              <p class="text-lg font-bold">0</p>
                              <p class="text-xs">Inactive</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--2nd box graph-->
          <div class="w-full col-span-2 mt-6 bg-white h-72 rounded-lg"
          style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); display: flex; flex-direction: column;">
          <p class="flex items-center px-5 my-3 font-medium text-gray-800" style="white-space: pre-line;">Most applied Job Positions</p>
          <div id="chart">
          </div>
      </div>

      <div class="w-full col-span-2 mt-6 bg-white h-72 rounded-lg"
      style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); display: flex; flex-direction: column;">
      <p class="flex items-center px-5 my-3 font-medium text-gray-800" style="white-space: pre-line;">Most applied Job Positions</p>
      <div id="chart">
      </div>
  </div>
      <!--2nd box graph end-->
          <!-- Content -->
        </main>
      </div>



</div>
