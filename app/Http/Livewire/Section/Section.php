<?php

namespace App\Http\Livewire\Section;

use App\Models\Sections;
use Livewire\Component;

class Section extends Component
{
    public $recherche;
    public $form = "";
    public $designation;
    public $semaine;
    public $commentaire;


    public function deleteSection($id){
        Sections::where('id',$id)->delete();
        return redirect("/parametre/section")->with("status","Effacé avec succéss");
    }
    public function formajout(){
        $this->form = "active";
    }
    public function create(){
        Sections::create([
            "designation" => $this->designation,
            "semaine" => $this->semaine,
            "commentaire" => $this->commentaire,

        ]);
        $messages = [
            'Ajout avec success',
            
        ];


        $this->dispatchBrowserEvent(
            'notify', 
            $messages[array_rand($messages)]
        );
       
        return redirect("/parametre/section")->with("status","Enregistrer avec succéss");
    }
    public function mount(){
        $this->form;
        $this->designation;
        $this->commentaire;


    }
    public function render()
    {
        return view('livewire.section.section',[
            "sections" => Sections::orderBy('id')->where("designation",'like','%'.$this->recherche.'%')->get(),
        ]);
    }
}
