@extends('layout')
@section('title','Computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center ">
        <h1>Computers</h1>
    </div>

    <div >
        @if (count($computers) > 0)
            
        
     @foreach ($computers as $computer)
       <a href="{{route('computers.show',['computer'=>$computer['id']])}}"> <li>{{$computer['name']}} - shop({{$computer['shop']}} )- <strong> {{$computer['origin']}}</strong> - <strong> {{$computer['price']}}$</strong></li></a>
         
     @endforeach
    @else
      <p>there is no computer to show</p>
    @endif
    </div>
    
</div>
@endsection
    
