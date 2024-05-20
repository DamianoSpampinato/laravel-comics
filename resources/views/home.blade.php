@extends('layouts.app')

@section('content')
<section class="bg-black">
    <div class="container p-2">
        <div class="title p-3 bg-primary">
            <h1>current series</h1>
        </div>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">
                
                <div class="ms-card text-white">
                    <div class="img-container">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="card-text">{{$comic['title']}}</div>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                <span class="px-3 py-1 bg-primary text-center">LOAD MORE</span>
            </div>
        </div>
    </div>
</section>
<section id="features" class="bg-primary p-3">
    <div class="container d-flex justify-content-center">
        <div class="feat d-flex align-items-center gap-1 p-2">
            <div class="img-container">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            </div>
            <div class="text">Digital Comics</div>
        </div>
        <div class="feat d-flex align-items-center gap-1 p-2">
            <div class="img-container">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            </div>
            <div class="text">Merchandise</div>
        </div>
        <div class="feat d-flex align-items-center gap-1 p-2">
            <div class="img-container">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            </div>
            <div class="text">Shop Locator</div>
        </div>
        <div class="feat d-flex align-items-center gap-1 p-2">
            <div class="img-container">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            </div>
            <div class="text">Subscription</div>
        </div>
        <div class="feat d-flex align-items-center gap-1 p-2">
            <div class="img-container">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            </div>
            <div class="text">power visa</div>
        </div>
    </div>
</section>
@endsection