<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adoption;
use App\Models\User;

class PetsController extends Controller
{
    public function index(){
        $pets = Adoption::all();

        $template['title'] = "animais";
        $template['background'] = "allanimals.jpg";
        (auth()->user()) ? $template['userAuth'] = auth()->user()->id : '';
    
        return view('pet-home',['pets' => $pets, 'template' => $template]);
    }
    
    public function dogs(){
        $pets = adoption::where([
            ['kind', 'dogs']
        ])->get();

        $template['title'] = "cachorros";
        $template['background'] = "banner_dog.jpg";
        (auth()->user()) ? $template['userAuth'] = auth()->user()->id : '';

        return view('pet-home',['pets' => $pets, 'template' => $template]); 
    }

    public function cats(){
        
        $pets = adoption::where([
            ['kind', 'cats']
        ])->get();

        $template['title'] = "gatos";
        $template['background'] = "banner_cat.jpg";
        (auth()->user()) ? $template['userAuth'] = auth()->user()->id : '';

        return view('pet-home',['pets' => $pets, 'template' => $template]);
    }

    public function fishes(){
        $pets = adoption::where([
            ['kind', 'fishes']
        ])->get();

        $template['title'] = "peixes";
        $template['background'] = "banner_fish.jpg";
        (auth()->user()) ? $template['userAuth'] = auth()->user()->id : '';

        return view('pet-home',['pets' => $pets, 'template' => $template]); 
    }

    public function search(){
        $search = request('search');

        $pets = adoption::where([
            ['breed', 'like', '%'.$search.'%']
        ])->get();

        return view('pet-home',['pets' => $pets]); 
    }

    public function newAdoption(){
        return view('pet-create');
    }

    public function viewAdoption($id){
        $pet = Adoption::findOrFail($id);
        
        $petOwner = User::where('id', $pet->user_id)->first()->toArray();

        return view('pet-view',['pet' => $pet, 'petOwner' => $petOwner]);
    }

    public function createAdoption(Request $request){

        $adoption = new Adoption;

        // Image Upload
        if($request->hasFile('picturePet') && $request->file('picturePet')->isValid()) {

            $requestImage = $request->picturePet;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);

            $adoption->picture = $imageName;

        }

        $adoption->gender = $request->genderPet;
        $adoption->color = $request->colorPet;
        $adoption->breed = $request->breedPet;
        $adoption->kind = $request->kindPet;
        $adoption->age = ($request->agePet .' '. $request->ageTimePet);

        $user = auth()->user();
        $adoption->user_id = $user->id;

        $adoption->save();

        return redirect('/');

    }

    public function formUpdateAdoption($id){
        $pet = Adoption::findOrFail($id);
        
        $petOwner = User::where('id', $pet->user_id)->first()->toArray();

        return view('pet-update',['pet' => $pet, 'petOwner' => $petOwner]);
    }

    public function updateAdoption($id, Request $request){
        $adoption = new Adoption;

        // Image Upload
        if($request->hasFile('picturePet') && $request->file('picturePet')->isValid()) {

            $requestImage = $request->picturePet;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('images'), $imageName);

            $adoption->picture = $imageName;

        }

        $adoption->gender = $request->genderPet;
        $adoption->color = $request->colorPet;
        $adoption->breed = $request->breedPet;
        $adoption->kind = $request->kindPet;
        $adoption->age = ($request->agePet .' '. $request->ageTimePet);

        $user = auth()->user();
        $adoption->user_id = $user->id;

        $adoption->save();

        return redirect('/');
    }

    public function deleteAdoption($id){
        Adoption::findOrFail($id)->delete();

        return redirect('/');
    }

    public function myAdoptions(){
        $user = auth()->user();

        $pets = adoption::where([
            ['user_id', $user->id]
        ])->get();
        
        return view('pet-dashboard',['pets' => $pets]);
    }
    
}
