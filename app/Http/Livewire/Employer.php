<?php

namespace App\Http\Livewire;

use App\Models\Employers;
use Livewire\Component;

class Employer extends Component
{
    // extract data
    public $data = [];
    // donne formulaire
    public  $nom;
    public  $prenom;
    public  $contact;
    // form ajout
    public $form = "";

    public function formajout(){
        $this->form = "active";
    }
    
    public function create(){
        Employers::create([
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "contact" => $this->contact,
        ]);
        return redirect("/employer")->with('status',"Insertion Ok");
    }
    public function mount(){
        $this->nom;
        $this->form;
        $this->data;
    }
    public function render()
    {
        return view('livewire.employer',[
            $this->data = Employers::all(),
        ]);
    }
}
