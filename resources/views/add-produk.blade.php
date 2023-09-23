@extends("layouts.admin")
@section("content")
<div class="sm:py-10 py-5">
    <h1 class="sm:pl-32 pl-8 sm:text-5xl text-xl font-bold sm:mb-2 text-form">PENAMBAHAN PRODUK</h1>
    <h2 class="sm:pl-32 pl-8 text-md text-form">Isilah dengan informasi yang benar !</h2>
</div>
<div
    class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:ml-32 mx-8 p-8 overflow-x-auto">
    <form action="" id="form">
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-5">
            <div class="sm:pr-5">
                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <label class="font-serif ml-2 text-form" for="nama">Nama Produk</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Nama Produk ..." name="nama" id="nama">
                    </div>                    
                    <div class="mb-5">
                        <label class="font-serif ml-2 text-form" for="harga">Harga Produk</label>
                        <input type="text" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="Harga Produk (Rp.xx.xxx)" name="harga" id="harga">
                    </div>
                    <div class="">
                        <label class="font-serif ml-2 text-form" for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="border-2 border-gray-300 rounded-md w-full form-input-border"></textarea>
                    </div>
                </div> 
            </div>
            <div class="sm:pl-5">
                <label class="font-serif ml-2 text-form" for="foto_produk">Foto Produk</label>
                <input id="foto_produk" name="foto_produk" class="border-2 border-gray-300 rounded-md w-full form-input-border file:mr-4 sm:file:my-24 file:my-8 sm:file:mx-24 file:mx-2 
                file:rounded-full file:border-0
                file:text-sm file:font-semibold" type="file" accept=".jpeg,.jpg,.png">
            </div>
        </div>
        <div class="min-w-full flex justify-center mb-1">
            <button class="rounded-md border-2 border-gray-300 sm:px-32 px-10 py-2 text-center"  id="submit">Add Produk</button>
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
            data.append("deskripsi", $("#deskripsi").val());
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
                        url: "{{route('add-produk-proses')}}",
                        data: data,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            if(response.status == "success"){
                                Swal.fire(
                                'Berhasil!',
                                'Produk berhasil ditambahkan!',
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