@extends('pet-general')

@section('content')

    
    <section class="banner" style="background-image: url('images/allanimals.jpg')">Todos os animais</section>
    <h2> disponíveis para adoção</h2>
    

    <div class="container list">
        @foreach($pets as $pets)
        <div class="item">
            <img src="images/{{$pets->picture}}" class="item--image" />
            <div class="item--name">Raça: {{$pets->breed}}</div>
            <div class="item--color">Cor: {{$pets->color}}</div>
            <div class="item--color">Idade: {{$pets->age}}</div>
            <div class="item--genre">Gênero: {{$pets->gender}}</div>
            <a href="/viewAdoption/{{$pets->id}}"><button class="btn-view-adoption">Mais detalhes</button></a>
        </div>
        @endforeach
    </div>

    <div class="container-create">
        <a href="/newAdoption"><button class="btn-add-adoption">Adicionar adoção</button></a>
    </div>

    
    <div class="container no-list">
        <h2>Não há animais disponíveis nestas condições.</h2>
    </div>
    

@endsection