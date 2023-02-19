<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Adoption;
//use App\Models\User;

class PetsController extends Controller
{
    public function index(){
        $pets = Adoption::all();
    
        return view('pet-home',['pets' => $pets]);
    }
    
    public function dogs(){
        
    }

    public function cats(){
        
    }

    public function fishes(){
        
    }

    public function search(){
        
    }

    public function newAdoption(){
        return view('pet-create');
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

    /* public function viewAdoption($id) {

        $pet = Adoption::findOrFail($id);

        
        $petOwner = User::where('id', $pet->user_id)->first()->toArray();
        
    } */
    public function viewAdoption($id){
        return view('pet-view');
    }
}
