@extends('pet-general')

@section('content')

    
    <div class="container-view">
        <div class="view-left">
            <img src="{{URL::asset('images/acara.jpg')}}" class="item--image" />
        </div>
        
        <div class="view-right">
            <h1>Informações sobre o animal</h1>

            <div>
                <label class="view-text">Raça:</label>
                <input class="view-text" type="text" value="{{$pet->breed}}">
            </div>

            <div>
                <label class="view-text">Cor(es):</label>  
                <input class="view-text" type="text" value="{{$pet->color}}">
            </div>

            <div>
                <label class="view-text">Sexo:</label>
                <input class="view-text" type="text" value="{{$pet->gender}}">
            </div>

            <div>
                <label class="view-text" class="view-text">Idade:</label>
                <input class="view-text" type="text" value="{{$pet->age}}">
            </div>

            <div class="container-view">
                <a href="/"><button class="btn-view-adoption">Voltar</button></a>
            </div>
        </div>
        
        
        
        
    </div>

@endsection