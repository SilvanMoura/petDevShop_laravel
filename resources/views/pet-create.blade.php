@extends('pet-general')

@section('content')

    
    <section class="banner" style="background-image: url('images/banner_cat.jpg')">Todos os animais</section>
    <h2> disponíveis para adoção</h2>
    

    <div class="container">
        <form action="/createAdoption" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="picturePet">Imagem do animal:</label>
                <input type="file" id="picturePet" name="picturePet">
            </div>

            <div>
                <label for="genderPet">Gênero:</label>
                <input type="text" id="genderPet" name="genderPet" placeholder="Gênero do animal">
            </div>

            <div>
                <label for="breedPet">Raça:</label>
                <input type="text" id="breedPet" name="breedPet" placeholder="Raça do animal">
            </div>

            <div>
                <label for="colorPet">Cor:</label>
                <input type="text" id="colorPet" name="colorPet" placeholder="Cor(es) do animal">
            </div>

            <div>
                <label for="kindPet">Qual a espécie?</label>
                <select name="kindPet" id="kindPet">
                    <option value="dogs">Cachorro</option>
                    <option value="cats">Gato</option>
                    <option value="fishes">Peixe</option>
                </select>
            </div>

            <div>
                <label for="agePet">Idade:</label>
                <input type="number" id="agePet" name="agePet" placeholder="Idade do animal">

                <select name="ageTimePet" id="ageTimePet">
                    <option value="Mes(es)">Mes(es)</option>
                    <option value="Ano(s)">Ano(s)</option>
                </select>
            </div>
            
            <input type="submit" value="Criar adoção">
        </form>
    </div>
    

@endsection