<div>
    <div class="container   ">
        <div class="row ">
            <div class="col-lg-4">

                <h3  id="titre-prof"> Projet</h3>
                <p id="text-prof">Paramétre  / Projet</p>   
            </div>
            <div class="col-lg-2 offset-lg-3"></div>
            <div class="col-lg-3 mt-5 ">
                <button wire:click="formAjout" class="btn btn-sm btn-primary offset-lg-8  fw-bold border-0 rounded-4 shadow-sm" data-aos="flip-left" duration="800">
                    <a  class="nav-link">
                    Nouveau 
                    <svg class="icon-32 " width="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z" fill="currentColor"></path>                                <path opacity="0.4" d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z" fill="currentColor"></path>                                <path d="M14.3672 12.2364H12.6392V10.5094C12.6392 10.0984 12.3062 9.7644 11.8952 9.7644C11.4842 9.7644 11.1502 10.0984 11.1502 10.5094V12.2364H9.4232C9.0122 12.2364 8.6792 12.5704 8.6792 12.9814C8.6792 13.3924 9.0122 13.7264 9.4232 13.7264H11.1502V15.4524C11.1502 15.8634 11.4842 16.1974 11.8952 16.1974C12.3062 16.1974 12.6392 15.8634 12.6392 15.4524V13.7264H14.3672C14.7782 13.7264 15.1122 13.3924 15.1122 12.9814C15.1122 12.5704 14.7782 12.2364 14.3672 12.2364Z" fill="currentColor"></path>                                </svg>                            

                    </a></button>
            </div>
        </div>
    </div>  

    <div class="container   p-2 rounded-2" style="font-size: 0.75rem">
        <form wire:submit.prevent="deleteSelected">
            <div class="bg-white rounded-3 shadow-sm">
    
                <table class="  table  card-body  rounded-3 shadow-sm border-0 text-capitalize  " style="border:0;overflow:hidden" >
            <div class="row  p-2">
                <div class="col-lg-2">
                    <h5 id="titre-prof" class="m-1 fw-bold">Liste de projet</h5>
                </div>
                <div class="col-lg-4 offset-lg-5">
                    <input type="text" wire:model.debounce.500="recherche"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Recherche par profile ...">
                </div>
                <div class="col-lg-1  ">
                
                    <button   
                {{$disabled}}
                    class=" btn btn-outline-danger border-0 btn-sm ms-4  rounded-5 anim">
                        <svg class="icon-32    " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
        
                        <sub class="text-primary fw-bold  rounded-5 "> {{$total}}</sub>
                        </button>
                </div>
            </div>
        
            <thead class="">
                <th class="border-0"><input type="checkbox" ></th>
                <th class="fw-bold p-2 border-0" >titre</th>
                <th class="fw-bold p-2 border-0" >Description</th>
                <th class="fw-bold p-2 border-0" >Prerequis</th>
                <th class="fw-bold p-2 border-0" >Contexte</th>
                <th class="fw-bold p-2 border-0" >Commentaire</th>
                <th class="fw-bold p-2 border-0" >Date de création</th>
                <th class="fw-bold p-2 border-0" >Action</th>
                
            </thead>
        <tbody class="p-2 border-0">
            

            @foreach ($projets as $dat )                           
            <tr>
                <td class="bg-white p-2 border-0" >
                    <input type="checkbox" wire:model="checkData" value="{{$dat->id}}"  class="border-0">
                </td>
                <td  class="text-dark bg-white p-1 border-0 fw-bold" id="tdanim" >
                    {{$dat->titre}}
                </td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim2">{{$dat->description}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim1">{{$dat->prerequis}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim2">{{$dat->contexte}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim1">{{$dat->commentaire}}</td>
                <td  class="text-muted bg-white p-1 border-0" id="tdanim">{{
                        $ee = strftime(" %d %b %Y %Hh:%m",$dat->created_at->getTimestamp());
                }}</td>
               
                  <td class="bg-white p-1 border-0" data-aos="flip-left" data-aos-delay="400">
                      -
                    </td>
            </tr>
          @endforeach
                    
                    
                    
                    
                    
                    
                </tbody>
                
            </table>
        </form>
        
    </div>
    {{$projets->links()}}
  
    
  {{-- notification --}}
  @if (session('notif'))
  <div id="notification" class="rounded-5 active shadow text-white ">
   <a href="" class="nav-link">
    {{session('notif')}} <span class="text-danger fw-bold">! </span>
   
   </a>
  </div>
@endif
   
</div>
