@extends('layouts.app')
@section('content')
<div class=" container m-auto text-center pt-10 p-5">
    <h1 class=" text-4xl font-bold "> editting {{$post->title}} article</h1>
</div>

 <div class=" container m-auto  p5-10 pb-5 text-center">
    <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
        <input
                type="text" 
                name="title"
                value ="{{$post->title}}"
                class="w-full h-20 text-2xl rounded-lg shadow-lg boreder-b p-15 mb-5 "
        >

        <textarea
         name="description"
         class="w-full h-60  text-l rounded-lg shadow-lg boreder-b p-15 mb-5 ">
         {{$post->description}}
         
        </textarea>
        
           
     <!--  <div class="py-15">
        <label class=" 
           bg-gray-200 hover:bg-gray-700
           text-gray-700 hover:text-gray-200
           transition duration-300
           cursor-pointer 
           p-5 rounded-lg
           font-bold uppercase
        ">
        <span> select an image</span>
        <input type="file" name="image" class="hidden">
        </label>
       </div> -->
       <input class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="large_size" type="file" name="image">
       <br>

        <button type="submit"
        class="
        bg-green-700 hover:bg-green-200
        text-gray-200 hover:text-gray-200
        transition duration-300
        cursor-pointer
        p-5 rounded-lg
        font-bold
        ">
        confirm the edit 
        </button>
    </form>
</div>
@endsection



