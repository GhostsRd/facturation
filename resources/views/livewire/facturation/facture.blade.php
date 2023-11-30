<div>
   <div class="container   ">
      <h3  id="titre-prof"> Facturation</h3>
      <p id="text-prof">Page  / Facture</p>   
  </div>  
      <div class="container col-lg-2 offset-lg-9">
         <a href="javascript:window.print()">
            
            <button class="btn  btn-outline-primary rounded-3 border mb-2" style="position:sticky;">
               <svg class="icon-32" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M2 7.916V16.084C2 19.623 4.276 22 7.665 22H16.335C19.724 22 22 19.623 22 16.084V7.916C22 4.378 19.723 2 16.334 2H7.665C4.276 2 2 4.378 2 7.916Z" fill="currentColor"></path>                                <path d="M7.72033 12.8555L11.4683 16.6205C11.7503 16.9035 12.2493 16.9035 12.5323 16.6205L16.2803 12.8555C16.5723 12.5615 16.5713 12.0865 16.2773 11.7945C15.9833 11.5025 15.5093 11.5025 15.2163 11.7965L12.7493 14.2735V7.91846C12.7493 7.50346 12.4133 7.16846 11.9993 7.16846C11.5853 7.16846 11.2493 7.50346 11.2493 7.91846V14.2735L8.78333 11.7965C8.63633 11.6495 8.44433 11.5765 8.25133 11.5765C8.06033 11.5765 7.86833 11.6495 7.72233 11.7945C7.42933 12.0865 7.42833 12.5615 7.72033 12.8555Z" fill="currentColor"></path>                                </svg>                            
               Télècharger</button>
         </a> 
      </div>
  <div class="container  bg-white p-2 rounded-3 ">
   <div class="row" >
      <div class="col-lg-2 offset-lg-1 offset-1">
         <h5 class="fw-bold p-2 text-info " style="font-family:'Trebuchet MS', sans-serif;font-size:1.2rem">DEVIS</h5>

      </div>
      
   </div>
   <div class="row  rounded-3  p-4 offset-lg-1 offset-1 col-10 col-lg-10 " style="background: rgba(227, 243, 243, 0.371);font-size:0.8rem">
      <div class="col-lg-6 text-capitalize   ">
         @foreach ($alls as $devis )
         <label  >N° Devis :</label> <span class="text-primary fw-bold" style="font-size: 1.1rem"> {{$devis->id}}</span><br>
         <label class="mt-2">Chef de projet  :</label> 
            
               @foreach ($projets as $projet )
               @if ($projet->id == $devis->id_projet)
                  @foreach ($chefs as $chef)
                  @if ($chef->id == $projet->id_employer)
                 <span class="text-primary"> {{$chef->nom}}</span>
                  @endif
                  @endforeach
               @endif
               @endforeach
         
          <br>
         <label class="mt-2">Client  :</label> 
         @foreach ($clients as $client )
            @if($client->id == $devis->id_client)
             <span class="text-primary">  {{$client->nom}} {{$client->prenom}}</span>
            @endif
         @endforeach   
         <br>
         
          {{-- <label class="fw-bold" > :</label> <br> --}}
 
          <label class=" text-capitalize mt-2" >Projet : </label> 
          @foreach ($projets as $projet )
             @if ($projet->id == $devis->id_projet)
            <span class="text-primary fw-bold text-capitalize">
             {{$projet->titre}}
            </span>
             <br>
             
      

      </div>

      {{-- <div class="col-lg-4 "> --}}
       
        
       <div class="col-lg-6">
         <label class="" >Objet :</label> 
         <span class="text-primary fw-bold text-uppercase ">    {{$devis->objet_chiffrage}}</span>
           <br>
         
          
         <label class="" >Date de création :</label> 
         <span class="fw-bold text-primary">{{$devis->created_at}}</span>
         <br>
         <label class="text-capitalize mt-2" >Contexte : </label>
          <span class="fw-bold text-primary text-capitalize">{{$projet->contexte}}</span> <br>

         {{-- <label class="fw-bold" >Client :</label> <br> --}}
         @endif
         @endforeach  
         @endforeach

       </div>
      

   </div>









   <div class="container  mt-4 rounded-3 text-capitalize" style="font-size: 0.7rem">
      
      <div class="col-lg-10   card border-0 shadow-none bg-white">
         <div class="card-body">
            <div class="card-title">
            
               <p for="" class="fw-bold offset-lg-1 " style="font-size: 0.9rem ">Apperçu du devis</p>
            </div>

            <table class=" border offset-lg-1 table table-striped-white table-sm " >
               <thead class="">
                  <tr class="border">
                     
                     <th  scope="col" class=" border-0 p-2">Profil</th>
                     <th scope="col" class=" border-0" >Item</th>
                     <th scope="col" class=" border-0" >jour</th>
                     <th scope="col" class=" border-0">Tarif ( Ar/ j )</th>
                     <th scope="col" class=" border-0" >Montant (Ar)</th>
                  
                  </tr>
               </thead>
               <tbody>
                 
                  @foreach ($taches as $tache)
               
                  <tr>
                    
   
                     <td class="text-capitalize border-0 bg-white fw-bold">
                        @foreach ($profiles as $profile)
                            @if ($profile->id == $tache->id_profile)
                               {{$profile->profile}}
                            @endif
                        @endforeach
                     
                     </td>
                     <td class="text-capitalize border-0 bg-white fw-bold">
                     @foreach ($secTests as $sec)
                        @if ($tache->id_items == $sec->id)
                          {{$sec->designation}}
                        @endif
                    @endforeach
                     </td>
                     <td class="border-0 fw-bold bg-white">
                        @foreach ($profiles as $profile)
                        @if ($profile->id == $tache->id_profile)
                           {{$tache->tarif / $profile->tarif}}
                        @endif
                    @endforeach
   
                     </td>
                     <td class="border-0 fw-bold bg-white">
                        @foreach ($profiles as $profile)
                        @if ($profile->id == $tache->id_profile)
                           {{$profile->tarif}}
                        @endif
                    @endforeach
                     </td>
                     <td class="border-0 fw-bold bg-white">
                        @foreach ($profiles as $profile)
                            @if ($profile->id == $tache->id_profile)
                               {{$tache->tarif}}
                            @endif
                        @endforeach
                     </td>
         
                  </tr>
            @endforeach
          
               </tbody>
              
              <tr class="border ">
               <td class="bg-white border-0" ></td>
               <td class="bg-white border-0" ></td>
               <td class="bg-white border-0" ></td>
               <td class="bg-white border-0 fw-bold p-2" >Total</td>
               <td class="bg-white text-dark bg-success border-0 rounded-2 fw-bold p-2" > Ar 
                  @foreach ($montant_total as $prix )
                     {{$prix->montant}}
                  @endforeach
                  </td>
              </tr>
        
            </table>
         </div>

