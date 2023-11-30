<?php

namespace App\Http\Livewire\Gestion;

use App\Models\Projets;
use Livewire\Component;

class GererProjet extends Component
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

    public function mount(){
      $this->data;
       
    }
    public function render()
    {
        return view('livewire.gestion.gerer-projet',[
           $this->data = Projets::all(),
        ]);
    }
}
