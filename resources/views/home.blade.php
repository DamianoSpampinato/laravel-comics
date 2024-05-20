@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>current series</h1>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">

                <div class="ms-card ">
                    <div class="img-container">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="title">{{$comic['title']}}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection