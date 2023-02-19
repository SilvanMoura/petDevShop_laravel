@extends('pet-general')

@section('content')

    
    <section class="banner" style="background-image: url('images/banner_cat.jpg')">Todos os animais</section>
    <h2> disponíveis para adoção</h2>
    

    <div class="container-create">
        <form action="/createAdoption" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label class="create-label" for="picturePet">Imagem do animal:</label>
                <input class="create-input" type="file" id="picturePet" name="picturePet">
            </div>

            <div>
                <label class="create-label" for="genderPet">Gênero:</label>
                <input class="create-input" type="text" id="genderPet" name="genderPet" placeholder="Gênero do animal">
            </div>

            <div>
                <label class="create-label" for="breedPet">Raça:</label>
                <input class="create-input" type="text" id="breedPet" name="breedPet" placeholder="Raça do animal">
            </div>

            <div>
                <label class="create-label" for="colorPet">Cor:</label>
                <input class="create-input" type="text" id="colorPet" name="colorPet" placeholder="Cor(es) do animal">
            </div>

            <div>
                <label class="create-label" for="kindPet">Espécie:</label>
                <select class="create-select" name="kindPet" id="kindPet">
                    <option value="dogs">Cachorro</option>
                    <option value="cats">Gato</option>
                    <option value="fishes">Peixe</option>
                </select>
            </div>

            <div>
                <label class="create-label" for="agePet">Idade:</label>
                <input class="create-input" type="number" id="agePet" name="agePet" placeholder="Idade do animal">

                <select class="create-select" name="ageTimePet" id="ageTimePet">
                    <option value="Mes(es)">Mes(es)</option>
                    <option value="Ano(s)">Ano(s)</option>
                </select>
            </div>
            
            <div class="create-btn">
                <input type="submit" class="btn-add-adoption" value="Criar adoção">
            </div>
            
        </form>
    </div>
    

@endsection