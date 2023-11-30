<div>
            <div class="container   ">
                <h3  id="titre-prof">Séction</h3>
                <p id="text-prof">Paramétrage  / section </p>   
            </div>  
           
            <div class="container  " style="font-size: 0.75rem">

                {{-- menu icons --}}
                <div class="bg-white shadow-sm rounded-1">
                    
                 
                    <table id="user-list-table" class="card-body table  bg-white  border-0 shadow-sm rounded-3 border  display p-2 " role="grid" data-bs-toggle="data-table">
                            <div class="row p-1">
                                <div class="col-lg-2">
                                  <h5 class="fw-bold m-2 " id="titre-prof">Liste de séction</h5>
                        
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-8">
                                  <input type="text" name="" id="" placeholder="Recherche ..." wire:model.500ms='recherche'  id="form-hovered" class="form-control-sm w-100 border-0  rounded-5  shadow-sm">
                                </div>
                                <div class="col-1 col-lg-1">
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
                             
                         
                            
                        
                            {{-- container table list --}}
                          <div class="container">
                                @if (session('status'))
                                   <p class="alert alert-success form-control col-8 ">
                                    
                                                <svg class="svg-icon icon-20 rounded-4 text-success" xmlns="http://www.w3.org/2000/svg" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                             
                                    {{session('status')}}
                                            
                                    <button class="me-2 btn btn-outline-success btn-sm offset-9" > <a href="" class="nav-link">OK</a></button>
                                </p>
                                @endif
                            </div> 
                            <div>
                                  
                            <thead>
                               <tr>
                                  
                                  <th class="p-2 fw-bold border-0">Id client</th>
                                  <th class="p-2 fw-bold border-0">Désignation</th>
                                  {{-- <th>semaine</th> --}}
                                  <th class="p-2 fw-bold border-0">Commentaire</th>
                                  <th class="p-2 fw-bold border-0">Supprimer</th>
                                 
                               </tr>
                            </thead>
                            
                            <tbody>
                                  
                            @foreach ($sections as $dat )                           
                                    <tr>
                                        <td class="bg-white p-2 border-0">{{$dat->id}}</td>
                                        <td class="bg-white p-2 border-0 fw-bold">{{$dat->designation}}</td>
                                     
                                        <td class="bg-white p-2 border-0"> 
                                            @if ($dat->commentaire == "")
                                            -
                                            @else

                                            {{$dat->commentaire}}</td>
                                        @endif
                                           

                                       
                                          <td class="bg-white p-2 border-0">
                                                <a>
                                                    <svg wire:click="deleteSection('{{$dat->id}}')" class="anim  icon-32 rounded-1" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>                                </svg>                            
                                                </a>
                                                
                            
                                            </td>
                                    </tr>
                                @endforeach
                                <tr>
                                  <td class="border-0 bg-white"></td>
                                  <td class="border-0 bg-white" ><span class="badge bg-warning">{{$designation}}</span></td>
                                  <td class="border-0 bg-white">{{$commentaire}}</td>
                                </tr>
                                </tbody>
                         
                         </table>
                    </div>
                    <div id="modal" class="form {{$form}} shadow" method="POST">
            
                     
                      
                      
                      <div class="col-12 ">
                        <h4 class="fw-bold mt-2 title-form" >Créer une séction</h4>
                        <hr>
    
                    
                          
                              <form wire:submit.prevent="create">
                                  @csrf

                                        <label for="projet" class="text-muted m-2">{{_('Désignation ')}} <span class="text-danger">*</span></label>
                                        <input type="text" id="nom" wire:model='designation' class="card-title form-control rounded-3 shadow-sm m-2" placeholder="designation "  required>   
                    
                                        <label for="prerequis"  class="text-muted m-2">{{_('commentaire ')}}</label>             
                                        <input type="text" wire:model="commentaire"  class="card-title form-control shadow-sm rounded-3 m-2" placeholder="commentaire">        
                    
                                    {{-- <div class="col-lg-5" >
                    
                                        <label for="contact" class="text-muted m-2">{{_('Semaine ')}}</label>
                                        <input type="number" wire:model="semainee" id="contact"  class="card-title form-control m-2" placeholder="semaine" >
                                       
                                        
                                      </div> --}}
                                   
                                  <button type="submit" class="btn  btn-success shadow-sm border-0 offset-8 btn-sm mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
                                  
                                  
                                </form>
                            </div>
                        
                        
                    </div>
            </div>
        
</div>
