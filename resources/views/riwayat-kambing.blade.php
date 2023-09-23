@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<style>
    #tabel-riwayat_wrapper {
        width: 100%;
        float: right;
        padding-inline: 30px;
        padding-bottom: 20px;
    }

    #tabel-riwayat_length select {
        width: 50px;
    }

    @media (max-width: 768px) {
        #tabel-riwayat_wrapper {
            width: 100%;
            float: none;
        }
    }
</style>
@endsection

@section('content')
<section class="py-8 border-b-2 border-double pb-3">
    <h1 class="sm:pl-32 pl-8 sm:text-5xl text-2xl font-bold sm:mb-2 text-form">TABEL RIWAYAT KAMBING</h1>
</section>

<section class="py-8">
    <div
    class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:ml-32 mx-8 p-8 overflow-x-auto">
        <table id="tabel-riwayat" class="table-auto overflow-scroll w-full min-w-[800px]">
            <thead>
                <tr>
                    <th>Kambing</th>
                    <th>Inspektur</th>
                    <th>Tanggal</th>
                    <th>Sakit</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kambingHistories as $kambingHistory)
                <tr>
                    <td>{{ $kambingHistory->kambing->no_kambing }}</td>
                    <td>{{ $kambingHistory->inspektur->nama }}</td>
                    <td>{{ $kambingHistory->created_at }}</td>
                    <td>{{ $kambingHistory->status ? 'Ya' : 'Tidak' }}</td>
                    <td><button type="button"
                            class="detail-button inline-block rounded bg-[#EB8600] px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-toggle="modal" data-te-ripple-init data-te-ripple-color="light"
                            data-noKambing="{{ $kambingHistory->kambing->no_kambing }}"
                            data-inspektur="{{ $kambingHistory->inspektur->nama }}"
                            data-tanggal="{{ $kambingHistory->created_at }}" data-sakit="{{ $kambingHistory->status }}"
                            data-keterangan="{{ $kambingHistory->keterangan }}" data-foto="{{ $kambingHistory->foto }}">
                            Detail
                        </button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<section>
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
            <div
                class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="exampleModalCenterTitle">
                        Modal title
                    </h5>
                    <!--Close button-->
                    <button type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="relative p-4 modal-body">
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                    <button type="button"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(() => {
        $('#tabel-riwayat').DataTable({
            order: [[2, 'desc']]
        });
        $('#tabel-riwayat').on('click', '.detail-button', function () {
            const noKambing = $(this).data('nokambing');
            const inspektur = $(this).data('inspektur');
            const tanggal = $(this).data('tanggal');
            const sakit = $(this).data('sakit');
            const keterangan = $(this).data('keterangan');
            const foto = $(this).data('foto');
            $('#exampleModalCenterTitle').text(tanggal);
            $('.modal-body').html(`<div><span class='font-semibold'>Inspektur</span>: ${inspektur}</div>`);
            $('.modal-body').append(`<div><span class="font-semibold">No Kambing</span>: ${noKambing}</div>`);
            $('.modal-body').append(`<div><span class="font-semibold">Sakit</span>: ${sakit ? 'Ya' : 'Tidak'}</div>`);
            $('.modal-body').append(`<div><span class="font-semibold">Keterangan</span>:</div>`);
            $('.modal-body').append(`<div>${keterangan}</div>`);
            $('.modal-body').append('<img src="'+ `${window.location.origin}/assets/foto_kambing/${foto}` + '" class="w-full mb-4">');


            $('#exampleModalCenter').modal('show');
        });
    });
</script>
@endsection