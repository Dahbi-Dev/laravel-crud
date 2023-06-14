@extends('layout')
@section('title','Computers')
@section('content')
    <div class=" max-w-6xl  mx-auto sm:px-6 lg:px-8"  style="" > 
        <div class="flex justify-center pt-8 " style="">
            <h1 style="font-size: 40px; text-align: center;">Computers</h1>
        </div>
            <div class="mt-8"  style="" >
            @if (count($computers) > 0)
                <ul>
                    @foreach($computers as $computer)
                    <a href="{{route('computers.show', ['computer' => $computer['id']])}}">
                        <li>
                             {{ $computer['name'] }} - {{ $computer['origin'] }} - <strong>  {{$computer['price'] }} $ </strong> 
                        </li>

                    </a>
                    
                    @endforeach
                    </ul>
            @else
                <p style="color: red;"> There is no Computer to display</p>
            @endif
            </div>
    </div>
@endsection 