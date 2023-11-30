<?php

namespace App\Http\Livewire\Section;

use App\Models\Avoirs;
use App\Models\Devis;
use App\Models\Factures;
use App\Models\Sections;
use App\Models\items;
use App\Models\Planifications;
use App\Models\Profils;
use App\Models\projets;
use App\Models\Realisers;

use Illuminate\Http\Request;
use Livewire\Component;


class Test extends Component
{
  // form variable
  public $id_projet;
  public $designation;
  public $commentaire;
  public $temps_passe;
  public $disabled = "";
  public $date;
  //   ites
  public $it;
  public $check;

  // creation items vide
  public $devis;
  public $tests;

  public $formAnalyse = "";
  public $formDev = "";
  public $formTest = "";

  // projet data
  public $projets = [];
  public $items = [];
  //   pour la section develloppemnt
  public $devs = [];
  //   pour la section test4
  public $secTests = [];


  public function section($value)
  {
    $contraintes = Sections::where("designation", $value)->get();
    $res = null;
    foreach ($contraintes as $con) {
      $res = $con->id;
    }
    if ($res != null) {
      Sections::where("designation", $value)->update([
        'id_projet' => $this->it,
      ]);
      return redirect("/chiffrage");
    } else {
      Sections::create([
        "designation" => $value,
        "id_projet" => $this->it,
      ]);
      return redirect("/chiffrage");
    }
  }
  public function removeSection($val)
  {
    Sections::where("id", $val)->update([
      'id_projet' => null,
    ]);



    $ids = Items::where('id_section', $val)->where('id_projet', $this->it)->get();
    foreach ($ids as $id) {
      Realisers::where('id_items', $id->id)->delete();
    }
    Items::where('id_section', $val)->where('id_projet', $this->it)->delete();
    return redirect("/chiffrage");
  }

  public function addTest($val)
  {
    $this->devis = Devis::max('created_at');
    $tests = Devis::where('created_at', $this->devis)->get();
    foreach ($tests as $test) {
      $id_devis = $test->id;
      // $id_planning = $test->choix_planification;
    }
    $facts = Factures::where("id_devis", $id_devis)->get();
    foreach ($facts as $fact) {
      $id_fact = $fact->id;
    }
    Items::create([
      'id_projet' => $this->it,
      'id_section' => $val,
      'id_facture' => $id_fact,
    ]);
    $id_items = Items::where('id_projet', $this->it)->get();

    $id = null;
    foreach ($id_items as $item) {
      $id = $item->id;
    }
  
    return redirect("/chiffrage");
  }


