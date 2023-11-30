<div>
    <div class="container  ">
        <h3  id="titre-prof">Planning</h3>
        <p id="text-prof">Paramétrage  / gerer-planification </p>   
    </div>  
    <div class="container   p-2 rounded-2" style="font-size: 0.75rem">
     <form wire:submit.prevent="deleteSelected">
        <div class="bg-white rounded-3 shadow-sm">
   
    <table class="  table  card-body  rounded-3 shadow-sm border-0 text-capitalize text-center   " style="border:0;overflow:hidden" >
        <div class="row  p-2">
            <div class="col-lg-2">
                <h5 id="titre-prof" class="m-1 fw-bold">Liste de planning</h5>
            </div>
            <div class="col-lg-1 offset-lg-9    ">
               
                <button   
               
                 class="{{
                    $disabled
                 }} btn btn-outline-danger border-0 btn-sm ms-4  rounded-5 ">
                     <svg class="icon-32    " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
    
                     <sub class="text-primary fw-bold  rounded-5 "> {{$total}}</sub>
                    </button>
            </div>
        </div>
       
        <thead class="">
         <th class="border-0"><input type="checkbox" ></th>
            <th class="p-2 fw-bold p-2  border-0">N°</th>
            <th class="p-2 fw-bold border-0">déscription</th>
            <th class="p-2 fw-bold border-0">délai </th>
            <th class="p-2 fw-bold border-0">Date debut </th>
            <th class="p-2 fw-bold border-0">Date Fin  </th>
            <th class="p-2 fw-bold border-0" colspan="2">
               
            </th>
            
           </thead>
       <tbody class="p-2 border-0">
        

           @foreach ($planifications as $planification)

                
   
                <tr class="border-0">
                        <td class="bg-white p-2 border-0" >
                         <input type="checkbox" wire:model="checkData" value="{{$planification->id}}" class="border-0"></td>
                    <td class="bg-white p-2 border-0" data-aos="zoom-in" data-aos-delay="300">{{$planification->id}}</td>
                    <td class="bg-white  p-2 border-0" data-aos="zoom-in" data-aos-delay="400">{{$planification->description}}</td>
                    <td class="bg-white  p-2 border-0" data-aos="zoom-in" data-aos-delay="500">
                      
                        {{$planification->delai}}
                       
                    </td>
                    <td class="bg-white  p-2 border-0" data-aos="zoom-in" data-aos-delay="600">{{$planification->date_debut}}</td>
                    <td class="bg-white  p-2 border-0" data-aos="zoom-in" data-aos-delay="700">{{$planification->date_fin}}</td>
                    {{-- <td class="bg-white  p-2" data-aos="zoom-in" data-aos-delay="800">
                        <a wire:click="remove('{{$planification->id}}')">
                        <svg class="icon-32 text-danger    " width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                    </a> --}}
                    </td>
                </tr>
               
            @endforeach
       

               
               
          
       </tbody>
       
    </table>
</form>
         
       </div>
    </div>
</div>
