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
    public  $recherche;

    // form ajout
    public $form = "";
    // form modifier data

    public $form1 = "";
    public $id_client;
    // 
    public $checkData = [];
    public $disabled = "disabled";
    public $total;


    public function deleteSelected()
    {

        Clients::query()
            ->where('id', $this->checkData)
            ->delete();

        $this->checkData = [];

        return redirect("/client")
            ->with('notif', "Effacé avec succés");
    }
    public function formajout()
    {
        $this->form = "active";
    }
    public function formModifier($id, $nom, $prenom, $contact)
    {

        // $this->dataForm = Clients::where('id',$dat)->get();
        $this->id_client = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->contact = $contact;

        // dd($this->dataForm);
        $this->form1 = "active";
    }
    public function delete($val)
    {
        Clients::where('id', $val)->delete();
        return redirect("/client")->with('notif', "Effacé avec succes");
    }
    public function create()
    {
        Clients::create([
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "contact" => $this->contact,
        ]);
        return redirect("/client")->with('notif', "Insertion avec succes");
    }
    public function update(Request $request)
    {
        //   dd($request);
        Clients::where('id', $request->id)->update([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "contact" => $request->contact,
        ]);
        return redirect("/client")->with('notif', "Modification avec succes");
        //
    }
    public function mount()
    {
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
        if (count($this->checkData) > 0) {
            $this->disabled = "";
            $this->total = count($this->checkData);
        } else {
            $this->disabled = "disabled";
        }
        return view('livewire.client.client', [
            "clients" => Clients::where("nom", 'like', '%' . $this->recherche . '%')
                ->OrWhere("prenom", 'like', '%' . $this->recherche . '%')
                ->paginate(9),

        ]);
    }
}
