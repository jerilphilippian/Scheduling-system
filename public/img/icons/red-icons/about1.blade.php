@extends('layouts/app')
@section('title')
    About
@endsection('title')

@section('main')
<!-- Sticky Navigation Bar (Website View - homepage) -->
<nav class="hidden md:min-h-[91px] md:h-20 md:flex md:justify-around md:sticky md:top-0 md:z-50 md:bg-black">
    <div class="h-full w-[20%] flex items-center">
        <a href="">
            <img class="" src="img/pmc_logo.png" alt="logo" >
        </a>
    </div>
    <div class="w-[50%] flex items-center justify-end">
        <ul class="flex">        
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold " href="/"> Home </a></li>
            <li class="p-3 px-5 bg-danger"><a class="text-white text-base font-semibold" href="/about"> About </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/team"> Team </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/news"> News </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/career"> Career </a></li>
            <li class="p-3 px-5 hover:bg-danger"><a class="text-white text-base font-semibold" href="/contact"> Contact </a></li>
        </ul>
    </div>
</nav>
{{-- <div class=" h-[57vh] md:h-[57vh] imgSliderAbout bg-slate-300">
</div> --}}
<div class="relative pb-[30%] md:pb-[27%]">
    <div class="absolute h-full w-full object-cover imgSliderAbout">

    </div>
