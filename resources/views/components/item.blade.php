       <!-- item-card -->
       <div class="pt-5 flex justify-center space-x-2.5 w-auto ">
        <div class="item w-10 h-12 opacity-100"><p class="text-gray-700">{{$creator}}</p></div>
        <div class="item w-auto h-12 p-2"><p class="text-gray-700">{{$date}}</p></div>
        <div class="item w-80 h-12"><P class="text-gray-700">{{$text}}</P></div>
        <div class="item w-60 h-12">
            <a href="{{$showUrl}}" class="btn m-2 btn-primary  btn-sm">Ver mais...</a>
                       
        
            <div class="dropdown dropdown-left ">
                <label tabindex="0" class="btn btn-sm gap-2 btn-secondary">Ação <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8285 12.0259L16.2427 13.4402L12 17.6828L7.7574 13.4402L9.17161 12.0259L11 13.8544V6.31724H13V13.8544L14.8285 12.0259Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C15.4824 24.0739 8.51759 24.0739 4.22183 19.7782C-0.0739417 15.4824 -0.0739417 8.51759 4.22183 4.22183C8.51759 -0.0739419 15.4824 -0.0739419 19.7782 4.22183C24.0739 8.51759 24.0739 15.4824 19.7782 19.7782ZM18.364 18.364C14.8492 21.8787 9.15076 21.8787 5.63604 18.364C2.12132 14.8492 2.12132 9.15076 5.63604 5.63604C9.15076 2.12132 14.8492 2.12132 18.364 5.63604C21.8787 9.15076 21.8787 14.8492 18.364 18.364Z" fill="currentColor" /></svg></label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box  w-52">

                  <li class="p-2"><a href="{{$editUrl}}" class="btn  btn-sm btn-warning">Editar</a></li>
                  <li class="p-2"><a href="{{$delUrl}}" class="btn  btn-sm  btn-error">Excluir</a></li>
                  
                </ul>
              </div>
        </div>
    </div>
    <!-- end-item-card -->