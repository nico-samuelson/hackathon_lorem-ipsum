@extends("layouts.main")
@section('style')
<style>
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
</style>
@endsection()
@section("content")
<div class="w-full h-screen flex justify-center items-center">
    <div class="mx-auto my-auto">
        <h1 class="sm:text-5xl text-4xl text-center mb-3 px-5">!! Anda Sudah Mendaftar !!</h1>
        <h2 class="sm:text-2xl text-xl text-center px-5">Mohon menunggu respon dari kami yaa 😁🙏</h2>
    </div>
</div>
<div id="bg-1"></div>
<div id="bg-2"></div>
@endsection