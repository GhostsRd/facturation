<div>
 
    <div class="container   ">
        <h4  id="titre-prof">Page Employer</h4>
        <p id="text-prof">Paramétrage  / Employer</p>   
    </div>  
  
    <div class="container  rounded-2 p-4" style="font-size: 0.75rem">
    
      <div class=" border-0 bg-white rounded-3  shadow-sm">
        
        <br>
          <table class="card-body table  border-0 shadow-sm  text-center">
            <div class="row p-1">
              <div class="col-lg-5 ">
                <h5 class="fw-bold " id="titre-prof">Liste d'employer</h5>
      
              </div>
              <div class="col-lg-5 col-8">
                <input type="text" name="" id="" placeholder="Recherche ..." class="form-hovered form-control-sm border-0 w-100  rounded-5  shadow-sm">
              </div>
              <div class="col-2 col-lg-2">
                <ul>
        
                  <li style="list-style: none;" >
                      <a class="nav-link collapsed " data-bs-target="#menu-nav" data-bs-toggle="collapse" href="#">
                       
                          <i class="bi bi-chevron-down ms-auto">
      
                              <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                  <path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                              </svg>
                          </i>
                      </a>
                      <ul id="menu-nav"  class=" collapse ">
                          <li class="p-2   rounded-2  text-center shadow-sm  text-bold " style="list-style: none">
                              
                               <span class="rounded-1 p-2 fw-bold text-warning " wire:click="formajout">nouveau</span>
                               <hr class="text-white fw-bold">
                               <span class="rounded-5 p-2 fw-bold text-warning " wire:click="active2">Modifier</span>
                               <hr>
                        
                              
                          </li>
                              
                      </ul>
                  </li>
              </ul>
              </div>
            </div>
              <thead>
                <tr>
                  <th class="p-2 fw-bold border-0" scope="col">N° employer</th>
                  <th class="p-2 fw-bold border-0" scope="col">Nom</th>
                  <th class="p-2 fw-bold border-0" scope="col">Prenom</th>
                  <th class="p-2 fw-bold border-0" scope="col">Contact</th>
                  <th class="p-2 fw-bold border-0" scope="col">action</th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $dat)
                <tr>
                  
                  <td class="bg-white p-2 border-0"><span class="badge bg-info">{{$dat->id}}</span></td>
                  <td class="bg-white p-2 border-0">{{$dat->nom}}</td>
                  <td class="bg-white p-2 border-0">{{$dat->prenom}}</td>
                  <td class="bg-white p-2 border-0">{{$dat->contact}}</td>
                  <td class="bg-white p-2 border-0"><a href="url('/employer/delete',{{$dat->id}})">delete</a></td>
                  
                </tr>
                @endforeach
              </tbody>
            </table>
            
              
      </div>
    </div>
    <div id="form-module1" class="form {{$form}}" method="POST">
    
           
              
      <div>
        <div class="col-12 offset-1">
          <h3 class="fw-bold mt-2 title-form" >Ajouter un client</h3><br>
  
          <ul id="top-tab-list" class="p-0 row list-inline">
         
            <li id="personnel" class="mb-2 col-lg-3 col-md-6  ">
                <a href="#nom"  class="nav-link">
                    <div class="iq-icon me-3  fw-bold">
                        <svg class="svg-icon icon-20 rounded-4 text-primary " xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="dark-wizard ">Employer</span>
                      </div>
                </a>
            </li>
            
        </ul>
            <form wire:submit.prevent="create">
                @csrf
                
                <div class="coloumn">
                  <div class="row">
                    <div class="col-lg-5">
                       
                      
                      <label for="projet" class="text-muted m-2">{{_("Nom de l'employer *")}}</label>
                      <input type="text" id="nom" wire:model='nom' class="card-title form-control m-2" placeholder="Nom du client">   
  
                      <label for="prerequis"  class="text-muted m-2">{{_('Prénom  *')}}</label>             
                      <input type="text" wire:model="prenom"  class="card-title form-control m-2" placeholder="Prénom du client" required>        
  
                  </div>
                  <div class="col-lg-5" >
  
                      <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                      <input type="text" wire:model="contact" id="contact"  class="card-title form-control m-2" placeholder="Contact du client" required>
                     
                      
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn  btn-primary offset-9 mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
                
                
              </form>
          </div>
      </div>
      
  </div>
</div>
