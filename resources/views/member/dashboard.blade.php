@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<style>
    #tabel-history_wrapper {
        width: 100%;
        float: right;
    }

    #tabel-history_length select {
        width: 70px;
    }

    @media (max-width: 768px) {
        #tabel-history_wrapper {
            width: 100%;
            float: none;
        }
    }
</style>
@endsection

@section('content')
    <section class="px-10 md:pl-32 pr-10 pt-8 gap-8">
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="block w-full min-h-[10rem] rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="p-6">
                    <h5
                    class="mb-5 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                    Jumlah Kambing Anda
                    </h5>
                    <h6 class="mb-5 text-base font-medium leading-tight text-neutral-500 dark:text-neutral-50">
                        {{ $kambing->count() . ' ekor' }}
                    </h6>
                    <a
                    type="button"
                    href={{ route('member.kambing') }}
                    class="pointer-events-auto mr-5 inline-block cursor-pointer rounded text-base font-normal leading-normal text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700">
                    Lihat Detail
                    </a>
                </div>
            </div>
            <div class="block w-full min-h-[10rem] rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                <div class="p-6">
                    <h5
                    class="mb-5 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                    Kontrak
                    </h5>
                    <h6 class="mb-5 text-base font-medium leading-tight text-neutral-500 dark:text-neutral-50">
                        {{ count($jumlahKontrak) . ' kontrak aktif' }}
                    </h6>
                    <a
                    type="button"
                    href={{ route('member.kontrak') }}
                    class="pointer-events-auto mr-5 inline-block cursor-pointer rounded text-base font-normal leading-normal text-primary transition duration-150 ease-in-out hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700">
                    Lihat Detail
                    </a>
                </div>
            </div>
        </div>

        <div class="block w-full min-h-[10rem] rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mt-8">
            <div class="overflow-x-auto p-6">
                <p class="font-bold pb-5 text-xl">Riwayat Inspeksi Kambing</p>
                <table id="tabel-history" class="table-auto overflow-scroll w-full">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th>No Kambing</th>
                            <th>Tanggal Inspeksi</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Inspektur</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($histories as $history)
                            <tr class="border-b dark:border-neutral-500">
                                <td>{{ $history->kambing->no_kambing }}</td>
                                <td>{{ $history->created_at }}</td>
                                <td>{{ $history->kambing->gender == 0 ? 'Jantan' : 'Betina' }}</td>
                                <td>{{ $history->status == 0 ? 'Sehat' : 'Tidak sehat' }}</td>
                                <td>{{ $history->keterangan }}</td>
                                <td>{{ $history->inspektur->nama }}</td>
                                <td>
                                    <a href={{ $history->foto }}>
                                        <button
                                        type="button"
                                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#EB8600] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(235,134,0,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)]"
                                        style="background-color: #EB8600"
                                        data-te-toggle="modal"
                                        data-te-target="#exampleModal"
                                        data-te-ripple-init
                                        data-te-ripple-color="light">
                                        FOTO
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel-history').DataTable();
    });
</script>
@endsection