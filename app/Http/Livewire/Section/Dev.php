<?php

namespace App\Http\Livewire\Section;

use App\Models\Devis;
use App\Models\Items;
use App\Models\Projets;
use App\Models\Sections;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dev extends Component
{
      public $recherche;
    
   
     public function create(){

   
        Items::create([
        //  "id_projet" => $res ,
        //  "id_section" => 2,
        //  "designation" =>   $this->designation,
        //  "commentaire" => $this->commentaire,
        //  "temps_passe" => $this->temps_passe,
        ]);
        return redirect('/sectionDev');
        
     }

     public function remove($rem){
        Items::where('id',$rem)->delete();
        return redirect('/items');
     }
     public function mount(){
         
     }
    
     public function render()
     {
        
      

         return view('livewire..section.dev',[
             "items" => Items::orderby('id')->where('designation','like','%'.$this->recherche.'%')->paginate(9),
             "sections" => Sections::all(),
             
          

            //  $this->jours = Items::where('id_projet',$this->projet)->get('temps_passe'),
            //  $this->items = Items::where('id_section',1)->get(),
         ]);
     }
}