  public function updateitems(Request $request)
  {
    Items::where('id', $request->id)->update([
      "designation" => $request->designation,
      //   "commentaire" => $request->temps_passe,
      "temps_passe" => $request->temps_passe,
    ]);

    // ajouter dans la page profile
    if ($request->profile != "") {
      // facture
      $this->devis = Devis::max('created_at');
      $tests = Devis::where('created_at', $this->devis)->get();
      foreach ($tests as $test) {
        $id_devis = $test->id;
      }
      $facts = Factures::where("id_devis", $id_devis)->get();
      foreach ($facts as $fact) {
        $id_fact = $fact->id;
      }
      // dd($id_fact);
      // fin facture
      
      // tarif get
      $tarifs = Profils::where('id', $request->profile)->get();
      foreach ($tarifs as $tarif) {
        $prix = $tarif->tarif;
      }

      // calcule tari
      $prix_finale = $request->temps_passe * $prix;
      
      // ajout realiser

      $res = Realisers::where("id_items", $request->id)->get();
      $variable = "";
      $id_facture_exist = "";
      foreach ($res as $re) {
        $variable = $re->id;
        $id_facture_exist = $re->id_facture;
      }


      if ($variable != "" && $id_facture_exist == $id_fact ) {

        
        Realisers::where("id_items", $request->id)->update([
          "id_profile" => $request->profile,
          "id_facture" => $id_fact,
          "tarif" => $prix_finale,


        ]);
      } else {
        Realisers::create([
          "id_items" => $request->id,
          "id_profile" => $request->profile,
          "id_facture" => $id_fact,
          "tarif" => $prix_finale,
        ]);
      }
    }
    // modification du valeur dans le planning du projet
    $devs = Devis::max('created_at');
    $tests = Devis::where('created_at', $devs)->get();
    foreach ($tests as $test) {
      $id_devis = $test->id;
      $id_planning = $test->choix_planification;
    }
    
   $id_fin = intval($id_planning);
    $items_data = Avoirs::where('id_items',$request->id)->get();
      $id_av = "";
      $id_plan = "";
    foreach($items_data as $item){
      $id_av =$item->id;
      $id_plan = $item->id_planification;
    }
    // dd($id_plan);


    if($id_av != "" && $id_plan == $id_fin ){
      // dd($id_pla);
      Avoirs::where('id_items', $request->id)->where('id_planification',$id_fin)->update([
        'id_planification' => $id_fin,
        "date_debut" => 0,
        'duree' => $request->temps_passe,
      ]);
    }else{
      // $mydatas = Planifications::max("created_at");
      // $myids = Planifications::where("created_at",mydatas)->get();g

    
      // foreach($myids as $myid){
      //   $resu = $myid->id;
      // }
      // dd(gettype($id_fin));


      Avoirs::create([
        'id_items' => $request->id,
        "id_planification" => $id_fin,
        'id_projet' => $this->it,
        "date_debut" => 0,
        'duree' => $request->temps_passe,
      ]);
    }
   

    return redirect('/chiffrage')->with("notif", "Item ajouté avec succés");
  }

  public function removeitem($id)
  {
    $vals = Items::where('id', $id)->get();
    foreach ($vals as $val) {
      $id_pro  = $val->id_projet;
    }
    $res = Devis::where('id_projet',$id_pro)->count('id');
    // dd($res);

    if($res == 1){  
      Items::where('id', $id)->delete();
      Realisers::where('id_items', $id)->delete();
      return redirect('/chiffrage')->with("notif", "Supression avec succéss");
    }else{
      return redirect('/chiffrage')->with("notif", "Vous ne pouvez pas faire une supression, l'item est associé à un autre devi");
    }

  }

  public function verificationPlanning()
  {

    $devis = Devis::max('created_at');
    $tests = Devis::where('created_at', $devis)->get();

    foreach ($tests as $te) {
      $id_courant = $te->id;
      $verify = $te->choix_planification ;
    }
    $facts = Factures::where('id_devis',$id_courant)->get();

    foreach($facts as $fact){
      $re = $fact->id;
    }
    $montant = Realisers::where('id_facture',$re)->sum("tarif");
    // dd($montant);
    
    Factures::where('id_devis',$id_courant)->update([
      'montant' => $montant,
    ]);

    


  
    //   dd($te->choix_planification);
    if (is_null($verify)) {
      return redirect("/facture");
    } else {
      return redirect("/planification");
    }
  }

  public function create()
  {
    if ($this->designation  != "" and $this->temps_passe > 0) {
      $this->check = "checked";
      $this->disabled = "disabled";
    }
  }

  public function mount()
  {
    $this->formAnalyse;
    $this->formTest;
    $this->formDev;
    $this->projets;
    $this->items;
    $this->it;
    $this->check;
    $this->disabled;
  }


  public function render()
  {
    $this->devis = Devis::max('created_at');
    $this->tests = Devis::where('created_at', $this->devis)->get();

    foreach ($this->tests as $te) {
      $this->it = $te->id_projet;
    }
    return view('livewire..section.test', [
      $this->projets = Projets::all(),
      "profiles" => Profils::all(),
     
      $this->secTests = Items::where('id_projet', $this->it)->get(),

      //  section visualisation
    
      "sections" => Sections::where("id_projet", $this->it)->orderby("designation")->get(),
      "sectionalls" => Sections::orderby('id')->get(),


    ]);
  }
}
