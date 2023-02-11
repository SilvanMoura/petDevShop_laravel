@extends('pet-general')

@section('content')

    
    <section class="banner" style="background-image: url('images/banner_cat.jpg')">Todos os animais</section>
    <h2> disponíveis para adoção</h2>
    

    <div class="container">
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image">
            </div>

            <div>
                <label for="title">Evento:</label>
                <input type="text" id="title" name="title" placeholder="Nome do evento">
            </div>

            <div>
                <label for="title">O evento é privado?</label>
                <select name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            
            <input type="submit" value="Criar Evento">
        </form>
    </div>
    

@endsection