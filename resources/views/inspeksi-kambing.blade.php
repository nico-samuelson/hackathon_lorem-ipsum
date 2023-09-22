@extends("layouts.admin")
@section("content")
<div class="sm:my-10 my-5">
    <h1 class="sm:pl-32 pl-16 sm:text-5xl text-xl font-bold sm:mb-2 text-form">INSPEKSI KAMBING</h1>
    <h2 class="sm:pl-32 pl-16 text-md text-form">Isilah dengan informasi yang benar !</h2>
</div>
<div class="">
    <form action="" id="form">
        <div class="grid sm:grid-cols-2 grid-cols-1 sm:gap-8 gap-5 mb-5">
            <div class="sm:pl-32 pl-16 sm:pr-5 pr-16">
                <div class="grid grid-cols-1">
                    <div class="mb-5">
                        <label class="font-serif ml-2 text-form" for="id_kambing">
                            No Kambing yang dinspeksi
                        </label>
                        <select id="kambing_id"  class="bg-white border-2 border-gray-300 font-serif rounded-lg block w-full py-2 pl-3 form-input-border">
                            <option>-- Pilih Kambing --</option>
                            @foreach($kambing as $k)
                                <option value="{{ $k['id'] }}" class="font-serif">Kambing {{ $k['no_kambing'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="font-serif ml-2 text-form" for="date">Tanggal Inspeksi</label>
                        <input type="date" class="border-2 border-gray-300 rounded-md w-full form-input-border" placeholder="" name="tanggal" id="tanggal">
                    </div>
                    <div class="mb-5">
                        <label class="font-serif ml-2 text-form" for="status">Status Kesehatan Kambing</label>
                        <select id="status"  class="bg-white border-2 border-gray-300 font-serif rounded-lg block w-full py-2 pl-3 form-input-border">
                            <option>-- Pilih Status Kesehatan Kambing --</option>
                            <option value="0" class="font-serif">Sehat</option>
                            <option value="1" class="font-serif">Sakit</option>
                        </select>
                    </div>
                    <div class="">
                        <label class="font-serif ml-2 text-form" for="keterangan">Keterangan</label>
                        <textarea id="keterangan" class="border-2 border-gray-300 rounded-md w-full form-input-border"></textarea>
                    </div>
                </div> 
            </div>
            <div class="sm:pr-32 pr-16 sm:pl-5 pl-16">
                <label class="font-serif ml-2 text-form" for="foto_kambing">Foto Kambing</label>
                <input id="foto_kambing" name="foto_kambing" class="border-2 border-gray-300 rounded-md w-full form-input-border file:mr-4 file:my-24 sm:file:mx-24 file:mx-8
                file:rounded-full file:border-0
                file:text-sm file:font-semibold" type="file" accept=".jpeg,.jpg,.png">
            </div>
        </div>
        <div class="min-w-full flex justify-center mb-1">
            <button class="rounded-md border-2 border-gray-300 sm:px-32 px-10 py-2 text-center"  id="submit">Inspeksi Kambing</button>
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
            data.append("kambing_id", $("#kambing_id").val());
            data.append("status", $("#status").val());
            data.append("keterangan", $("#keterangan").val());
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
                        url: "{{route('inspeksi-kambing-proses')}}",
                        data: data,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            if(response.status == "success"){
                                Swal.fire(
                                'Berhasil!',
                                'Kambing berhasil di Inspeksi!',
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