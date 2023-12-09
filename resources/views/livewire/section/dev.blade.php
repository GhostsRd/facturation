<div >
    <div class="container   ">
        <h3  id="titre-prof">Items</h3>
        <p id="text-prof">Page  / Gerer Items</p>   
      
    </div>  
    <div class="container  " style="font-size: 0.75rem">
        <div class="bg-white rounded-3 shadow-sm">
            <table class="card-body  table table-striped-white table-sm border-0 shadow-sm rounded-3  text-capitalize "  >
               <div class="row p-2">
                <div class="col-lg-2">
                    <h5 id="titre-prof" class="m-2 fw-bold">Table d'item</h5>
                </div>
                <div class="col-lg-4 offset-lg-5">
                    <input type="text" name="" id="" wire:model.debounce.5000="recherche"  class="form-control-plaintext p-1 ps-2 w-100  hover mt-1 rounded-5 shadow-sm" placeholder="Recherche par designation ">
                </div>
                <div class="col-lg-1 mt-1 ">
               
                    <button 
                    {{
                        $disabled
                    }}
                     class=" btn btn-outline-primary border-0 btn-sm ms-4  rounded-5 anim">
                         <svg class="icon-32    " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
        
                         <sub class="text-primary fw-bold  rounded-5 "> {{$total}}</sub>
                        </button>
                </div>
            
               </div>
           
                <thead>
                    <th class="p-2 fw-bold border-0 text-center">
                        <input type="checkbox"  name="" id="" >
                    </th>
                    {{-- <th class="p-2 fw-bold border-0">N°</th> --}}
                    <th class="p-2 fw-bold border-0">titre du projet</th>
                    <th class="p-2 fw-bold border-0 "> séction</th>
                    <th class="p-2 fw-bold border-0">Désignation </th>
                    <th class="p-2 fw-bold border-0">duré </th>
                    <th class="p-2 fw-bold border-0" >action</th>
                    
                   </thead>
               <tbody>
                
                   @foreach ($sections as $sec)
                   @foreach ($items as $item)
                   @if ($sec->id == $item->id_section)
                        
           
                        <tr>
                            <td class="bg-white p-2 border-0 text-center" id="tdanim">
                            <input type="checkbox" wire:model="checkData" value="{{$item->id}}" name="" id="">    
                            </td>
                            {{-- <td class="bg-white p-2 border-0" id="tdanim">{{$item->id}}</td> --}}
                            <td class="bg-white  border-0 " id="tdanim">
                                @foreach ($projets as $pro )
                                    @if($pro->id == $item->id_projet)

                                    {{$pro->titre}}
                                    @endif
                                @endforeach
                            
                            </td>
                            <td class="bg-white  border-0" id="tdanim1">
                              
                                {{$sec->designation}}
                               
                            </td>
                            <td class="bg-white  border-0" id="tdanim2">{{$item->designation}}</td>
                            <td class="bg-white  border-0" id="tdanim2">
                                @if ($item->temps_passe>1)
                                {{$item->temps_passe}} jours
                            @else
                                {{$item->temps_passe}} jour
                            @endif    
                            </td>
                            <td class="bg-white  border-0 " id="tdanim1">
                                <a wire:click="remove('{{$item->id}}')">
                                <svg class="icon-32 text-danger   anim " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                            </a> 
                            </td>
                        </tr>
                        @endif
                   @endforeach
                    @endforeach
               
    
                       
                       
                  
               </tbody>
               
            </table>
        </div>
        <div>
            {{$items->links()}}
        </div>
    </div>
    @if (session('notif'))

    <div id="notification" class="rounded-3 p-2 active shadow  ">
    
          
          <svg class="icon-32 text-success" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67 2H16.34C19.73 2 22 4.38 22 7.92V16.091C22 19.62 19.73 22 16.34 22H7.67C4.28 22 2 19.62 2 16.091V7.92C2 4.38 4.28 2 7.67 2ZM11.43 14.99L16.18 10.24C16.52 9.9 16.52 9.35 16.18 9C15.84 8.66 15.28 8.66 14.94 9L10.81 13.13L9.06 11.38C8.72 11.04 8.16 11.04 7.82 11.38C7.48 11.72 7.48 12.27 7.82 12.62L10.2 14.99C10.37 15.16 10.59 15.24 10.81 15.24C11.04 15.24 11.26 15.16 11.43 14.99Z" fill="currentColor"></path>                            </svg>                        
          <a href="" class="nav-link ms-1">
              <span class="fw-bold">Success</span><br>
             {{-- RAKTOnirina rado leonce RAKTOnirina LEONCERARAKOROIN --}}
              {{session('notif')}} <span class="text-danger fw-bold">:) </span>
             
             </a>
    
     </div>
    </div>
  @endif
</div>