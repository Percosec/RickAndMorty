@extends('welcome')

@section('title','Rick And Morty')

@section('content')
    <div class="px-5 mt-5 mobile:flex flex-wrap place-content-around gap-5">
        @foreach ($personajes as $personaje)
            <div class="border-2 border-black rounded p-5 mt-10 mobile:w-344">
                <img src="{{$personaje['image']}}" alt="imagen">
                <h1 class="mt-5 font-bold">{{$personaje['name']}}</h1>
                <p>Species: <span>{{$personaje['species']}}</span></p>
                <p>Location: <span>{{$personaje['location']['name']}}</span></p>
            </div>
        @endforeach
    </div>
@endsection