@extends('layouts.main')

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
        .text-form{
            color: #4f3411 !important;
        }
        .form-input-border{
            border-radius: 0 !important;
            border: 0 !important;
            border-bottom: 1px solid #4f3411 !important;
            color: #4f3411 !important;
            background-color: transparent !important;
            box-shadow: inset 0 0 0 0 #ffecae;
            transition: ease-in-out 0.5s;
        }
        .form-input-border:hover{
            color:#4f3411;
            box-shadow: inset 70vw 0 0 0 #ffecae;
        }
        .form-input-border:active{
            border: none !important;
            color:#4f3411;
            background-color:#ffecae !important;
        }
        .form-input-border:focus{
            outline: none !important;
            color:#4f3411;
            background-color:#ffecae !important;
        }
        #submit{
            color:#4f3411;
            background-color: #eb8600;
            box-shadow: inset 0 0 0 0 #ffecae;
            transition: ease-in-out 0.5s;
            border-color:#4f3411;
        }
        #submit:hover, #submit:focus, #submit:active{
            background-color:#eb8600;
            color: #ffffff;
        }
        #text-logo {
            /* font-family: 'Shrikhand', cursive; */
            stroke-dashoffset: 100%;
            stroke-dasharray: 100%;
            -webkit-animation: draw 6s forwards ease-in,up 2s 6s forwards ease-in;
            animation: draw 6s forwards ease-in,up 2s 6s forwards ease-in;
            background-clip: text;
        }
                    
        @-webkit-keyframes draw {
            100% {
                stroke-dashoffset: 0%;
                fill: #000000;
            }
        }
            
        @keyframes draw {
            100% {
                stroke-dashoffset: 0%;
                fill: #000000;
            }
        }
            
        @-webkit-keyframes up{
            100%{
                translate: translateY(-20vh);
            }
        }
        @keyframes up{
            100%{
                translate: translateY(-20vh);
            }
        }
    </style>
@endsection

@section('content')
    <div id="bg-1"></div>
    <div id="bg-2"></div>
    <section class="login flex justify-center items-center h-screen">
        <form action={{ route('login.process') }} method="POST">
            @csrf
            <h1 id="text-logo" class="text-center text-2xl pb-5">
                ETAWA
            </h1>

            @if (session('error'))
                <div
                class="mb-4 rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700"
                role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="flex flex-col pb-5">
                <label class="font-serif ml-2 text-form" for="nama">
                    Username
                </label>
                <input type="text" class="border-2 border-gray-300 rounded-md form-input-border" placeholder="Username" name="username" id="username">
            </div>
            <div class="flex flex-col pb-10">
                <label class="font-serif ml-2 text-form" for="nik">Password</label>
                <input type="password" class="border-2 border-gray-300 rounded-md form-input-border" placeholder="Password" name="password" id="password">
            </div>
            <div class="min-w-full flex justify-center mb-1">
                <button class="rounded-md border-2 border-gray-300 sm:px-32 px-24 py-2 text-center"  id="submit" type="submit">Login</button>
            </div>
        </form>
    </section>
@endsection