</div>

        

</div>

  </div>

{{-- affichage des items --}}

  <div class="container bg-white mt-2 rounded-2 p-2">
   <h5 class="offset-1 fw-bold text-lg text-info">List d'item</h5>
   <br>
   <div class="pl-2">
      <table class=" border offset-1 offset-lg-1 table table-sm table-striped-white table-sm w-75"  style="font-size: 0.7rem">
         <thead>
          <th>Désignation</th>
          <th>Duration</th>
          <th>profil</th>
         </thead>
         <tbody>
          @foreach ($secTests as $item)
              <tr>
                <td class="bg-white border-0 p-2 fw-bold">{{$item->designation}}</td>
                <td class="bg-white border-0 p-2 fw-bold">
                @if ($item->temps_passe>1)
                    {{$item->temps_passe}} jours
                @else
                    {{$item->temps_passe}} jour
                @endif
             </td>
             @foreach ($taches as $tache)
                   @if ($item->id == $tache->id_items)
                     @foreach ($profiles as $prof )
                     @if ($prof->id == $tache->id_profile)
                      
                         <td class="bg-white border-0 p-2 fw-bold"   >
                            {{$prof->profile }}
                         </td>
                     @endif
                     @endforeach
                  @endif
             @endforeach
                
            </tr>
             @endforeach
         </tbody>
       </table>
   </div>
   

  </div>

  {{-- planning afficahege --}}

@foreach ($alls as $all)
   @if ($all->choix_planification != "")
   <div class="container bg-white mt-2 rounded-2 p-2  ">
      <h5 class="fw-bold text-lg text-info">Planning</h5>
      <br>
      <div class="" style="font-size:0.7rem">
   
         <div class="col-lg-4 p-2 me-2 border rounded-3 mb-2">
            @foreach ($planns as $plan)
            <b>Déscription</b> {{$plan->description}} <br>
            <b>Date debut : </b>{{ $plan->date_debut}} <br>
                
            <b>Delai de mise en Oeuvre :</b> {{ $plan->delai}} jours
            <br>
            <b> Date Fin : </b> {{ $plan->date_fin}}
            @endforeach
        </div>
   
         <table style="background: white" id="user-list-table" class="table table-responsive text-sm  text-capitalize border rounded-1  display p-1 "  data-bs-toggle="data-table">
                             
   
            @foreach ( $sections as $sec )  
            @foreach ( $secTests as $item )
            @foreach ($avoirs as $it )
                
         
   
                @if ($sec->id == $item->id_section)
                @if ($it->id_items == $item->id)
                <tr>          
                  <th rowspan="" class="border" style="background:rgba(91, 125, 137, 0.293)">{{$item->designation}} : {{$it->date_debut + 1}} au {{$it->date_debut + $it->duree }} jours </th>
       
          
                       @if ($it->date_debut > 0)
                           <td class="border-0 bg-white"></td>
                       <td  colspan="{{$it->date_debut}}" class="border-0 bg-white"></td>
                       <td   colspan="{{$it->duree}}" class=" border-0 bg-white" style="font-size: 0.8rem;height:0.7px;padding-left:0;"  >
                         <div  class="progress-bar text-center border-0 fw-bold text-white  rounded-end-4 shadow-sm  {{$sec->couleur}}" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;height:100%; transition: width 2s ease 0s;"></div>
                     </td>

                       @else
                      <td  class="border-0 bg-white"></td>
                      <td   colspan="{{$it->duree}}" class=" border-0 bg-white " style="font-size: 0.8rem;padding-left:0;height:0.7px"  >
                         <div class=" pl-0 progress-bar text-center border-0 fw-bold text-white  rounded-end-4 shadow-sm  {{$sec->couleur}}" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;height:100%; transition: width 2s ease 0s;"></div>
                     </td>
                       @endif
             </tr>   
   
                @endif
                @endif
                @endforeach
                @endforeach
            @endforeach
        
          
                <tr>
                    {{-- <td class="border-0 bg-white"></td> --}}
                </tr>
                <tr>
                
                    
                    <th class="border bg-dark text-white">Etape</th>
                    
                    
                    <td class="border-0 bg-white"></td>
                    @for ($i = 1;$i<$total_colonne+1;$i++)
                        <td class=" bg-white border-top-0 " style="box-shadow:0 0 1px black;padding:10px;font-size:0.6rem">J{{$i}}</td>
                    @endfor
                    
                    </tr>
                   
                
      
        </table>
   
      </div>
   </div>
   @endif
@endforeach







</div>
