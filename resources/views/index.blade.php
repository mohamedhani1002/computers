@extends('layouts.app') 
@section('content')

<!--Hero -->
<div class="hero-bg-image flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome to my blog</h1>
    <a class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase" href="/blog">Start Reading</a>
</div>
<!--driving a car-->
<div class="container sm:grid grid-cols-2 gap-10 mx-auto py-10  ">
    <div class="mx-2 md:mx-0">
        <img  class=" sm:rounded-lg " src="https://picsum.photos/id/239/500/320" alt="">
    </div>

    <div class="flex flex-col items-left justify-center"> 
        <h2 class="font-bold text-gray-700 text-4xl uppercase">how to drive a car</h2>

        <p class="font-bold text-gray-600 text-xl pt-2">
            first you should have an old car or you can go to a school
        </p>
        <p class="py-4 text-gray-500 text-sm leading-6">
            first you should have an old car or you can go to a school
            first you should have an old car or you can go to a school
            first you should have an old car or you can go to a school
        </p>
        <a href="/" class="bg-gray-700 text-gray-100  p-4 px-5 rounded-lg font-bold uppercase text-l place-self-start ">read more</a>
    </div>

    

    
</div>

<!-- categories -->
<div class="text-center pt-10 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto p-10 sm:grid grid-cols-4">
        <div class="font-bold text-2xl py-2">Cars</div>
        <div class="font-bold text-2xl py-2">Programming</div>
        <div class="font-bold text-2xl py-2">Design</div>
        <div class="font-bold text-2xl py-2">finance</div>
    </div>
</div>

<!--recent posts-->
<div class="container mx-auto text-center py-10">
    <h2 class="font-bold text-5xl py-10">recent blogs</h2>
    <p class="text-gary-400 leading-6 px-10">The English word car is believed
         to originate from Latin carrus/carrum "wheeled vehicle" or (via Old North
         French) Middle English carre "two-wheeled cart", both of which in turn
         derive from Gaulish karros "chariot".[14][15] It originally referred 
         to any wheeled horse-drawn vehicle, such as a cart, carriage, or wagon.[16][17]
         "Motor car", attested from 1895, is the usual formal term in British 
         English.[2] "Autocar", a variant likewise attested from 1895 and literally
         meaning "self-propelled car", is now considered archaic.[18] "Horseless 
         carriage" is attested from 1895.[19]
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-10 w-4/5">

            <ul class="md:flex text-xs gap-2">
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300 ">Cars</li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300 ">carlover</li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300 ">viechle</li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300 ">sportcar</li>
            </ul>

            <h3 class="text-l py-10 leading-6">
                "Motor car", attested from 1895, is the usual formal term in British 
         English.[2] "Autocar", a variant likewise attested from 1895 and literally
         meaning "self-propelled car", is now considered archaic.[18] "Horseless 
         carriage" is attested from 1895.[19]

            </h3>
            <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block">read more</a>
        </div>
        
    </div>
    <div class="flex">
        <img  class="object-cover " src="https://picsum.photos/id/242/500/320" alt="">

    </div>
</div>
@endsection