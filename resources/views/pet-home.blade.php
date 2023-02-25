@extends('pet-general')

@section('content')

    
    <section class="banner" style="background-image: url('images/{{$template['background']}}')">Todos os {{$template['title']}}</section>
    
    @if (count($pets) >= 1)
        <h2>Disponíveis para adoção</h2>
        <div class="container list">
            @foreach($pets as $pets)
            <div class="item">
                <img src="images/{{$pets->picture}}" class="item--image" />
                <div class="item--name">Raça: {{$pets->breed}}</div>
                <div class="item--color">Cor: {{$pets->color}}</div>
                <div class="item--color">Idade: {{$pets->age}}</div>
                <div class="item--genre">Gênero: {{$pets->gender}}</div>
                <a href="/viewAdoption/{{$pets->id}}"><button class="btn-view-adoption">Mais detalhes</button></a>
                @auth
                    <a href="/updateAdoption/{{$pets->id}}" class="actions"> <x-antdesign-edit /> </a>
                    <a href="/deleteAdoption/{{$pets->id}}" class="actions"> <x-antdesign-delete /> </a> 
                @endauth
            </div>
            @endforeach
        </div>
    @else
        <div class="container no-list">
            <h2>Não há animais disponíveis nestas condições.</h2>
        </div>
    @endif

    <div class="container-create">
        <a href="/newAdoption"><button class="btn-add-adoption">Adicionar adoção</button></a>
    </div>

    
    
    

@endsection