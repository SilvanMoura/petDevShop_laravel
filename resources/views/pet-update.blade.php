@extends('pet-general')

@section('content')

    
    <div class="container-view">
        <div class="view-left">
            <img src={{URL::asset("images/$pet->picture")}} class="item--image" />
        </div>
        
        <div class="view-right">
            <h1>Atualizando adoção</h1>

            <form action="/createAdoption" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="update-field">
                    <label for="picturePet">Imagem do animal:</label>
                    <input type="file" id="picturePet" name="picturePet">
                </div>

                <div class="update-field">
                    <label for="genderPet">Gênero:</label>
                    <input type="text" id="genderPet" name="genderPet" placeholder="Gênero do animal" value="{{$pet->gender}}">
                </div>

                <div class="update-field">
                    <label for="breedPet">Raça:</label>
                    <input type="text" id="breedPet" name="breedPet" placeholder="Raça do animal" value="{{$pet->breed}}">
                </div>

                <div class="update-field">
                    <label for="colorPet">Cor:</label>
                    <input type="text" id="colorPet" name="colorPet" placeholder="Cor(es) do animal" value="{{$pet->color}}">
                </div>

                <div class="update-field">
                    <label for="kindPet">Espécie:</label>
                    <select name="kindPet" id="kindPet">
                        <option value="dogs" @if ($pet->kind === 'dogs') selected @endif >Cachorro</option>
                        <option value="cats" @if ($pet->kind === 'cats') selected @endif >Gato</option>
                        <option value="fishes" @if ($pet->kind === 'fishes') selected @endif >Peixe</option>
                    </select>
                </div>

                <div class="update-field">
                    <label for="agePet">Idade:</label>
                    <input type="number" id="agePet" name="agePet" placeholder="Idade do animal" value={{$pet->age}}>

                    <select name="ageTimePet" id="ageTimePet">
                        <option value="Mes(es)" @if ($pet->age === 'Mes(es)') selected @endif >Mes(es)</option>
                        <option value="Ano(s)" @if ($pet->age === 'Ano(s)') selected @endif >Ano(s)</option>
                    </select>
                </div>

                <div class="buttons">
                    <button type="submit" class="btn-view-adoption">Salvar</button>
                </div>
            </form>
            
            <div class="btn-back">
                <a href="/"><button class="btn-update-adoption">Voltar</button></a>
            </div>

        </div>
        
        
        
        
    </div>

@endsection