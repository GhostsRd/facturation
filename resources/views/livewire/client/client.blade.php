<div>
    <div class="container   ">
        <h3  id="titre-prof">Page Client</h3>
        <p id="text-prof">Page / Gerer Client</p>   
    </div>  
   
    <div class="container  " style="font-size: 0.75rem">

        {{-- menu icons --}}
        <div class="bg-white  rounded-3">
            
         <table id="user-list-table" class="table card-body  text-center rounded-1 shadow-sm  display  " role="grid" data-bs-toggle="data-table">
                    <div class="row p-2">
                        <div class="col-lg-2 ">
                          <h5 class="fw-bold " id="titre-prof">Liste de client

                          </h5>
                
                        </div>

                        <div class="col-lg-4 offset-lg-5 col-8">
                          <input type="text" name="" id="" placeholder="Recherche ..."  id="form-hovered" class="form-control-sm border-0 w-100  rounded-5  shadow-sm">
                        </div>

                        <div class="col-1 col-lg-1">
                          <button wire:click="formajout" class="btn btn-sm btn-primary m fw-bold border-0 rounded-4 shadow-sm">
                            <a  class="nav-link ">
                            Nouveau 
                            {{-- <svg class="icon-20" width="5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>                                <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>                                <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>                                <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>                                <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>                                <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>                                </svg>                             --}}
        
                            </a></button>
                                
                          {{-- <ul class="col-lg-2"> --}}
                            
                           
                            {{-- <li style="list-style: none;" >
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
                            </li> --}}
                          {{-- </ul> --}}
                        </div>
                      </div>
                     
                
                    
                
                    {{-- container table list --}}
                
                    <div>
                          
                    <thead>
                       <tr>
                          
                          <th class="fw-bold p-2 border-0">Id client</th>
                          <th class="fw-bold p-2 border-0">Nom</th>
                          <th class="fw-bold p-2 border-0">Prenom</th>
                          <th class="fw-bold p-2 border-0">Contact</th>
                          <th class="fw-bold p-2 border-0" >Modifier</th>
                          <th class="fw-bold p-2 border-0" >Supprimer</th>

                          
                         
                       </tr>
                    </thead>
                    
                    <tbody>
                          
                    @foreach ($data as $dat )                       
                            <tr>
                                <td class="text-muted bg-white border-top-0">{{$dat->id}}</td>
                                <td  class="text-dark bg-white border-top-0"><span class="bg-purple text-dark badge">{{$dat->nom}} </span></td>
                                <td  class="text-muted bg-white border-top-0">{{$dat->prenom}}</td>
                                <td  class="text-muted bg-white border-top-0">{{$dat->contact}}</td>
                               
                                  <td class="bg-white border-top-0">
                                     
                                    <svg  class="icon-32 text-warning" wire:click="formModifier('{{$dat->id}}','{{$dat->nom}}','{{$dat->prenom}}','{{$dat->contact}}')" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>                                <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>                                <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>                                </svg>                            
                     
                                    </td>
                                    <td class="bg-white border-top-0">
                                    
                                          <svg wire:click="delete('{{$dat->id}}')" class="anim text-primary icon-32 rounded-1" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>                                </svg>                            
                                 
                                      
                  
                                  </td>
                            </tr>
                        @endforeach
                        </tbody>
                 
         </table>
     </div>
            <div id="modal" class="form shadow w-25  {{$form}}" method="POST">
          
                  <div class="col-lg-12">
                    <h5 class="fw-bold title-form text-center" >Ajouter un client</h5>
                     <hr>
                      <form wire:submit.prevent="create">
                          @csrf
      
                                <label for="projet" class="text-muted m-2 " >{{_('Nom  *')}}</label>
                                <input type="text" id="nom" wire:model='nom' class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Nom du client" required>   
            
                                <label for="prerequis"  class="text-muted m-2">{{_('Prénom *')}}</label>             
                                <input type="text" wire:model="prenom"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Prénom du client" required>        
            
                      
                                <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                                <input type="text" wire:model="contact" id="contact"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Contact du client" required>
                               <hr>
                      
                         <div class="text-center">
                          <button type="submit" class="btn btn-sm  btn-primary mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
                          <button  class="btn btn-sm  btn-warning mt-2 rounded-5 text-white fw-bold"><a href="" class="nav-link">
                            Annuler  
                          </a></button>

                         </div>
                          
                        </form>
                    </div>
      
                
            </div>
            <div id="modal" class="form shadow w-25  {{$form1}}" method="POST">
  
              <div class="col-lg-12">
                <h5 class="fw-bold title-form text-center" >Modifier un client</h5>
                 <hr>
                 
                 
                 <form method="POST" action="{{url('/client/update')}}">
                    
                        {{-- {{dd($data)}} --}}
                          @csrf
                                <input type="hidden" name="id" value="{{$id_client}}">

                                <label for="projet" class="text-muted m-2 " >{{_('Nom  *')}}</label>
                                <input type="text" name="nom" class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                                 value="{{$nom}}" required>   
            
                                <label for="prerequis"  class="text-muted m-2">{{_('Prénom *')}}</label>             
                                <input type="text" name="prenom" class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" 
                                value="{{$prenom}}" required>        
            
                      
                                <label for="contact" class="text-muted m-2">{{_('Contact *')}}</label>
                                <input type="text"  id="contact" name="contact" class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm"
                                 value="{{$contact}}" required>
                              <hr>
                      
                       <div class="text-center">
                        <button type="submit" class="btn btn-sm  btn-primary mt-2 rounded-5 text-white fw-bold">Enregistrer</button>
                        <button  class="btn btn-sm  btn-warning mt-2 rounded-5 text-white fw-bold"><a href="" class="nav-link">
                          Annuler  
                        </a></button>
                       </div>

                        </form>
                </div>
  
            
        </div>


            
          @if (session('status'))
            <div id="notification" class="rounded-5 active shadow text-white ">
             <a href="" class="nav-link">
              {{session('status')}} <span class="text-danger fw-bold">! </span>
             
             </a>
            </div>
          @endif
  </div>

    

   
</div>
