@extends('layouts.frontend.app')


@section('header')

<span class="text-xl font-bold text-green-500">
        Contact Us <span class="text-gray-800">for online advertising <span class="text-gray-500">and/or</span> website development</span>
</span>
    
@endsection

@section('content')

<br>

<div class="">
<div class="m-auto w-4/5 bg-white border-2 rounded p-4">

        <h1 class="text-3xl font-semibold">
                Call Us <span class="text-green-500">or</span> Fill Form below to Receive Call From Us
        </h1>

        <p class="my-5 text-lg font-extrabold text-green-800">
                If you want to advertise online on Google, Youtube or Facebook, you can either call us now at <span class="text-gray-700">+91 7488002437</span> <br> OR if you want us to call you then fill the below form.
        </p>

        <div>
                <button class="w-full px-8 py-2 my-4 text-base text-white transition duration-500 ease-in-out transform bg-gray-800 border-gray-800 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-green-800">
                        Call Us now to Advertise Online
                </button>
        </div>

        <div class="text-green-900 text-center text-4xl font-extrabold">
                OR
        </div>

        <h3 class="my-4 text-2xl font-bold underline">
                Fill Form to Receive a Call from Us
        </h3>

</div>
</div>

<br>

@endsection