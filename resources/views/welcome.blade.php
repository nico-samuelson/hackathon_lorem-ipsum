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
                <li class="me-10">
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0"></div>
                    <p class="mt-2 text-sm text-neutral-500 dark:text-neutral-300">
                        Pemeliharaan Kambing
                    </p>
                    </div>
                    <div class="ml-4 mt-2 pb-5 md:ml-0">
                    <!-- Button trigger modal -->
                    <button
                    type="button"
                    class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#EB8600] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(235,134,0,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)]"
                    style="background-color: #EB8600"
                    data-te-toggle="modal"
                    data-te-target="#exampleModal"
                    data-te-ripple-init
                    data-te-ripple-color="light"
                    >
                    learn more
                    </button>
    
                    <!-- Modal -->
                    <div
                    data-te-modal-init
                    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                        <div
                            data-te-modal-dialog-ref
                            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                            <div
                            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
    
                                <!--Modal body-->
                                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=2S4cYpgI40dThltS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
    
                <!--Second item-->
                <li class="me-10">
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0"></div>
                    <p class="mt-2 text-sm text-neutral-500 dark:text-neutral-300">
                        Pemeliharaan Kambing
                    </p>
                    </div>
                    <div class="ml-4 mt-2 pb-5 md:ml-0">
                    <!-- Button trigger modal -->
                    <button
                    type="button"
                    class="inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#F4C21E] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.3),0_4px_18px_0_rgba(244,194,30,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.3),0_4px_18px_0_rgba(244,194,30,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.3),0_4px_18px_0_rgba(244,194,30,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(244,194,30,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.2),0_4px_18px_0_rgba(244,194,30,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.2),0_4px_18px_0_rgba(244,194,30,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(244,194,30,0.2),0_4px_18px_0_rgba(59,194,30,0.1)]"
                    style="background-color: #F4C21E"
                    data-te-toggle="modal"
                    data-te-target="#exampleModal"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    learn more
                    </button>
    
                    <!-- Modal -->
                    <div
                    data-te-modal-init
                    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                        <div
                            data-te-modal-dialog-ref
                            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                            <div
                            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
    
                                <!--Modal body-->
                                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=2S4cYpgI40dThltS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
    
                <!--Third item-->
                <li class="me-10">
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0"></div>
                    <p class="mt-2 text-sm text-neutral-500 dark:text-neutral-300">
                        Pemeliharaan Kambing
                    </p>
                    </div>
                    <div class="ml-4 mt-2 pb-5 md:ml-0">
                    <!-- Button trigger modal -->
                    <button
                    type="button"
                    class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#FCD75F] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.3),0_4px_18px_0_rgba(252,215,95,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.3),0_4px_18px_0_rgba(252,215,95,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.3),0_4px_18px_0_rgba(252,215,95,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(252,215,95,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.2),0_4px_18px_0_rgba(252,215,95,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.2),0_4px_18px_0_rgba(252,215,95,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(252,215,95,0.2),0_4px_18px_0_rgba(252,215,95,0.1)]"
                    style="background-color: #FCD75F; color: #4f3411"
                    data-te-toggle="modal"
                    data-te-target="#exampleModal"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    learn more
                    </button>
    
                    <!-- Modal -->
                    <div
                    data-te-modal-init
                    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                        <div
                            data-te-modal-dialog-ref
                            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                            <div
                            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
    
                                <!--Modal body-->
                                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=2S4cYpgI40dThltS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
    
                <!--Fourth item-->
                <li>
                    <div class="flex-start flex items-center pt-2 md:block md:pt-0">
                    <div
                        class="-ml-[5px] mr-3 h-[15px] w-[15px] rounded-full bg-neutral-300 dark:bg-neutral-500 md:-mt-[5px] md:ml-0 md:mr-0"></div>
                    <p class="mt-2 text-sm text-neutral-500 dark:text-neutral-300">
                        Pemeliharaan Kambing
                    </p>
                    </div>
                    <div class="ml-4 mt-2 pb-5 md:ml-0">
                    <!-- Button trigger modal -->
                    <button
                    type="button"
                    class="inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#E3EEB1 ] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.3),0_4px_18px_0_rgba(227,238,177,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.3),0_4px_18px_0_rgba(227,238,177,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.3),0_4px_18px_0_rgba(227,238,177,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(227,238,177,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.2),0_4px_18px_0_rgba(227,238,177,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.2),0_4px_18px_0_rgba(227,238,177,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(227,238,177,0.2),0_4px_18px_0_rgba(227,238,177,0.1)]"
                    style="background-color: #E3EEB1; color: #4f3411"
                    data-te-toggle="modal"
                    data-te-target="#exampleModal"
                    data-te-ripple-init
                    data-te-ripple-color="light">
                    learn more
                    </button>
    
                    <!-- Modal -->
                    <div
                    data-te-modal-init
                    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                        <div
                            data-te-modal-dialog-ref
                            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                            <div
                            class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
    
                                <!--Modal body-->
                                <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?si=2S4cYpgI40dThltS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
            </ol>
        </div>
        <div class="justify-centermt-40 lg:flex hidden">
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
    <div class="relative gradient-bg py-10">
        <section class="products pb-10">
            <p class="mb-5 ml-5 text-xl md:text-2xl font-bold text-left text-neutral-700 dark:text-neutral-300 md:text-center">
                PENGOLAHAN SUSU ETAWA
            </p>
            <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-ride="carousel">
                <!--Carousel indicators-->
                <div
                    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                    data-te-carousel-indicators>
                    <button
                    type="button"
                    data-te-target="#carouselExampleCaptions"
                    data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                    <button
                    type="button"
                    data-te-target="#carouselExampleCaptions"
                    data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                    <button
                    type="button"
                    data-te-target="#carouselExampleCaptions"
                    data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
                </div>
        
                <!--Carousel items-->
                <div
                    class="relative px-5 md:px-24 w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <!--First item-->
                    <div
                    class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-active
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <img
                        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
                        class="block w-full"
                        alt="..." />
                    <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">First slide label</h5>
                        <p>
                        Some representative placeholder content for the first slide.
                        </p>
                    </div>
                    </div>
    
                    <!--Second item-->
                    <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <img
                        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg"
                        class="block w-full"
                        alt="..." />
                    <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Second slide label</h5>
                        <p>
                        Some representative placeholder content for the second slide.
                        </p>
                    </div>
                    </div>
    
                    <!--Third item-->
                    <div
                    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item
                    style="backface-visibility: hidden">
                    <img
                        src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg"
                        class="block w-full"
                        alt="..." />
                    <div
                        class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                        <h5 class="text-xl">Third slide label</h5>
                        <p>
                        Some representative placeholder content for the third slide.
                        </p>
                    </div>
                    </div>
                </div>
        
                <!--Carousel controls - prev item-->
                <button
                    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions"
                    data-te-slide="prev">
                    <span class="inline-block h-8 w-8">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                    </span>
                    <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Previous</span
                    >
                </button>
                <!--Carousel controls - next item-->
                <button
                    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-te-target="#carouselExampleCaptions"
                    data-te-slide="next">
                    <span class="inline-block h-8 w-8">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                    </span>
                    <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Next</span
                    >
                </button>
            </div>
        </section>
    
        <section class="offers px-5 md:px-24">
            <p class="mb-5 text-lg text-left text-neutral-700 dark:text-neutral-300 md:text-center">
                Tertarik mendapat keuntungan 
                hasil produksi susu kambing ?
            </p>

            <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg"
            class="block w-full pb-5"
            alt="..." />

            <p class="text-lg font-bold ">Keuntungan</p>
            <ul class="pb-5">
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>

            <div class="flex justify-center">
                <button class="inline-block justify-center rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#f39a25] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.3),0_4px_18px_0_rgba(243,154,37,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.3),0_4px_18px_0_rgba(243,154,37,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.3),0_4px_18px_0_rgba(243,154,37,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(243,154,37,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.2),0_4px_18px_0_rgba(243,154,37,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.2),0_4px_18px_0_rgba(243,154,37,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(243,154,37,0.2),0_4px_18px_0_rgba(243,154,37,0.1)]" style="background-color: #f39a25">
                    Gabung Sekarang
                </button>
            </div>
        </section>
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
</script>
@endsection()