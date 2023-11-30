<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Clients;

class Client extends Component
{
    // extract data
    public $data = [];
    // donne formulaire
    public  $nom;
    public  $prenom;
    public  $contact;
    // form ajout
    public $form = "";
    // form modifier data
   
    public $form1 = "";
    public $id_client;



    public function formajout(){
        $this->form = "active";
    }
    public function formModifier($id,$nom,$prenom,$contact) {
      
        // $this->dataForm = Clients::where('id',$dat)->get();
        $this->id_client = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->contact = $contact;

        // dd($this->dataForm);
        $this->form1 = "active";
       
    }
    public function delete($val){
        Clients::where('id',$val)->delete();
        return redirect("/client")->with('status',"Effacé avec succes");
    }
    public function create(){
        Clients::create([
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "contact" => $this->contact,
        ]);
        return redirect("/client")->with('status',"Insertion avec succes");
    }
    public function update(Request $request){
        //   dd($request);
        Clients::where('id',$request->id)->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "contact" => $request->contact,
        ]);
        return redirect("/client")->with('status',"Modification avec succes");
        //
    }
    public function mount(){
        $this->id_client;
        $this->nom;
        $this->prenom;
        $this->contact;

        $this->form;
        $this->data;
        $this->form1;
        // $this->dataForm;
        


    }
    public function render()
    {
        return view('livewire.client.client',[
            $this->data = Clients::all(),
        
        ]);
    }
}
