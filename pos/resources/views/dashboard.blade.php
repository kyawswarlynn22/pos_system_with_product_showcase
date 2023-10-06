@extends('layout.sidebarandnav')

@section('title', 'Dashboard');
@section('body')
    <div class="flex justify-evenly flex-wrap">
        <div class=" relative pl-0  border w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-blue-600"></div>
            <p class="mt-2 p-2 text-2xl pl-5">Room</p>
            <div class="flex  p-2 pl-5 items-center  justify-between">
                <p class="text-[#3786FB] font-bold text-2xl">00
                    {{-- //     $pag = $roomData; --}}
                    {{-- // @endphp --}}
                    {{-- //     {{ $total = $pag->total() }} </p> --}}
                <div class="h-12 bg-blue-600 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff"
                            d="M7 14c1.66 0 3-1.34 3-3S8.66 8 7 8s-3 1.34-3 3s1.34 3 3 3m0-4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m12-3h-8v8H3V5H1v15h2v-3h18v3h2v-9c0-2.21-1.79-4-4-4m2 8h-8V9h6c1.1 0 2 .9 2 2Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class=" relative  border  w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-pink-600"></div>
            <p class="mt-2 p-2 text-2xl pl-5">UnreadMessage</p>
            <div class="flex  p-2 pl-5 items-center  justify-between">
                <p class=" text-pink-600 font-bold text-2xl">
                    23</p>
                <div class="h-12 bg-pink-600 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"
                            d="M320 96H88a40 40 0 0 0-40 40v240a40 40 0 0 0 40 40h334.73a40 40 0 0 0 40-40V239" />
                        <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="m112 160l144 112l87-65.67" />
                        <circle cx="431.95" cy="128.05" r="47.95" fill="#ffffff" />
                        <path fill="#ffffff"
                            d="M432 192a63.95 63.95 0 1 1 63.95-63.95A64 64 0 0 1 432 192Zm0-95.9a32 32 0 1 0 31.95 32a32 32 0 0 0-31.95-32Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class=" relative  border  w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-green-600"></div>
            <p class="mt-2 p-2 text-2xl pl-5">Drug</p>
            <div class="flex  p-2 pl-5 items-center  justify-between">
                <p class=" text-green-600 font-bold text-2xl">
                    666</p>
                <div class="h-12 bg-green-600 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff"
                            d="M16.2 3.5c-1-1-2.3-1.5-3.5-1.5s-2.6.5-3.5 1.5L3.4 9.1c-2 2-2 5.1 0 7.1s5.1 2 7.1 0l5.7-5.7c1.9-1.9 1.9-5.1 0-7m-1.4 5.6L12 11.9L8.4 8.4L4 12.8c0-.8.2-1.7.9-2.3l5.7-5.7c.5-.5 1.3-.8 2-.8s1.5.3 2.1.8c1.2 1.3 1.2 3.1.1 4.3m4.8-2c0 .8-.2 1.5-.4 2.3c1 1.2 1 3-.1 4.1l-2.8 2.8l-1.5-1.5l-2.8 2.8c-1.3 1.3-3.1 2-4.8 2c.2.3.4.6.7.9c2 2 5.1 2 7.1 0l5.7-5.7c2-2 2-5.1 0-7.1c-.5-.2-.8-.4-1.1-.6Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class=" relative  border  w-56 rounded-lg shadow-xl">
            <div class="h-full  absolute rounded-tl-lg rounded-bl-lg left-0 w-2 bg-yellow-400"></div>
            <p class="mt-2 p-2 text-2xl pl-5"> Appointment</p>
            <div class="flex  p-2 pl-5  items-center  justify-between">
                <p class="text-yellow-400 font-bold text-2xl ">
                    22
                </p>
                <div class="h-12 bg-yellow-400 w-12 rounded-full flex justify-center items-center ">
                    <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <g fill="none" stroke="#ffffff" stroke-width="4">
                            <circle cx="24" cy="11" r="7" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 41c0-8.837 8.059-16 18-16" />
                            <circle cx="34" cy="34" r="9" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M33 31v4h4" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between">
        <div class=" w-3/4 h-96 mt-6 bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
            <div class="flex justify-start mb-5">
                <div>
                    <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">$12,423</h5>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Sales this week</p>
                </div>
                <div
                    class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                    23%
                    <svg class="w-3 h-3 ml-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13V1m0 0L1 5m4-4 4 4" />
                    </svg>
                </div>
            </div>
            <div id="tooltip-chart"></div>
        </div>

        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">

            <div class="flex justify-between items-start w-full">
            </div>
            <!-- Line Chart -->
            <div class="py-6" id="pie-chart"></div>

            <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            </div>
        </div>
    </div>

    <div class="mt-10">
        <p class=" font-semibold text-lg">Activital Log</p>
        <div class="p-5">
            <ul>
                @forelse ($audits as $audit)
                    <li>
                        @lang('article.updated.metadata', $audit->getMetadata())

                        @foreach ($audit->getModified() as $attribute => $modified)
                            <ul>
                                <li>@lang('article.' . $audit->event . '.modified.' . $attribute, $modified)</li>
                            </ul>
                        @endforeach
                    </li>
                @empty
                    <p>@lang('article.unavailable_audits')</p>
                @endforelse
            </ul>

        </div>
    </div>

    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
            const getChartOptions = () => {
                return {
                    series: [52.8, 26.8, 20.4],
                    colors: ["#1C64F2", "#16BDCA", "#9061F9"],
                    chart: {
                        height: 420,
                        width: "100%",
                        type: "pie",
                    },
                    stroke: {
                        colors: ["white"],
                        lineCap: "",
                    },
                    plotOptions: {
                        pie: {
                            labels: {
                                show: true,
                            },
                            size: "100%",
                            dataLabels: {
                                offset: -25
                            }
                        },
                    },
                    labels: ["Direct", "Organic search", "Referrals"],
                    dataLabels: {
                        enabled: true,
                        style: {
                            fontFamily: "Inter, sans-serif",
                        },
                    },
                    legend: {
                        position: "bottom",
                        fontFamily: "Inter, sans-serif",
                    },
                    yaxis: {
                        labels: {
                            formatter: function(value) {
                                return value + "%"
                            },
                        },
                    },
                    xaxis: {
                        labels: {
                            formatter: function(value) {
                                return value + "%"
                            },
                        },
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: false,
                        },
                    },
                }
            }

            if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
                chart.render();
            }
        });
    </script>


    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
            let options = {
                // set this option to enable the tooltip for the chart, learn more here: https://apexcharts.com/docs/tooltip/
                tooltip: {
                    enabled: true,
                    x: {
                        show: true,
                    },
                    y: {
                        show: true,
                    },
                },
                grid: {
                    show: false,
                    strokeDashArray: 4,
                    padding: {
                        left: 2,
                        right: 2,
                        top: -26
                    },
                },
                series: [{
                        name: "Developer Edition",
                        data: [1500, 1418, 1456, 1526, 1356, 1256],
                        color: "#1A56DB",
                    },
                    {
                        name: "Designer Edition",
                        data: [643, 413, 765, 412, 1423, 1731],
                        color: "#7E3BF2",
                    },
                ],
                chart: {
                    height: "100%",
                    maxWidth: "100%",
                    type: "area",
                    fontFamily: "Inter, sans-serif",
                    dropShadow: {
                        enabled: false,
                    },
                    toolbar: {
                        show: false,
                    },
                },
                legend: {
                    show: true
                },
                fill: {
                    type: "gradient",
                    gradient: {
                        opacityFrom: 0.55,
                        opacityTo: 0,
                        shade: "#1C64F2",
                        gradientToColors: ["#1C64F2"],
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 6,
                },
                xaxis: {
                    categories: ['01 February', '02 February', '03 February', '04 February', '05 February',
                        '06 February', '07 February'
                    ],
                    labels: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false,
                    },
                },
                yaxis: {
                    show: false,
                    labels: {
                        formatter: function(value) {
                            return '$' + value;
                        }
                    }
                },
            }

            if (document.getElementById("tooltip-chart") && typeof ApexCharts !== 'undefined') {
                const chart = new ApexCharts(document.getElementById("tooltip-chart"), options);
                chart.render();
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endsection
