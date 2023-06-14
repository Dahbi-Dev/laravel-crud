@extends('layout')
@section('title','Show Computers')
@section('content')
    <div class="max-w-6xl  mx-auto sm:px-6 lg:px-8" style="" > 
        <div class="flex justify-center pt-8 " style="margin-bottom: 20px;">
            <h1 style="font-size: 40px; text-align: center;">Computers</h1>
        </div>
            <div  style="padding-top: 50;" class="" >
            <h3>{{ $computer['name'] }} - {{ $computer['origin'] }} - <strong> {{$computer['price'] }} $</strong></h3>
            </div>
            <div class="edit-div">
                <a class="edit" href="{{route('computers.edit',$computer->id)}}">Edit</a> 
                <div >
                <form action="{{route('computers.destroy',$computer->id)}}" method="post">
                @csrf
                @method('DELETE')
                    <input type="submit" class="delete" value="Delete" href="{{route('computers.destroy',$computer->id)}}">
                </form>
            </div>
            </div>
           

    </div>
    </div>
@endsection 