@extends('layout')
@section('title',' show Computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>Computers</h1>
    </div>

    <div class="mt-8">
        <h3>
            {{$computer['name']}} is from<strong> {{$computer['origin']}}</strong>
             <p>
              Cost : {{$computer['price']}}$
              <br>
              Shop : {{$computer['shop']}}
            </p>
        </h3>
        <a class="editbtn" href="{{route('computers.edit', $computer->id)}}">Edit</a> 
         <br><br>
        <form action="{{route('computers.destroy', $computer->id)}}" method="post">
            @csrf
            @method('Delete')
        
            <button class="editbtn" class="submit">Delete</button>
        </form>
      
    </div>
    
</div>
@endsection
    
