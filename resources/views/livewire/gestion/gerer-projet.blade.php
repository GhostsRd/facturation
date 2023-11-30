<div>
    <div class="container   ">
        <h3  id="titre-prof">Page Projet</h3>
        <p id="text-prof">Page / Gerer Projet</p>   
    </div>  
   
    <div class="container  p-2" style="font-size: 0.75rem">

        {{-- menu icons --}}
        <div class="">
            
          
          
             
     
            
            <br>
            
        
            {{-- container table list --}}
          {{-- <div class="container">
                @if (session('status'))
                   <p class="alert alert-success form-control col-8 ">
                    
                                <svg class="svg-icon icon-20 rounded-4 text-success" xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                             
                    {{session('status')}}
                            
                    <button class="me-2 btn btn-outline-success btn-sm offset-9" > <a href="" class="nav-link">OK</a></button>
                </p>
                @endif
            </div>  --}}
    <div class="rounded-3  bg-white shadow-sm border-0">
        <table class="card-body shadow-sm rounded-3 border-0 table table-striped-white table-sm text-capitalize text-center"  >
            <div class="row p-2 ">
                <div class="col-lg-4 m-2">
                  <h5 class="fw-bold  " id="titre-prof"> Liste de projet</h5>
        
                </div>
                <div class="col-lg-4 m-1 col-8">
                  <input type="text" name="" id="" placeholder="Recherche ..."  id="form-hovered" class="form-control-sm border-0 w-100 rounded-5  shadow-sm">
                </div>
                <div class="col-2 col-lg-2 ">
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
                            <li class="p-2  rounded-2  text-center shadow-sm  text-bold " style="list-style: none">
                                
                                 <span class="rounded-1 p-2 fw-bold text-warning " wire:click="formajout">nouveau</span>
                                 <hr>
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
                          
                          <th class="fw-bold p-2 border-0" >N°</th>
                          <th class="fw-bold p-2 border-0" >titre</th>
                          <th class="fw-bold p-2 border-0" >Description</th>
                          <th class="fw-bold p-2 border-0" >Prerequis</th>
                          <th class="fw-bold p-2 border-0" >Contexte</th>
                          <th class="fw-bold p-2 border-0" >Commentaire</th>
                          <th class="fw-bold p-2 border-0" >Date de création</th>
                          <th class="fw-bold p-2 border-0" >Action</th>
                         
                       </tr>
                    </thead>
                    
                    <tbody>
                          
                    @foreach ($data as $dat )                           
                            <tr>
                                <td class="text-muted bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">{{$dat->id}}</td>
                                <td  class="text-dark bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400"><span class="bg-purple text-dark badge">{{$dat->titre}} </span></td>
                                <td  class="text-muted bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">{{$dat->description}}</td>
                                <td  class="text-muted bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">{{$dat->prerequis}}</td>
                                <td  class="text-muted bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">{{$dat->contexte}}</td>
                                <td  class="text-muted bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">{{$dat->commentaire}}</td>
                                <td  class="text-muted bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">{{$dat->date_de_creation}}</td>
                               
                                  <td class="bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">
                                        <a href="{{url('/gererClient',$dat->id)}}">
                                            <svg class="hover  icon-32 rounded-1" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>                                </svg>                            
                                        </a>
                                        
                    
                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                 
                 </table>
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
                                  <span class="dark-wizard ">client</span>
                                </div>
                          </a>
                      </li>
                      
                  </ul>
                      <form wire:submit.prevent="create">
                          @csrf
                          
                          <div class="coloumn">
                            <div class="row">
                              <div class="col-lg-5">
                                 
                                
                                <label for="projet" class="text-muted m-2">{{_('Nom du client *')}}</label>
                                <input type="text" id="nom" wire:model='nom' class="card-title form-control m-2" placeholder="Nom du client">   
            
                                <label for="prerequis"  class="text-muted m-2">{{_('Prénom du client *')}}</label>             
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

    

   
</div>
