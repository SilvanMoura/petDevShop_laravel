@extends('pet-general')

@section('content')

    
    <section class="banner" style="background-image: url('images/allanimals.jpg')">Todos os animais</section>
    <h2> disponíveis para adoção</h2>
    

    <div class="container list">
        
        <div class="item">
            <img src="images/bengal.jpg" class="item--image" />
            <div class="item--name">teste</div>
            <div class="item--color">Cor: teste</div>
            <div class="item--genre">Gênero: teste</div>
        </div>
        
    </div>

    <div class="container">
        <a href="/newAdoption"><button>Adicionar adoção</button></a>
    </div>

    
    <div class="container no-list">
        <h2>Não há animais disponíveis nestas condições.</h2>
    </div>
    

@endsection