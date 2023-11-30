<?php

namespace App\Http\Livewire\Planning;

use App\Models\Avoirs;
use App\Models\Planifications;
use Livewire\Component;


class GererPlanning extends Component
{
    public $checkData = [];
    public $disabled = "disabled";
    public $total ;

    public function deleteSelected(){
     
       
        Avoirs::query()
        ->where('id_planification',$this->checkData)
        ->delete();

        Planifications::query()
            ->where('id',$this->checkData)
            ->delete();

        $this->checkData = [];
        return redirect('/planification/gerer');
    }
  
    public function remove($val){
        Avoirs::where('id_planification',$val)->delete();
        Planifications::where('id',$val)->delete();
        return redirect('/planification/gerer');
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
        
        return view('livewire.planning.gerer-planning',[
            "planifications" => Planifications::orderby('id')->get(),
        ]);
    }
}
