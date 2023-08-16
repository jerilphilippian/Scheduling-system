<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Philippian Marketing Management</title>
    {{--
    <link href="/dist/output.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <wireui:scripts />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="../path/to/flowbite/dist/datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/datepicker.min.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Asap&display=swap");

        * {
            scroll-behavior: smooth;
        }

        @media (max-width: 900px) {
            section h1 {
                font-size: 2rem;
                text-align: center;
            }

            section .text-container {
                flex-direction: column;
            }
        }

        .reveal {
            position: relative;
            transform: translateY(150px);
            opacity: 0;
            transition: 2s all ease;
        }

        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }
    </style>

    <script>
        let section = document.querySelectorAll("section");
        let menu = document.querySelectorAll("header nav a");

        window.onscroll = () => {
        section.forEach((i) => {
            let top = window.scrollY;
            let offset = i.offsetTop - 150;
            let height = i.offsetHeight;
            let id = i.getAttribute("id");

            if (top >= offset && top < offset + height) {
            menu.forEach((link) => {
                link.classList.remove("active");
                document
                .querySelector("header nav a[href*=" + id + "]")
                .classList.add("active");
            });
            }
        });
        };

            function reveal() {
                var reveals = document.querySelectorAll(".reveal");

                for (var i = 0; i < reveals.length; i++) {
                    var windowHeight = window.innerHeight;
                    var elementTop = reveals[i].getBoundingClientRect().top;
                    var elementVisible = 150;

                    if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                    } else {
                    reveals[i].classList.remove("active");
                    }
                }
            }

        window.addEventListener("scroll", reveal);
        reveal();
    </script>
    @livewireStyles
</head>
{{-- bg-[url('/img/coverphoto.jpg')] --}}

<body class="py-24 bg[#EEEDED]"

    x-data="{isSettingsPanelOpen:false}">
    {{--

    <body class="py-24 bg-[#EEEDED]" x-data="{isSettingsPanelOpen:false}"> --}}
        <x-dialog z-index="z-50" blur="md" align="center" />
        {{ $slot }}

        <!-- component -->
        <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
            <div class="flex antialiased text-gray-900 dark:bg-dark dark:text-light">
                <!-- Loading screen -->
                <div x-ref="loading">

                </div>
                <!-- Sidebar-->
                @include('livewire.sidebar.dashboard')
                <!-- Sidebar end-->

                    <!--header-->
                    @include('layouts.nav')
                    <!--header end-->

            </div>

            <!-- Panels -->

            <!-- Settings Panel -->
            <!-- Backdrop -->
            <div x-show="isSettingsPanelOpen" class="fixed inset-0 bg-black bg-opacity-50"
                @click="isSettingsPanelOpen = false" aria-hidden="true"></div>
            <!-- Panel -->




            <!-- Author links -->

        </div>

        <!-- Panels -->

        <!-- Settings Panel -->
        <!-- Backdrop -->
        {{-- <div x-show="isSettingsPanelOpen" class="fixed inset-0 bg-black bg-opacity-50"
            @click="isSettingsPanelOpen = false" aria-hidden="true"></div> --}}
        <!-- Panel -->




        <!-- Author links -->

        @vite('resources/js/app.js')
        @livewireScripts

        <script>
            const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

        new Chart("myChart1", {
            type: "line",
            data: {
                labels: xValues,

                datasets: [{
                    label: 'I.T',
                    data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                    borderColor: "#C70039",
                    fill: false
                }, {
                    label: 'HR',
                    data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                    borderColor: "#557A46",
                    fill: false
                }, {
                    label: 'SALES',
                    data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                    borderColor: "#4477CE",
                    fill: false
                },{
                    label: 'MARKETING',
                    data: [300, 800, 2500, 5400, 6400, 4400, 2400, 1400, 400, 400],
                    borderColor: "#EBE76C",
                    fill: false
                }]
            },
            options: {
                legend: {
                    display: false
                }
            }
        });
        </script>

        <script>
            // const ctx = document.getElementById('myChart');

        // new Chart(ctx, {
        //     type: 'bar',
        //     data: {
        //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
        //             'October', 'November', 'December'
        //         ],
        //         datasets: [{
        //             label: '# of Events',
        //             data: [18, 24, 22, 20, 12, 19, 13, 15, 25, 30, 20, 18],
        //             borderWidth: 1
        //         }]
        //     },
        //     options: {
        //         scales: {
        //             y: {
        //                 beginAtZero: true
        //             }
        //         }
        //     }
        // });
        </script>

        <script>
            const ctxx = document.getElementById('myChart-room');

    new Chart(ctxx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ],
            datasets: [{
                label: '# of Rooms',
                data: [18, 24, 22, 20, 12, 19, 13, 15, 25, 30, 20, 18],
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
        </script>

        <script>
            const setup = () => {
        return {
            isSidebarOpen: false,
            currentSidebarTab: null,
            isSettingsPanelOpen: false,
            isSubHeaderOpen: false,
            watchScreen() {
                if (window.innerWidth <= 1024) {
                    this.isSidebarOpen = false
                }
            },
        }
    }
        </script>

        <script>
            // ApexCharts options and config
    window.addEventListener("load", function() {
      var options = {
        series: [
          {
            name: "Preset",
            color: "#FF9B9B",
            data: [ "1490", "1480", "1470", "1460", "1450", "1440","1420", "1420", "1620", "1820", "1420", "1650", "2120"],
          },
          {
            name: "Previous",
            data: [ "870", "860", "850", "840", "830", "820","788", "810", "866", "788", "1100", "1200"],
            color: "#303841",
          }
        ],
        chart: {
          sparkline: {
            enabled: false,
          },
          type: "bar",
          width: "100%",
          height: 400,
          toolbar: {
            show: false,
          }
        },
        fill: {
          opacity: 1,
        },
        plotOptions: {
          bar: {
            horizontal: true,
            columnWidth: "100%",
            borderRadiusApplication: "end",
            borderRadius: 6,
            dataLabels: {
              position: "top",
            },
          },
        },
        legend: {
          show: true,
          position: "bottom",
        },
        dataLabels: {
          enabled: false,
        },
        tooltip: {
          shared: true,
          intersect: false,
          formatter: function (value) {
            return "$" + value
          }
        },
        xaxis: {
          labels: {
            show: true,
            style: {
              fontFamily: "Inter, sans-serif",
              cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
            },
            formatter: function(value) {
              return "$" + value
            }
          },
          categories: ["January","February","March","April","May","June","July", "Aug", "Sep", "Oct", "Nov", "Dec"],
          axisTicks: {
            show: false,
          },
          axisBorder: {
            show: false,
          },
        },
        yaxis: {
          labels: {
            show: true,
            style: {
              fontFamily: "Inter, sans-serif",
              cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
            }
          }
        },
        grid: {
          show: true,
          strokeDashArray: 4,
          padding: {
            left: 2,
            right: 2,
            top: -20
          },
        },
        fill: {
          opacity: 1,
        }
      }

      if(document.getElementById("bar-chart") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("bar-chart"), options);
        chart.render();
      }
    });
        </script>


        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js"></script> --}}



        {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
        @include('layouts.footer')
    </body>

</html>
