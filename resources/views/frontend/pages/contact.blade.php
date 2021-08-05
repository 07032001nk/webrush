@extends('layouts.frontend.app')


@section('header')

<h1 class="text-xl font-bold text-green-500">
        Contact Us <span class="text-gray-800">for online advertising <span class="text-gray-500">and/or</span> website development</span>
</h1>
    
@endsection

@section('content')

<br>

<div class="">
<div class="m-auto w-4/5 bg-white border-2 rounded p-4">

        <p class="my-5 text-lg font-extrabold text-green-800">
                If you want to advertise online on Google, Youtube or Facebook, you can either call us now at <span class="text-gray-700">+91 7488002437</span> <br> OR if you want us to call you then fill the below form.
        </p>
        

        <div class="text-center items-center">
                <a href="tel:+917488002437" class="w-full px-8 py-2 my-4 text-base text-white transition duration-500 ease-in-out transform bg-gray-800 border-gray-800 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-green-800">
                        Call Us now to Advertise Online
                </a>
        </div>

        <div class="text-green-900 text-center text-4xl font-extrabold my-4">
                OR
        </div>

        <h3 class="my-4 text-2xl font-bold underline">
                Fill Form to Receive a Call from Us
        </h3>

        <div class="typeform-widget" data-url="https://form.typeform.com/to/faRQsmcD?typeform-medium=embed-snippet" style="width: 100%; height: 500px;"></div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>

</div>
</div>

<br>

@endsection