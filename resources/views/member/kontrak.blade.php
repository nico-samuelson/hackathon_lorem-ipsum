@extends('layouts.admin')

@section('style')
    <style>
        #tabel-kambing_wrapper {
            width: 100%;
            float: right;
        }

        #tabel-kambing_length select {
            width: 70px;
        }

        @media (max-width: 768px) {
            #tabel-kambing_wrapper {
                width: 100%;
                float: none;
            }
        }
    </style>
@endsection

@section('content')
    <section class="py-8 border-b-2 border-double pb-3">
        <h1 class="sm:pl-32 pl-8 sm:text-5xl text-2xl font-bold sm:mb-2 text-form">KONTRAK ANDA</h1>
    </section>
    <section class="px-10 md:pl-32 pr-10 pb-10 gap-8">
        <div class="block w-full min-h-[10rem] rounded-lg bg-white text-left shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 mt-8">
            @if(session('success'))
                <div
                class="mb-8 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700"
                role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div
                class="mb-8 rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700"
                role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="overflow-x-auto p-6">
                <p class="font-bold pb-5 text-xl">Detail Kontrak</p>
                <table id="tabel-kambing" class="table-auto overflow-scroll w-full">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th>Status</th>
                            <th>Kontrak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kontrak as $k)
                            <tr class="border-b dark:border-neutral-500">
                                @if ($k->status == 0)
                                    <td>
                                        <span
                                        class="inline-block whitespace-nowrap rounded-[0.27rem] bg-danger-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-danger-700">
                                        Expired
                                        </span>
                                    </td>
                                @else
                                    <td>
                                        <span
                                        class="inline-block whitespace-nowrap rounded-[0.27rem] bg-success-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-success-700">
                                        Aktif
                                        </span>
                                    </td>
                                @endif
                                <td>
                                    <a href={{urlencode($k->file_kontrak_signed ?? $k->file_kontrak) }}>
                                        <button
                                        type="button"
                                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#EB8600] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.3),0_4px_18px_0_rgba(235,134,0,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(235,134,0,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(235,134,0,0.2),0_4px_18px_0_rgba(235,134,0,0.1)]"
                                        style="background-color: #EB8600" >
                                        lihat kontrak
                                        </button>
                                    </a>
                                </td>
                                @if(!$k->file_kontrak_signed)
                                    <td>
                                        <button
                                        type="button"
                                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                        id="openModal"
                                        data-te-toggle="modal"
                                        data-te-target="#exampleModal"
                                        data-te-ripple-init
                                        data-te-ripple-color="light"
                                        data-kontrak="{{ $k->file_kontrak }}">
                                        Submit Kontrak Bertandatangan
                                        </button>
                                    </td>
                                @else
                                    <td></td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>

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
                    <div
                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <!--Modal title-->
                        <h5
                        class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="exampleModalLabel">
                            Upload Kontrak
                        </h5>
                        <!--Close button-->
                        <button
                        type="button"
                        class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss
                        aria-label="Close">
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
                            d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        </button>
                    </div>

                    <!--Modal body-->
                    <div class="relative flex-auto p-4" id="modal_body" data-te-modal-body-ref>
                        <form action="{{ route('member.upload_kontrak') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                                <label class="font-serif ml-2 text-form" for="file_kontrak_signed">Foto Produk</label>
                                <input id="file_kontrak_signed" name="file_kontrak_signed" class="border-2 border-gray-300 rounded-md w-full form-input-border file:mr-4 sm:file:my-24 file:my-8 sm:file:mx-24 file:mx-2 
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold" type="file" accept=".pdf">
                            </div>
                    </div>

                    <!--Modal footer-->
                    <div
                        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                        <button
                        type="button"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-modal-dismiss
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Close
                        </button>
                        <button
                        type="submit"
                        id="uploadFile"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        Save changes
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#tabel-kambing').DataTable({
            order: [[2, 'desc']]
        });

        $(document.body).on('click', '#openModal', function(e) {
            $("#file_kontrak_signed").after(`<input type='hidden' id='file_kontrak' name="file_kontrak" value="` + $(this).attr('data-kontrak') + `">`)
        });
    });
</script>
@endsection