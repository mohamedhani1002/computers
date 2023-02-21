@extends('layout')
@section('title','create computer')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1> create new Computer</h1>
    </div>

    <div class="form">
        <form action="{{route('computers.store')}}" method="post">
            @csrf
        <div class="input-container ic1">
          <input id="computer-name" name="computer-name" class="input" value="{{old('computer-name')}}" type="text" >
          @error ('computer-name')
           <div class="mes">! {{$message}}</div> 
          @enderror
          <div class="cut"></div>
          <label for="computer-name" class="placeholder"> name</label>
        </div>

        <div class="input-container ic2">
          <input id="computer-origin" name="computer-origin" class="input" value="{{old('computer-origin')}}" type="text" >
          @error ('computer-origin')
          <div class="mes">! {{$message}}</div> 
         @enderror
          <div class="cut"></div>
          <label for="compter-origin" class="placeholder"> origin</label>
        </div>

        <div class="input-container ic2">
          <input id=" computer-price" name="computer-price" class="input" value="{{old('computer-price')}}" type="text" >
          @error ('computer-price')
          <div class="mes">! {{$message}}</div> 
         @enderror
          <div class="cut cut-short"></div>
          <label for="computer-price" class="placeholder"> price</>
        </div>

        <div class="input-container ic2">
          <input id=" shop-name" name="shop-name" class="input" value="{{old('shop-name')}}" type="text" >
          @error ('shop-name')
          <div class="mes">! {{$message}}</div> 
         @enderror
          <div class="cut cut-short"></div>
          <label for="shop-name" class="placeholder">shop</>
        </div>


        <button type="text" class="submit">submit</button>
    </form>
        </div>
          
        
    
</div>
@endsection
    
