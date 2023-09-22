@extends("layouts.main")
@section("content")
<div class="sm:my-10 my-5">
    <h1 class="sm:pl-32 pl-16 sm:text-5xl text-2xl font-bold sm:mb-2">PENGISIAN DATA DIRI</h1>
    <h2 class="sm:pl-32 pl-16 text-sm">Isilah dengan informasi yang benar</h2>
</div>
<div class="">
    <form action="" id="form">
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-5">
            <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                <label class="font-serif ml-2" for="nama">
                    Nama Lengkap
                </label>
                <input type="text" class="border-2 border-gray-300 rounded-md w-full" placeholder="Nama Lengkap ..." name="nama" id="nama">
            </div>
            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                <label class="font-serif ml-2" for="nik">NIK</label>
                <input type="text" class="border-2 border-gray-300 rounded-md w-full" placeholder="NIK ..." name="no_ktp" id="no_ktp">
            </div>
        </div>
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-5">
            <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <label class="font-serif ml-2" for="alamat">Alamat</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full" placeholder="Alamat ..." name="alamat" id="alamat">
                    </div>
                    <div class="mb-5">
                        <label class="font-serif ml-2" for="no_hp">No Handphone</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full" placeholder="no_hp ..." name="no_hp" id="no_hp">
                    </div>
                    <div class="">
                        <label class="font-serif ml-2" for="email">Email</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full" placeholder="email ..." name="email" id="email">
                    </div>
                </div>
            </div>
            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                <label class="font-serif ml-2" for="ktp">Foto KTP</label>
                <input id="ktp" name="ktp" class="border-2 border-gray-300 rounded-md w-full file:mr-4 file:my-24 sm:file:mx-24 file:mx-8
                file:rounded-full file:border-0
                file:text-sm file:font-semibold" type="file" accept=".jpeg,.jpg,.png">
            </div>
        </div>
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-10">
            <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                <label class="font-serif ml-2" for="username">
                    username
                </label>
                <input type="text" class="border-2 border-gray-300 rounded-md w-full" placeholder="username ..." name="username" id="username">
            </div>
            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                <label class="font-serif ml-2" for="password">password</label>
                <input type="password" class="border-2 border-gray-300 rounded-md w-full" placeholder="password ..." name="password" id="password">
            </div>
        </div>
        <div class="min-w-full flex justify-center mb-5">
            <button class="rounded-md border-2 border-gray-300 sm:px-32 px-24 py-2 bg-gray-700 text-white text-center hover:bg-white hover:text-black" id="submit">Ajukan</button>
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
                        )
                    }
                })
            });
        });
    </script>
@endsection("script")