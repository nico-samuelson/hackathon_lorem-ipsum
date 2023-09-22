@extends("layouts.admin")
@section("content")
    <div class="sm:my-10 my-5">
        <h1 class="sm:pl-32 pl-16 sm:text-5xl text-2xl font-bold sm:mb-2 text-form">PENGISIAN DATA KAMBING</h1>
        <h2 class="sm:pl-32 pl-16 text-lg text-form">Isilah dengan informasi yang benar</h2>
    </div>
    <div class="">
        <form action="" id="form">
            <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-5">
                <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                    <label class="font-serif ml-2 text-form" for="nama">
                        No Kambing
                    </label>
                    <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Nomer Kambing ..." name="no_kambing" id="no_kambing">
                </div>
                <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                    <label class="font-serif ml-2 text-form" for="nik">Tanggal Lahir</label>
                    <input type="date" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="" name="tanggal_lahir" id="tanggal_lahir">
                </div>
            </div>
            <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-10">
                <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                    <label class="font-serif ml-2 text-form" for="username">
                        Gender
                    </label>
                    <select id="gender"  class="bg-white border-2 border-gray-300 font-serif rounded-lg block w-full py-2 pl-3 form-input-border">
                        <option>-- Pilih Jenis kelamin --</option>
                        <option value="0" class="font-serif">Jantan</option>
                        <option value="1" class="font-serif">Betina</option>
                    </select>
                </div>
                <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                    <label class="font-serif ml-2 text-form" for="password">password</label>
                    <select id="hamil"  class="bg-white border-2 border-gray-300 font-serif rounded-lg block w-full py-2 pl-3 form-input-border">
                        <option>-- Pilih status kambing --</option>
                        <option value="1" class="font-serif">Hamil</option>
                        <option value="0" class="font-serif">Tidak Hamil</option>
                    </select>
                </div>
            </div>
            <div class="min-w-full flex justify-center mb-1">
                <button class="rounded-md border-2 border-gray-300 sm:px-32 px-10 py-2 text-center"  id="submit">Daftarkan Kambing</button>
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
                data.append("gender", $("#gender").val());
                data.append("hamil", $("#hamil").val());
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
                            url: "{{route('add-kambing-proses')}}",
                            data: data,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                if(response.status == "success"){
                                    Swal.fire(
                                    'Berhasil!',
                                    'Data anda telah kami terima.',
                                    'success'
                                    ).then((result) => {
                                        if (result.isConfirmed) {
                                            window.location.reload();
                                        }
                                    })
                                }else{
                                    let error = "";
                                    $.each(response.error, function(key, value){
                                        error = value[0];
                                    });
                                    console.log(error);
                                    Swal.fire(
                                    'Gagal!',
                                    error,
                                    'error'
                                    )
                                }
                            }
                        })
                    }
                })
            });
        });
    </script>
@endsection("script")