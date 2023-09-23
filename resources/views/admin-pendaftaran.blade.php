@extends("layouts.admin")

@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
<style>
    #tabel-pendaftar_wrapper {
        width: calc(100% - 80px);
        float: right;
    }

    #tabel-pendaftar_length select {
        width: 50px;
    }

    @media (max-width: 768px) {
        #tabel-pendaftar_wrapper {
            width: 100%;
            float: none;
        }
    }
</style>
@endsection

@section("content")
<section class="sm:my-6 my-5 border-b-2 border-double pb-3">
    <h1 class="sm:pl-32 pl-16 sm:text-5xl text-xl font-bold sm:mb-2 text-form">LIST OF PENDAFTAR</h1>
</section>

<section class="my-8 px-10 py-5">
    <div class="overflow-x-auto">
        <table id="tabel-pendaftar" class="table-auto overflow-scroll w-full min-w-[800px]">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Foto KTP</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $member): ?>
                <tr>
                    <td>
                        {{ $member['nama'] }}
                    </td>
                    <td>
                        {{ $member['alamat'] }}
                    </td>
                    <td>
                        {{ $member['no_hp'] }}
                    </td>
                    <td>
                        {{ $member['email'] }}
                    </td>
                    <td>
                        {{ $member['username'] }}
                    </td>
                    <td>
                        <button
                        type="button"
                        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] h-full"
                        data-te-toggle="modal"
                        data-te-target="#staticBackdrop"
                        data-te-ripple-init
                        data-te-ripple-color="light"
                        onclick="changeModal('View KTP','{{ route('assets.ktp',$member['foto_ktp']) }}')">
                        View KTP
                        </button>
                    </td>
                    <td>
                        <form action="">
                            <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                <input
                                    class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                    type="radio" name="status" id="radioDefault01" value="1"
                                    data-id="{{ $member['id'] }}" {{ $member['status']==1 ? 'checked' : '' }} />
                                <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                    for="radioDefault01">
                                    Terima
                                </label>
                            </div>
                            <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                <input
                                    class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                    type="radio" name="status" id="radioDefault02" value="2"
                                    data-id="{{ $member['id'] }}" {{ $member['status']==2 ? 'checked' : '' }} />
                                <label class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                    for="radioDefault02">
                                    Tolak
                                </label>
                            </div>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="fixed bottom-0 right-6 pointer-events-auto mx-auto mb-4 hidden w-96 max-w-full rounded-lg bg-success-100 bg-clip-padding text-sm text-success-700 shadow-lg shadow-black/5 data-[te-toast-show]:block data-[te-toast-hide]:hidden"
        id="success-toast" role="alert" aria-live="assertive" aria-atomic="true" data-te-autohide="false"
        data-te-toast-init data-te-toast-hide>
        <div
            class="flex items-center justify-between rounded-t-lg border-b-2 border-success/20 bg-success-100 bg-clip-padding px-4 pb-2 pt-2.5">
            <p class="flex items-center font-bold text-success-700">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
                    class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                    </path>
                </svg>
                Berhasil
            </p>
            <div class="flex items-center">
                <p class="text-xs text-success-700"></p>
                <button type="button"
                    class="ml-2 box-content rounded-none border-none opacity-80 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-toast-dismiss aria-label="Close">
                    <span
                        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="break-words rounded-b-lg bg-success-100 px-4 py-4 text-success-700 response-message">
            
        </div>
    </div>
    <div class="fixed bottom-0 right-6 pointer-events-auto z-50 mx-auto mb-4 hidden w-96 max-w-full rounded-lg bg-danger-100 bg-clip-padding text-sm text-danger-700 shadow-lg shadow-black/5 data-[te-toast-show]:block data-[te-toast-hide]:hidden"
        id="danger-toast" role="alert" aria-live="assertive" aria-atomic="true" data-te-autohide="false"
        data-te-toast-init data-te-toast-hide>
        <div
            class="flex items-center justify-between rounded-t-lg border-b-2 border-danger/20 bg-danger-100 bg-clip-padding px-4 pb-2 pt-2.5">
            <p class="flex items-center font-bold text-danger-700">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
                    class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                    </path>
                </svg>
                Gagal
            </p>
            <div class="flex items-center">
                <p class="text-xs text-danger-700"></p>
                <button type="button"
                    class="ml-2 box-content rounded-none border-none opacity-80 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-toast-dismiss aria-label="Close">
                    <span
                        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="break-words rounded-b-lg bg-danger-100 px-4 py-4 text-danger-700 response-message">
            
        </div>
    </div>
</section>
<div
    data-te-modal-init
    class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
    id="staticBackdrop"
    data-te-backdrop="static"
    data-te-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
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
            id="viewTitle" style="transition: all ease-in-out">
            Modal title
            </h5>
        </div>

        <!--Modal body-->
        <div data-te-modal-body-ref class="relative p-4">
            <div class="flex justify-content-center align-items-center w-full">
                <img
                    src=""
                    class="m-auto h-auto max-w-sm rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 dark:shadow-none dark:hover:shadow-lg dark:hover:shadow-white/30 border"
                    alt="" 
                    id="viewImage"
                    style="transition: all ease-in-out;"/>
            </div>
        </div>

        <!--Modal footer-->
        <div
            class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
            <button
            type="button"
            class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
            data-te-modal-dismiss
            data-te-ripple-init
            data-te-ripple-color="light"
            onclick="changeModal('','')">
            Close
            </button>
        </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#tabel-pendaftar').DataTable();
        
        function showSuccessToast(message) {
            var toast = document.getElementById("success-toast");
            toast.querySelector(".response-message").innerHTML = message;
            delete toast.dataset.teToastHide;
            toast.dataset.teToastShow = "";
            setTimeout(function() {
                delete toast.dataset.teToastShow;
                toast.dataset.teToastHide = "";
            }, 2500);
        }

        function showFailedToast() {
            var toast = document.getElementById("danger-toast");
            toast.querySelector(".response-message").innerHTML = 'Gagal';
            delete toast.dataset.teToastHide;
            toast.dataset.teToastShow = "";
            setTimeout(function() {
                delete toast.dataset.teToastShow;
                toast.dataset.teToastHide = "";
            }, 2500);
        }


        $('#tabel-pendaftar tbody').on('change', 'input[type="radio"]', function() {
            var id = $(this).data('id');
            var status = $(this).val();
            $.post("{{route('admin.pendaftaran.update-status')}}", {
                _token: "{{ csrf_token() }}",
                id: id,
                status: status
            }).then((res) => {
                showSuccessToast(res.message);
            }).catch((err) => {
                showFailedToast(err.message);
                this.checked = !this.checked;
            });
        });

        // $.post("{{route('admin.pendaftaran.update-status')}}", {
        //     _token: "{{ csrf_token() }}",
        //     id: "1"
        // }, function(data) {
        //     console.log(data);
        // });
    });
    function changeModal(title,src){
        $("#viewTitle").html(title);
        $("#viewImage").attr("src",src);
    }
</script>
@endsection