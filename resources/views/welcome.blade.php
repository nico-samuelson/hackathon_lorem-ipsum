@extends('layouts.main')

@section('style')
    <style>
        html, body {
            margin: 0 !important;
            padding: 0 !important;
        }
        .custom-shape-divider-top-1695393611 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .gradient-bg {
            background: linear-gradient(to bottom, #F39A25, #F4C21E);
            border-radius: 30pt 30pt 0 0;
        }
        #speedo{
            transform-origin: bottom center;
            transition: all 10ms ease-in-out;
        }
        .button {
            display: flex;
        }

        .box {
            width: 35px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            transition: all .8s;
            cursor: pointer;
            position: relative;
            background: #EB8600;
            overflow: hidden;
        }

        .box:before {
            content: "N";
            position: absolute;
            top: 0;
            background: #4f3411;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: translateY(100%);
            transition: transform .4s;
        }

        .box:nth-child(2)::before {
            transform: translateY(-100%);
            content: 'O';
        }

        .box:nth-child(3)::before {
            content: 'W';
        }

        .button:hover .box:before {
            transform: translateY(0);
        }
    </style>
@endsection

@section('content')
    {{-- Timeline --}}
    <section class="w-full py-10 timeline">
        <h1 class="ml-5 md:mb-12 mb-5 text-xl md:text-5xl font-bold text-neutral-700 dark:text-neutral-300 justify-start text-left md:text-center">
            ALUR <span style="color:#F4C21E">PENGOLAHAN</span><br> PRODUK SUSU ETAWA
        </h1>

        <div class="flex justify-center items-center">
            <ol class="border-l border-neutral-300 dark:border-neutral-500 md:flex md:justify-center md:gap-6 md:border-l-0 md:border-t">
                <!--First item-->
                <li class="me-10" data-aos="fade-right" data-aos-duration="750" >
                    <div class="flex-start flex items-center md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0">
                    </div>
                        <p class="md:mt-2 text-sm text-amber-950 dark:text-neutral-300">
                            START
                        </p>
                    </div>
                </li>
    
                <!--Second item-->
                <li class="me-10" data-aos="fade-up" data-aos-duration="750" >
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0"></div>
                    <p class="mt-2 text-sm text-amber-950 dark:text-neutral-300">
                        Pemeliharaan Kambing
                    </p>
                    </div>
                    <div class="ml-4 mt-2 pb-5 md:ml-0">
                    <!-- .cta trigger modal -->
                    <button
                    type="button"
                    class="trigger-modal inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#F4C21E] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.3),0_4px_18px_0_rgba(244,194,30,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.3),0_4px_18px_0_rgba(244,194,30,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.3),0_4px_18px_0_rgba(244,194,30,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(244,194,30,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.2),0_4px_18px_0_rgba(244,194,30,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.2),0_4px_18px_0_rgba(244,194,30,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.2),0_4px_18px_0_rgba(59,194,30,0.1)]"
                    style="background-color: #F4C21E"
                    data-te-toggle="modal"
                    data-te-ripple-init
                    data-te-ripple-color="light"
                    data-video="/videos/pemelihara.mp4">
                    Pelajari
                    </button>
    
                    </div>
                </li>
    
                <!--Third item-->
                <li class="me-10" data-aos="fade-up" data-aos-duration="750" >
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0"></div>
                        <p class="mt-2 text-sm text-amber-950 dark:text-neutral-300">
                            Pemerahan Susu Kambing
                        </p>
                    </div>
                    <div class="ml-4 mt-2 pb-5 md:ml-0">
                    <!-- Button trigger modal -->
                    <button
                    type="button"
                    class="trigger-modal inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#FCD75F] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.3),0_4px_18px_0_rgba(252,215,95,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.3),0_4px_18px_0_rgba(252,215,95,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.3),0_4px_18px_0_rgba(252,215,95,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(252,215,95,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.2),0_4px_18px_0_rgba(252,215,95,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.2),0_4px_18px_0_rgba(252,215,95,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.2),0_4px_18px_0_rgba(252,215,95,0.1)]"
                    style="background-color: #FCD75F; color: #4f3411"
                    data-te-toggle="modal"
                    data-te-ripple-init
                    data-te-ripple-color="light"
                    data-video="/videos/pemerahan.mp4">
                    Pelajari
                    </button>
    
                    </div>
                </li>
    
                <!--Fourth item-->
                <li data-aos="fade-left" data-aos-duration="750" >
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0"></div>
                    <p class="mt-2 text-sm text-amber-950 dark:text-neutral-300">
                        Pengolahan Susu Kambing
                    </p>
                    </div>
                    <div class="ml-4 mt-2 pb-5 md:ml-0">
                    <!-- Button trigger modal -->
                    <button
                    type="button"
                    class="trigger-modal inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#E3EEB1 ] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.3),0_4px_18px_0_rgba(227,238,177,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.3),0_4px_18px_0_rgba(227,238,177,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.3),0_4px_18px_0_rgba(227,238,177,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(227,238,177,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.2),0_4px_18px_0_rgba(227,238,177,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.2),0_4px_18px_0_rgba(227,238,177,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.2),0_4px_18px_0_rgba(227,238,177,0.1)]"
                    style="background-color: #E3EEB1; color: #4f3411"
                    data-te-toggle="modal"
                    data-te-ripple-init
                    data-te-ripple-color="light"
                    data-video="/videos/pengolahan.mp4">
                    Pelajari
                    </button>
    
                    </div>
                </li>
            </ol>
        </div>
        <div class="justify-center mt-40 lg:flex hidden">
            <div class="mx-auto">
                <svg width="38" height="200" viewBox="0 0 78 549" fill="none" xmlns="http://www.w3.org/2000/svg" id="speedo">
                    <path d="M39.2959 0L60 478H16.5L39.2959 0Z" fill="#4F3411"/>
                    <circle cx="39" cy="510" r="39" fill="#4F3411"/>
                    <path d="M63.5 509.5C63.5 522.147 52.812 532.5 39.5 532.5C26.188 532.5 15.5 522.147 15.5 509.5C15.5 496.853 26.188 486.5 39.5 486.5C52.812 486.5 63.5 496.853 63.5 509.5Z" stroke="#F4C21E" stroke-width="3"/>
                </svg>
            </div>
        </div>
    </section>

    {{-- Carousel --}}
    <section class="relative gradient-bg py-10 mb-10">
        <p class="font-bold text-xl md:text-2xl text-center">HASIL PENGOLAHAN SUSU ETAWA</p>
        <div class="grid grid-cols-1 md:grid-cols-3 products p-8 md:px-32 gap-6">
            @foreach($products as $p)
                <div
                class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] w-full p-4 overflow-x-auto">
                    <img
                    class="aspect-[5/3] w-full rounded-t-lg"
                    src="{{ route('assets.foto_produk', ['path' => $p['foto']]) }}"
                    alt="{{ $p['nama'] }}" />
                    <div class="flex flex-col w-full h-full justify-start rounded-b-lg md:rounded-none p-4 md:p-8 z-0 gap-6" style="background-color: #FCD75F">
                        <p
                            class="text-xl md:text-3xl font-medium text-neutral-800 dark:text-neutral-50">
                            {{ $p['nama'] . ' - ' . $p['harga'] }}
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-block whitespace-nowrap rounded-full px-3 py-2 text-center align-baseline text-[0.75em] font-bold leading-none"
                                style="background-color:#EB8600">
                                    Kategori
                            </span>
                            <span
                                class="inline-block whitespace-nowrap rounded-full px-3 py-2 text-center align-baseline text-[0.75em] font-bold leading-none"
                                style="background-color:#EB8600">
                                    Kategori
                            </span>
                            <span
                                class="inline-block whitespace-nowrap rounded-full px-3 py-2 text-center align-baseline text-[0.75em] font-bold leading-none"
                                style="background-color:#EB8600">
                                    Kategori
                            </span>
                        </div>
                        <div class="flex">
                            <p>{{ $p['deskripsi'] }}</p>
                        </div>
                        <div class="flex h-full items-end">
                            <a href="{{ route('pesan') }}">
                                <div class="button">
                                    <div class="box">B</div>
                                    <div class="box">U</div>
                                    <div class="box">Y</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="offers mt-10 md:px-24">
            <div class="flex mb-10">
                <div class="py-5 w-full flex flex-col items-center justify-center">
                    <p class="text-xl md:text-3xl font-bold text-center inline-block align-middle mb-5" data-aos="zoom-in-down" data-aos-duration="750" data-aos-once="true">Gabung Sekarang dan Nantikan Keuntungannya</p>
                    <div class="bottom-5">
                        <a href="{{ route('daftar-member-view') }}">
                            <button class="inline-block justify-center rounded px-5 md:px-10 pb-2 pt-2.5 text-md md:text-lg font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#f39a25] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.3),0_4px_18px_0_rgba(243,154,37,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.3),0_4px_18px_0_rgba(243,154,37,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.3),0_4px_18px_0_rgba(243,154,37,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(243,154,37,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.2),0_4px_18px_0_rgba(243,154,37,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.2),0_4px_18px_0_rgba(243,154,37,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.2),0_4px_18px_0_rgba(243,154,37,0.1)]" style="background-color: #f39a25">
                                Gabung Sekarang
                            </button>
                        </a>
                    </div>
                </div>     
            </div>
        </div>
    </section>


    <!--Verically centered modal-->
    <div
    data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalCenterTitle"
    aria-modal="true"
    role="dialog">
    <div
    data-te-modal-dialog-ref
    class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
    <div
        class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-clip-padding text-current bg-[rgba(255,255,255,.8)] outline-none">
        <!--Modal body-->
        <div class="relative py-4 pl-3 pr-4 mx-auto">
            <video controls style="width: 97%" class="mx-auto">
                <source src='/videos/pemelihara.mp4' type="video/mp4">
            </video>
        </div>

        <!--Modal footer-->
    </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        var cursor = document.getElementById("speedo");
        document.body.addEventListener("mousemove", function(e) {
            var y_now = e.clientY;
            var x_now = e.clientX;
            var y_max = window.innerHeight;
            var x_max = window.innerWidth;
            var degree_min = -55;
            var degree_max = 55;
            if(y_now < 0) y_now = 0;
            if(y_now > y_max ) y_now = y_max;
            if(x_now < 0) x_now = 0;
            if(x_now > x_max ) x_now = x_max;
            var part1 = Math.sqrt(Math.pow(x_now, 2) + Math.pow(y_now, 2));
            var part2 = Math.sqrt(Math.pow(x_max, 2) + Math.pow(y_max, 2));
            var degree = (part1/part2 * 110) - 55;
            cursor.style.transform = "rotate("+degree+"deg)";
        });

        $(document).ready(() => {
            $('.trigger-modal').click(function () {
                const videoSource = $(this).data('video');
                $('#exampleModal video source').attr('src', videoSource);
                $('#exampleModal video')[0].load();
                $('#exampleModal').modal('show');
            });
        });
    </script>
@endsection()