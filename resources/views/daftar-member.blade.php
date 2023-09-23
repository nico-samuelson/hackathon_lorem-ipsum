@extends("layouts.main")
@section('style')
<style>
    html,body{
        margin:0 !important;
        padding:0 !important;
        width:100% !important;
        height:100% !important;
    }
    .text-form{
        color: #4f3411 !important;
    }
    .form-input-border{
        border-color: #4f3411 !important;
        color: #4f3411 !important;
        background-color: transparent !important;
        box-shadow: inset 0 0 0 0 #ffecae;
        transition: ease-in-out 0.5s;
    }
    #bg-1{
        position: fixed;
        background: rgb(238,174,202);
        background: radial-gradient(circle, #f4b63c 0%, rgba(148,187,233,0) 40%);
        top:30vh;
        left:10vw;
        width:130vw;
        height:130vh;
        transform: translateX(-50%) translateY(-50%);
        transition: all 200ms ease-out;
        z-index:-2;
    }
    #bg-2{
        position: fixed;
        background: rgb(238,174,202);
        background: radial-gradient(circle, #fcd75f 0%, rgba(148,187,233,0) 40%);
        top:90vh;
        left:90vw;
        width:160vw;
        height:160vh;
        transform: translateX(-50%) translateY(-50%);
        transition: all 200ms ease-out;
        z-index:-1;
    }
    .form-input-border:hover{
        color:#4f3411;
        box-shadow: inset 70vw 0 0 0 #ffecae;
    }

    /* .col-md-6 > .form-input-border:hover{
        color:#4f3411;
        box-shadow: inset 50vw 0 0 0 #ffffff;
    } */

    .form-input-border:active{
        color:#4f3411;
        background-color:#ffecae !important;
    }
    .form-input-border:focus{
        color:#4f3411;
        background-color:#ffecae !important;
    }
    #submit{
        color:#4f3411;
        background-color: transparent;
        box-shadow: inset 0 0 0 0 #ffecae;
        transition: ease-in-out 0.5s;
        border-color:#4f3411;
    }
    #submit:hover, #submit:focus, #submit:active{
        background-color:#eb8600;
        color: #ffffff;
    }

</style>
@endsection('style')
@section("content")
<div class="sm:my-10 my-5">
    <h1 class="sm:pl-32 pl-16 sm:text-5xl text-2xl font-bold sm:mb-2 text-form">PENGISIAN DATA DIRI</h1>
    <h2 class="sm:pl-32 pl-16 text-lg text-form">Isilah dengan informasi yang benar</h2>
</div>
<div id="bg-1"></div>
<div id="bg-2"></div>
<div class="">
    <form action="" id="form">
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-5">
            <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                <label class="font-serif ml-2 text-form" for="nama">
                    Nama Lengkap
                </label>
                <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Nama Lengkap" name="nama" id="nama">
            </div>
            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                <label class="font-serif ml-2 text-form" for="nik">NIK</label>
                <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="NIK" name="no_ktp" id="no_ktp">
            </div>
        </div>
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-5">
            <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <label class="font-serif ml-2 text-form" for="alamat">Alamat</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Alamat" name="alamat" id="alamat">
                    </div>
                    <div class="mb-5">
                        <label class="font-serif ml-2 text-form" for="no_hp">No Handphone</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="No HP" name="no_hp" id="no_hp">
                    </div>
                    <div class="">
                        <label class="font-serif ml-2 text-form" for="email">Email</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Email" name="email" id="email">
                    </div>
                </div>
            </div>
            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                <label class="font-serif ml-2 text-form" for="ktp">Foto KTP</label>
                <input id="ktp" name="ktp" class="border-2 border-gray-300 rounded-md w-full form-input-border file:mr-4 file:my-24 sm:file:mx-24 file:mx-8
                file:rounded-full file:border-0
                file:text-sm file:font-semibold" type="file" accept=".jpeg,.jpg,.png">
            </div>
        </div>
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-10">
            <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                <label class="font-serif ml-2 text-form" for="username">
                    Username
                </label>
                <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Username" name="username" id="username">
            </div>
            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                <label class="font-serif ml-2 text-form" for="password">Password</label>
                <input type="password" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Password" name="password" id="password">
            </div>
        </div>
        <div class="min-w-full flex justify-center mb-6">
            <button class="rounded-md border-2 border-gray-300 sm:px-32 px-24 py-2 text-center"  id="submit">Ajukan</button>
        </div>
    </form>
</div>
@endsection("content")
@section("script")
    <script>
        $(document).ready(function(){
            $("#submit").click(function(e){
                e.preventDefault();
                var data  = new FormData($("#form")[0]);
                data.append("_token", "{{ csrf_token() }}");
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang anda masukkan akan kami proses",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#4F46E5',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, saya yakin!',
                    cancelButtonText: 'Tidak, saya tidak yakin!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{route('daftar-member-proses')}}",
                            data: data,
                            contentType:    false,
                            processData:    false,
                            success: function (response) {
                                console.log(response);
                            }

                        })
                        Swal.fire(
                        'Berhasil!',
                        'Data anda telah kami terima.',
                        'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })
                    }
                })
            });
        });
    </script>
@endsection("script")