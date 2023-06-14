@extends('layout')
@section('title','Create Computer')
@section('content')
    <div class="max-w-6xl  mx-auto sm:px-6 lg:px-8" style="" > 
        <div class="flex justify-center pt-8 " style="margin-bottom: 20px;">
            <h1 style="font-size: 40px; text-align: center;">Create a new Computers</h1>
        </div>
            <div class="flex justify-center container">
               <form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1" style="background-color:gray ;">
                    @csrf
                    <!-- csrf = cross site request forgery -->

                    <div>
                        <label for="computer-name" class="text-sm">name :</label>
                            <input type="text" class="text-lg border-1" id="computer-name" name="computer-name" value="{{old('computer-name')}}" style="margin-top:10px;" >
                    </div>
                    @error('computer-name')
                    <div class="form-error">
                        {{$message}}

                    </div>
                    @enderror


                    <div>
                        <label for="computer-origin" class="text-sm">origin :</label>
                            <input type="text" class="text-lg border-1" id="computer-origin" name="computer-origin" value="{{old('computer-origin')}}" style="margin-top:10px;" >
                    </div>
                    @error('computer-origin')
                    <div class="form-error">
                        {{$message}}

                    </div>
                    @enderror


                    <div>
                        <label for="computer-price" class="text-sm" class="">price :</label>
                            <input type="text" class="text-lg border-1 "  id="computer-price" name="computer-price" value="{{old('computer-price')}}" style="margin-top:10px; margin-left:4px ;">
                    </div>
                    @error('computer-price')
                    <div class="form-error">
                        {{$message}}

                    </div>
                    @enderror


                    <hr style="margin-top:10px;" >
                    <div style="margin-top:10px; text-align: center;" >
                        <button type="submit" style="border: 1px solid black ; border-radius: 2px; color:white; background-color: black;" > Submit </button>
                    </div>
               </form>
            </div>
    </div>
@endsection 