</div>
<div class="background-cover bg-cover bg-norepeat" style="background-image: url('img/coverphoto.jpg');">
    <div class="relative flex flex-col items-center pt-[25px] md:pt-[63px] bg-white/[75%]" >
        <div class="flex flex-col items-center w-[90%] md:w-8/12 ">
            <p class="text-3xl md:text-5xl md:tracking-wider font-bebas text-transparent bg-clip-text bg-gradient-to-r from-[#472C2C] to-[#C10000]">About us</p>
            <p class="line-clamp-3 md:line-clamp-0 text-[13px] md:text-[15px] font-medium text-center leading-tight md:leading-loose font-montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam </p>
        </div>
        <div class="relative w-[90%] md:w-[83%] pb-[35%] md:pb-[25%] mt-[20px]" >
            <img src="img/about/about_us.png" class=" absolute h-full w-full object-cover" alt="picture">
            <div class="absolute -bottom-14 md:-bottom-24 flex justify-center">
                <div class="bg-white drop-shadow-lg shadow-gray-300 h-[auto] md:h-[195px] w-[95%] md:w-[85%] ">
                    <p class="font-montserrat font-bold text-xs sm:text-sm md:text-[17px] ml-3 md:ml-5 mt-1 md:mt-4">Welcome to Our Site</p>
                    <p class=" font-montserrat font-medium text-[.6rem] sm:text-xs text-justify md:text-[15px] ml-3 mr-3 md:ml-5 mb-1 md:mt-1 md:leading-loose ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus. 
                    </p>
                    <p class="hidden lg:block lg:font-montserrat lg:font-medium lg:text-[15px] lg:ml-5 lg:mt-5 lg:leading-loose">    
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At auctor urna nunc id cursus. Consequat semper viverra nam libero justo laoreet sit amet cursus. 
                    </p>
                </div>
            </div>
        </div>
    
        <div class="h-[auto] md:h-[440px] w-[90%] md:w-[83%] mt-[75px] md:mt-[160px] md:flex" x-data="{about: false}">
            <div class=" h-[auto] md:h-[380px] w-full md:w-[35%] flex justify-center md:justify-end items-start ">
                <div class="h-full w-[150px] md:w-full bg-[#D60000] rounded-[20px] p-3">
                    <img class="h-full w-full" src="img/about/award.jpg" alt="award">
                </div>
            </div>
            <div class=" h-[auto] w-full md:w-[65%]">
                <div class="h-full w-full">
                    <p class="text-[14px] md:text-[19px] font-montserrat font-semibold text-[#860909] mt-[10px] md:mt-[10px] text-center md:text-start md:ml-[45px] leading-tight md:leading-none">BEST START-UP RISING E-COMMERCE COMPANY FOR 2022.</p>
                    <p class="text-[13px] md:text-[15px] text-center md:text-justify font-montserrat font-normal md:leading-7 md:ml-[45px] md:mt-[10px] line-clamp-5 md:line-clamp-0" >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum.
                    </p>
                    <p class="text-[13px] md:text-[15px] text-center md:text-justify font-montserrat font-normal md:leading-7 md:ml-[45px] md:mt-[10px] line-clamp-5 md:line-clamp-none" x-show="about">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. Tempus quam pellentesque nec nam aliquam. Viverra aliquet eget sit amet. Tempor orci eu lobortis elementum. Vel orci porta non pulvinar neque laoreet suspendisse interdum consectetur. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.
                    </p>
                    <div class="w-full flex justify-center md:justify-start">
                        <button class="bg-black text-white h-9 md:h-10 w-24 md:w-28 font-montserrat text-center text-[.8rem] md:text-[14px] font-medium md:ml-[45px] mt-[10px] md:mt-[15px] hover:bg-[#860909]" @click="about = !about">Read more</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- MISSION,VISION & VALUES --}}
        <div class="h-[auto] md:h-[530px] w-[90%] md:w-[83%] flex flex-col items-center">
            <div class="h-auto mt-5 md:mt-0">
                <p class="font-bebas text-2xl md:text-5xl tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-[#472C2C] to-[#C10000] text-center">COMPANY MISSION VISION AND CORE VALUES</p>
            </div>
            <p class="text-sm text-center md:text-base font-montserrat font-medium md:mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  </p>
            <div class="w-full h-full mt-2 md:mt-6 md:flex md:justify-between">
                <div class="w-full md:w-[340px] flex justify-center mb-3 md:mb-0">
                    <div class="w-[80%] md:w-[340px] h-full bg-gray-700 flex flex-col text-justify bg-cover bg-repeat-norepeat" style="background-image: url('img/about/vision.png')">
                        <p class="font-bebas text-4xl text-white ml-3 mt-[58%]">OUR VISION</p>
                        <p class="font-montserrat text-[0.9rem] text-white ml-3 mr-3 mb-4 md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="w-full md:w-[340px] flex justify-center mb-3 md:mb-0">
                    <div class="w-[80%] md:w-[340px] h-full bg-gray-700 flex flex-col text-justify bg-cover bg-repeat-norepeat" style="background-image: url('img/about/mission.png')">
                        <p class="font-bebas text-4xl text-white ml-3 mt-[58%]">OUR MISSION</p>
                        <p class="font-montserrat text-[0.9rem] text-white ml-3 mr-3 mb-4 md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="w-full md:w-[340px] flex justify-center mb-3 md:mb-0">
                    <div class="w-[80%] md:w-[340px] h-full bg-gray-700 flex flex-col  text-justify bg-cover bg-repeat-norepeat" style="background-image: url('img/about/values.png')">
                        <p class="font-bebas text-4xl text-white ml-3 mt-[58%]">OUR CORE VALUES</p>
                        <p class="font-montserrat text-[0.9rem] text-white ml-3 mr-3 mb-4 md:mb-0 leading-light md:leading-loose">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- milestone (website view) --}}
        <div class="hidden md:block md:relative md:h-[145vh] md:w-full md:mt-[50px] md:flex md:flex-col md:bg-[#302121] md:items-center md:bg-cover md:bg-repeat-norepeat" style="">
            {{-- coverphoto --}}
            <div class="absolute top-0 h-full w-full">
                <img src="img/about/milestone.png" class="h-full w-full opacity-[25%]"  alt="">
            </div>
            <div class="abolute z-10 h-[20%] flex flex-col items-center w-[70%]">
                <div class="h-[60%] flex justify-center items-center">
                    <p class="font-bebas text-5xl tracking-wider text-white">Our company milestone</p>
                </div>
                <div class="h-[40%] flex items-start">
                    <p class="text-center font-montserrat text-lg text-white">Nullam leo sem, volutpat vel nibh ac, pretium fringilla odio. Etiam rhoncus ligula at quam accumsan aliquam. Nunc posuere ex vitae lectus ornare consequat. </p>
                </div>
            </div>
            <div class=" h-[80%] w-full flex justify-center">
                <div class="h-full w-[83%] relative flex flex-col items-center">
                    <!-- VERTICAL LINE -->
                    <div class="vertical_line absolute h-[74.5%] w-1 rounded-full bg-white top-[8%] z-20">
                        <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white"></div>
                        <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[19.5%]"></div>
                        <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[40%]"></div>
                        <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[60%]"></div>
                        <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[80%]"></div>
                        <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[100%]"></div>
                    </div>
    
                    <div class="relative h-full w-full">
                        <div class="absolute h-[134px] w-full flex justify-start">
                            <div class="relative h-full w-[45%] flex z-10 ">
                                <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                                </div>
                                <div class="h-[120px] w-[300px] bg-white ml-[10px] mt-[6px] z-10">
                                        <!--insert image here -->
                                </div>
                                <div class="flex flex-col z-10">
                                    <p class="font-bebas text-[24px] ml-[20px] mt-[6px]">caption here</p>
                                    <p class="font-montserrat text-[14px] ml-[20px]">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                                </div>
                                {{-- date --}}
                                <div class="font-montserrat font-bold ml[10px] z-10 h-full flex items-center text-center">
                                    <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                    </div>
                                </div>
                                <!-- ARROW -->
                                <div class="absolute -right-6 top-1" style=" width: 0; height: 0; border-top: 62px solid transparent; border-bottom: 64px solid transparent; border-left: 24px solid rgb(255, 255, 255, .6);"></div>
                            </div>
                        </div>
                        <div class="absolute h-[134px] top-[15%] w-full justify-end">
                            <div class="relative h-full w-[45%] flex z-10 float-right">
                                <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                                </div>
                                <!-- ARROW -->
                                <div class="absolute -left-6 bottom-[.35rem]" style=" width: 0; height: 0; border-top: 61px solid transparent; border-bottom: 63px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                                {{-- date --}}
                                <div class="font-montserrat font-bold ml[10px] z-10 h-full flex items-center text-center">
                                    <div>
                                        <p>DATE</p>
                                        <p>HERE</p>
                                    </div>
                                    </div>
                                <div class="h-[120px] w-[300px] bg-white ml-[20px] mt-[6px] z-10">
                                        <!-- image here -->
                                </div>
                                <div class="flex flex-col z-10">
                                    <p class="font-bebas text-[24px] ml-[20px] mt-[6px]">caption here</p>
                                    <p class="font-montserrat text-[14px] ml-[20px]">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute h-[134px] w-full flex justify-start top-[30%]">
                            <div class="relative h-full w-[45%] flex z-10 ">
                                <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                                </div>
                                <div class="h-[120px] w-[300px] bg-white ml-[10px] mt-[6px] z-10">
                                        <!--insert image here -->
                                </div>
                                <div class="flex flex-col z-10">
                                    <p class="font-bebas text-[24px] ml-[20px] mt-[6px]">caption here</p>
                                    <p class="font-montserrat text-[14px] ml-[20px]">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                                </div>
                                {{-- date --}}
                                <div class="font-montserrat font-bold ml[10px] z-10 h-full flex items-center text-center">
                                    <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                    </div>
                                </div>
                                <!-- ARROW -->
                                <div class="absolute -right-6 top-1" style=" width: 0; height: 0; border-top: 62px solid transparent; border-bottom: 64px solid transparent; border-left: 24px solid rgb(255, 255, 255, .6);"></div>
                            </div>
                        </div>
                        <div class="absolute h-[134px] top-[15%] w-full justify-end top-[45%]">
                            <div class="relative h-full w-[45%] flex z-10 float-right">
                                <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                                </div>
                                <!-- ARROW -->
                                <div class="absolute -left-6 bottom-[.35rem]" style=" width: 0; height: 0; border-top: 61px solid transparent; border-bottom: 63px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                                {{-- date --}}
                                <div class="font-montserrat font-bold ml[10px] z-10 h-full flex items-center text-center">
                                    <div>
                                        <p>DATE</p>
                                        <p>HERE</p>
                                    </div>
                                    </div>
                                <div class="h-[120px] w-[300px] bg-white ml-[20px] mt-[6px] z-10">
                                        <!-- image here -->
                                </div>
                                <div class="flex flex-col z-10">
                                    <p class="font-bebas text-[24px] ml-[20px] mt-[6px]">caption here</p>
                                    <p class="font-montserrat text-[14px] ml-[20px]">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute h-[134px] w-full flex justify-start top-[60%]">
                            <div class="relative h-full w-[45%] flex z-10 ">
                                <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                                </div>
                                <div class="h-[120px] w-[300px] bg-white ml-[10px] mt-[6px] z-10">
                                        <!--insert image here -->
                                </div>
                                <div class="flex flex-col z-10">
                                    <p class="font-bebas text-[24px] ml-[20px] mt-[6px]">caption here</p>
                                    <p class="font-montserrat text-[14px] ml-[20px]">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                                </div>
                                {{-- date --}}
                                <div class="font-montserrat font-bold ml[10px] z-10 h-full flex items-center text-center">
                                    <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                    </div>
                                </div>
                                <!-- ARROW -->
                                <div class="absolute -right-6 top-1" style=" width: 0; height: 0; border-top: 62px solid transparent; border-bottom: 64px solid transparent; border-left: 24px solid rgb(255, 255, 255, .6);"></div>
                            </div>
                        </div>
                        <div class="absolute h-[134px] top-[15%] w-full justify-end top-[75%]">
                            <div class="relative h-full w-[45%] flex z-10 float-right">
                                <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                                </div>
                                <!-- ARROW -->
                                <div class="absolute -left-6 bottom-[.35rem]" style=" width: 0; height: 0; border-top: 61px solid transparent; border-bottom: 63px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                                {{-- date --}}
                                <div class="font-montserrat font-bold ml[10px] z-10 h-full flex items-center text-center">
                                    <div>
                                        <p>DATE</p>
                                        <p>HERE</p>
                                    </div>
                                    </div>
                                <div class="h-[120px] w-[300px] bg-white ml-[20px] mt-[6px] z-10">
                                        <!-- image here -->
                                </div>
                                <div class="flex flex-col z-10">
                                    <p class="font-bebas text-[24px] ml-[20px] mt-[6px]">caption here</p>
                                    <p class="font-montserrat text-[14px] ml-[20px]">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="relative md:hidden h-[auto] w-full mt-[50px] flex flex-col bg-[#302121] items-center bg-cover  bg-repeat-norepeat" style="">
            {{-- coverphoto --}}
            <div class="absolute top-0 h-full w-full">
                <img src="img/about/milestone.png" class="h-full w-full opacity-[25%]"  alt="">
            </div>  
            <div class="abolute z-10 h-[20%] flex flex-col items-center w-[90%] mt-4">
                <div class="h-[60%] flex justify-center items-center">
                    <p class="font-bebas text-2xl md:text-5xl tracking-wider text-white">Our company milestone</p>
                </div>
                <div class="h-[40%] flex items-start">
                    <p class="text-center font-montserrat text-sm text-white leading-tight">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                </div>
            </div>
            <div class="relative flex w-[90%] items-center justify-start h-[600px]">
                <div class="absolute h-[80%] w-1 rounded-full bg-white top-[9%] z-20">
                    <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white"></div>
                    <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[20%]"></div>
                    <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[40%]"></div>
                    <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[60%]"></div>
                    <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[80%]"></div>
                    <div class="absolute ml-[-6px] h-4 w-4 rounded-full bg-white top-[100%]"></div>
                </div>
                <div class="w-full h-full ">
                    <div class="absolute h-[85px]  w-full justify-end">
                        <div class="relative h-full w-[90%] flex z-10 float-right top-4">
                            <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                            </div>
                            <!-- ARROW -->
                            <div class="absolute -left-[24px] bottom-[.30rem]" style=" width: 0; height: 0; border-top: 40px solid transparent; border-bottom: 35px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                            {{-- date --}}
                            <div class="font-montserrat text-xs font-bold ml[10px] z-10 h-full flex items-center text-center">
                                <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                </div>
                                </div>
                            
                            <div class="flex flex-col  z-10">
                                <p class="font-bebas text-[20px] ml-[5px] mt-[0px]">caption here</p>
                                <p class="font-montserrat font-medium text-[9px] text-[14px] ml-[5px] text-justify">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                            </div>
                            <div class="h-[75px] w-[280px] bg-white ml-1 mr-1 mt-[6px] z-10">
                                <!-- image here -->
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[85px] top-[16%] w-full justify-end">
                        <div class="relative h-full w-[90%] flex z-10 float-right top-4">
                            <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                            </div>
                            <!-- ARROW -->
                            <div class="absolute -left-[24px] bottom-[.30rem]" style=" width: 0; height: 0; border-top: 40px solid transparent; border-bottom: 35px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                            {{-- date --}}
                            <div class="font-montserrat text-xs font-bold ml[10px] z-10 h-full flex items-center text-center">
                                <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                </div>
                                </div>
                            
                            <div class="flex flex-col  z-10">
                                <p class="font-bebas text-[20px] ml-[5px] mt-[0px]">caption here</p>
                                <p class="font-montserrat font-medium text-[9px] text-[14px] ml-[5px] text-justify">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                            </div>
                            <div class="h-[75px] w-[280px] bg-white ml-1 mr-1 mt-[6px] z-10">
                                <!-- image here -->
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[85px] top-[32%] w-full justify-end">
                        <div class="relative h-full w-[90%] flex z-10 float-right top-4">
                            <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                            </div>
                            <!-- ARROW -->
                            <div class="absolute -left-[24px] bottom-[.30rem]" style=" width: 0; height: 0; border-top: 40px solid transparent; border-bottom: 35px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                            {{-- date --}}
                            <div class="font-montserrat text-xs font-bold ml[10px] z-10 h-full flex items-center text-center">
                                <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                </div>
                                </div>
                            
                            <div class="flex flex-col  z-10">
                                <p class="font-bebas text-[20px] ml-[5px] mt-[0px]">caption here</p>
                                <p class="font-montserrat font-medium text-[9px] text-[14px] ml-[5px] text-justify">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                            </div>
                            <div class="h-[75px] w-[280px] bg-white ml-1 mr-1 mt-[6px] z-10">
                                <!-- image here -->
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[85px] top-[48%] w-full justify-end">
                        <div class="relative h-full w-[90%] flex z-10 float-right top-4">
                            <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                            </div>
                            <!-- ARROW -->
                            <div class="absolute -left-[24px] bottom-[.30rem]" style=" width: 0; height: 0; border-top: 40px solid transparent; border-bottom: 35px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                            {{-- date --}}
                            <div class="font-montserrat text-xs font-bold ml[10px] z-10 h-full flex items-center text-center">
                                <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                </div>
                                </div>
                            
                            <div class="flex flex-col  z-10">
                                <p class="font-bebas text-[20px] ml-[5px] mt-[0px]">caption here</p>
                                <p class="font-montserrat font-medium text-[9px] text-[14px] ml-[5px] text-justify">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                            </div>
                            <div class="h-[75px] w-[280px] bg-white ml-1 mr-1 mt-[6px] z-10">
                                <!-- image here -->
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[85px] top-[64%] w-full justify-end">
                        <div class="relative h-full w-[90%] flex z-10 float-right top-4">
                            <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                            </div>
                            <!-- ARROW -->
                            <div class="absolute -left-[24px] bottom-[.30rem]" style=" width: 0; height: 0; border-top: 40px solid transparent; border-bottom: 35px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                            {{-- date --}}
                            <div class="font-montserrat text-xs font-bold ml[10px] z-10 h-full flex items-center text-center">
                                <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                </div>
                                </div>
                            
                            <div class="flex flex-col  z-10">
                                <p class="font-bebas text-[20px] ml-[5px] mt-[0px]">caption here</p>
                                <p class="font-montserrat font-medium text-[9px] text-[14px] ml-[5px] text-justify">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                            </div>
                            <div class="h-[75px] w-[280px] bg-white ml-1 mr-1 mt-[6px] z-10">
                                <!-- image here -->
                            </div>
                        </div>
                    </div>
                    <div class="absolute h-[85px] top-[80%] w-full justify-end">
                        <div class="relative h-full w-[90%] flex z-10 float-right top-4">
                            <div class="absolute h-full w-full bg-[#FFFFFF] opacity-[60%] z-0 rounded-l-lg rounded-r-md">
                            </div>
                            <!-- ARROW -->
                            <div class="absolute -left-[24px] bottom-[.30rem]" style=" width: 0; height: 0; border-top: 40px solid transparent; border-bottom: 35px solid transparent; border-right: 24px solid rgb(255, 255, 255, .6);"></div>
                            {{-- date --}}
                            <div class="font-montserrat text-xs font-bold ml[10px] z-10 h-full flex items-center text-center">
                                <div>
                                    <p>DATE</p>
                                    <p>HERE</p>
                                </div>
                                </div>
                            
                            <div class="flex flex-col  z-10">
                                <p class="font-bebas text-[20px] ml-[5px] mt-[0px]">caption here</p>
                                <p class="font-montserrat font-medium text-[9px] text-[14px] ml-[5px] text-justify">Donec et tincidunt justo. Curabitur at ullamcorper leo. Vivamus vitae turpis ex. Vestibulum hendrerit .</p>
                            </div>
                            <div class="h-[75px] w-[280px] bg-white ml-1 mr-1 mt-[6px] z-10">
                                <!-- image here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div>

@endsection('main')
