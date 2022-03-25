@extends('layouts.main')

@section('title', 'Adote dog')

@section('content')

<div class="baner">
    <img src="/img/dogs.jpg" class="img-baner img-fluid" alt="...">
</div>

<div id="dogs-container" class="col-md-12">
    <h2> Ultimos cachorros divulgados </h2>
    <div id="cards-container" class="row">
        @foreach ($dogs as $dog)
            <div class="card col-md-3">
                <img src="/img/dog.jpg" alt="dog">
                <div class="card-body">
                    <p class="card-date">23/03/2020</p>
                    <h5 class="card-title">{{$dog->nome}}</h5>

                    <div class="d-flex">
                        @if($dog->sexo == 'm')
                            <a href="#" class="card-details me-2">Macho</a>
                        @elseif($dog->sexo == 'f')
                            <a href="#" class="card-details me-2">Fêmea</a>
                        @endif

                        @if($dog->porte == 'p')
                            <a href="#" class="card-details">Pequeno</a>
                        @elseif($dog->porte == 'm')
                            <a href="#" class="card-details">Médio</a>
                        @elseif($dog->porte == 'g')
                            <a href="#" class="card-details">Grande</a>
                        @endif
                        
                    </div>
                    <a href="#" class="my-btn">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection