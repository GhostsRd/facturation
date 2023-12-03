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
    //  
    public $checkData = [];
    public $disabled = "disabled";
    public $total;
    public $recherche;
 
     public function deleteSelected(){
     
        Projets::query()
            ->where('id',$this->checkData)
            ->delete();

        $this->checkData = [];

        return redirect("/gererProjet")
        ->with('notif',"Effacé avec succés");
    }
     public function formajout(){
         $this->form = "active";
     }

    public function mount(){
     
       
    }
    public function render()
    {
        if(count($this->checkData) > 0){
            $this->disabled = "";
            $this->total = count($this->checkData);
        }else
        {
             $this->disabled = "disabled";
        }
        return view('livewire.gestion.gerer-projet',[
         "projets" => Projets:: where("titre",'like','%'.$this->recherche.'%')
           ->OrWhere("description",'like','%'.$this->recherche.'%')
           ->OrWhere("contexte",'like','%'.$this->recherche.'%')
           ->paginate(8),
        ]);
    }
}
