@extends('layouts.admin')

@section('content')
    <header class="sm:py-10 py-5">
        <h1 class="sm:pl-32 pl-8 sm:text-5xl text-2xl font-bold sm:mb-2 text-form">DASHBOARD</h1>
        {{-- <h2 class="sm:pl-32 pl-8 text-lg text-form">Isilah dengan informasi yang benar</h2> --}}
    </header>

    <section class="statistics pb-5">
        <div class="rounded-lg bg-white mx-8 md:ml-28 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 flex items-center mb-6">
            <h1 class="w-screen font-bold text-center text-lg py-6 uppercase">
                Jumlah Kambing: <span class="text-2xl font-weight-bolder">{{ $kambingByJenisKelamin[0]->count + $kambingByJenisKelamin[1]->count }}</span> ekor
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 max-h-min mx-8 md:ml-28 gap-6">
            <div class="rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 flex flex-col items-center p-8">
                <p class="font-bold text-center">Berdasarkan Jenis Kelamin</p>
                <canvas
                data-te-chart="pie"
                data-te-dataset-label="Traffic"
                data-te-labels="['Jantan', 'Betina']"
                data-te-dataset-data="{{ '[' . $kambingByJenisKelamin[0]->count . ", " . $kambingByJenisKelamin[1]->count . ']'}}"
                data-te-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)']">
                </canvas>
                <p class=" mt-3 w-full text-center">
                    <a
                    href="{{ route('riwayat-kambing') }}"
                    class="text-primary text-center w-screen transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                    >
                    Lihat Detail
                    </a>
                </p>
            </div>

            <div class="rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 flex flex-col items-center justify-center p-8">
                <p class="font-bold text-center">Berdasarkan Umur</p>
                
                <canvas
                class=""
                data-te-chart="bar"
                data-te-dataset-label="Kambing"
                data-te-labels="['0 - 3', '3 - 6', '6 - 9', '9 - 12', '>12']"
                data-te-dataset-data="{{ '[' . $kambingUrip[0]->count . ", " . $kambingUrip[1]->count .", " . $kambingUrip[2]->count .", " . $kambingUrip[3]->count .", " . $kambingUrip[4]->count . ']'}}"
                data-te-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)', 'rgba(66, 133, 244, 0.5)', 'rgba(156, 39, 176, 0.5)', 'rgba(233, 30, 99, 0.5)', 'rgba(66, 73, 244, 0.4)', 'rgba(66, 133, 244, 0.2)']">
                </canvas>
                <p class=" mt-3 w-full text-center">
                    <a
                    href="{{ route('riwayat-kambing') }}"
                    class="text-primary text-center w-screen transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                    >
                    Lihat Detail
                    </a>
                </p>
            </div>

            <div class="rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 flex flex-col items-center p-8">
                <p class="font-bold text-center">Berdasarkan Status Kehamilan</p>
                
                <canvas
                data-te-chart="pie"
                data-te-dataset-label="Traffic"
                data-te-labels="['Tidak Hamil', 'Hamil']"
                data-te-dataset-data="{{ '[' . $kambingHamil[0]->count . ", " . $kambingHamil[1]->count . ']'}}"
                data-te-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)', 'rgba(66, 133, 244, 0.5)', 'rgba(156, 39, 176, 0.5)', 'rgba(233, 30, 99, 0.5)', 'rgba(66, 73, 244, 0.4)', 'rgba(66, 133, 244, 0.2)']">
                </canvas>
                <p class=" mt-3 w-full text-center">
                    <a
                    href="{{ route('riwayat-kambing') }}"
                    class="text-primary text-center w-screen transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 active:text-primary-700 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-600"
                    >
                    Lihat Detail
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection