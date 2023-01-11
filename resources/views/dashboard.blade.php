<?php $data = json_decode(Cookie::get('api_token'), true); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.43.2/dist/full.css" rel="stylesheet" type="text/css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                clifford: '#da373d',
              }
            }
          }
        }
      </script>

<style type="text/tailwindcss">
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

.item {
	@apply
		bg-gray-200 text-gray-100
		text-xl font-bold
		flex items-center content-center justify-center
		rounded
}
  </style>

    <title>Lista de tarefas - Tarefas</title>
</head>
<body>
    <header>
        <nav class="navbar bg-gray-300 shadow-2xl">
            <div class="flex-1">
              <a class="btn btn-ghost normal-case text-xl">Lista de tarefas</a>
            </div>
            <div class="flex-none">
              <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn  btn-primary">
                 {{ $data['data'][1] ?? "Erro"  }}
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                  
                  
                      <form class="flex justify-center" action="{{route('login.logout')}}" method="POST">
                        @csrf
                        <input type="hidden" name="api_token" value="{{$data['token']}}">
                        <button class="btn btn-error w-full" type="submit">Sair</button>
                    </form>
                
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <div class="flex flex-col justify-center items-center h-screen bg-no-repeat bg-cover bg-clip-content bg-[url('taskico2.jfif')]" >
      <h2 class="text-5xl text-slate-100 font-bold text-center p-3 m-3 bg-gray-700 rounded-lg"  style="background-color: rgba(0, 0, 0, 0.7);">App lista de tarefas</h2>

        <section class="w-auto p-4 h-96  bg-gray-900  rounded-lg  overflow-x-hidden " style="background-color: rgba(0, 0, 0, 0.7);">

        <!-- item-card -->
        <div class="pt-5 flex justify-center space-x-2.5 w-auto ">
          <div class="item w-10 h-12 opacity-100"><p class="text-gray-700">1</p></div>
          <div class="item w-auto h-12 p-2"><p class="text-gray-700">13/12/2022</p></div>
          <div class="item w-80 h-12"><P class="text-gray-700"> Sobre udsdsa</P></div>
          <div class="item w-60 h-12">
              <a href="#" class="btn m-2 btn-primary  btn-sm">Ver mais...</a>
              <div class="dropdown dropdown-left ">
                  <label tabindex="0" class="btn btn-sm gap-2 btn-secondary">Ação <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8285 12.0259L16.2427 13.4402L12 17.6828L7.7574 13.4402L9.17161 12.0259L11 13.8544V6.31724H13V13.8544L14.8285 12.0259Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C15.4824 24.0739 8.51759 24.0739 4.22183 19.7782C-0.0739417 15.4824 -0.0739417 8.51759 4.22183 4.22183C8.51759 -0.0739419 15.4824 -0.0739419 19.7782 4.22183C24.0739 8.51759 24.0739 15.4824 19.7782 19.7782ZM18.364 18.364C14.8492 21.8787 9.15076 21.8787 5.63604 18.364C2.12132 14.8492 2.12132 9.15076 5.63604 5.63604C9.15076 2.12132 14.8492 2.12132 18.364 5.63604C21.8787 9.15076 21.8787 14.8492 18.364 18.364Z" fill="currentColor" /></svg></label>
                  <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box  w-52">
                    <li class="p-2"><a href="#" class="btn  btn-sm btn-warning">Editar</a></li>
                    <li class="p-2"><a href="#" class="btn  btn-sm  btn-error">Excluir</a></li>
                  </ul>
                </div>
          </div>
      </div>
      <!-- end-item-card -->

       <!-- item-card -->
       <div class="pt-5 flex justify-center space-x-2.5 w-auto ">
        <div class="item w-10 h-12 opacity-100"><p class="text-gray-700">1</p></div>
        <div class="item w-auto h-12 p-2"><p class="text-gray-700">13/12/2022</p></div>
        <div class="item w-80 h-12"><P class="text-gray-700"> Sobre udsdsa</P></div>
        <div class="item w-60 h-12">
            <a href="#" class="btn m-2 btn-primary  btn-sm">Ver mais...</a>
            <div class="dropdown dropdown-left ">
                <label tabindex="0" class="btn btn-sm gap-2 btn-secondary">Ação <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8285 12.0259L16.2427 13.4402L12 17.6828L7.7574 13.4402L9.17161 12.0259L11 13.8544V6.31724H13V13.8544L14.8285 12.0259Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C15.4824 24.0739 8.51759 24.0739 4.22183 19.7782C-0.0739417 15.4824 -0.0739417 8.51759 4.22183 4.22183C8.51759 -0.0739419 15.4824 -0.0739419 19.7782 4.22183C24.0739 8.51759 24.0739 15.4824 19.7782 19.7782ZM18.364 18.364C14.8492 21.8787 9.15076 21.8787 5.63604 18.364C2.12132 14.8492 2.12132 9.15076 5.63604 5.63604C9.15076 2.12132 14.8492 2.12132 18.364 5.63604C21.8787 9.15076 21.8787 14.8492 18.364 18.364Z" fill="currentColor" /></svg></label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box  w-52">
                  <li class="p-2"><a href="#" class="btn  btn-sm btn-warning">Editar</a></li>
                  <li class="p-2"><a href="#" class="btn  btn-sm  btn-error">Excluir</a></li>
                </ul>
              </div>
        </div>
    </div>
    <!-- end-item-card -->
  <!-- item-card -->
  <div class="pt-5 flex justify-center space-x-2.5 w-auto ">
    <div class="item w-10 h-12 opacity-100"><p class="text-gray-700">1</p></div>
    <div class="item w-auto h-12 p-2"><p class="text-gray-700">13/12/2022</p></div>
    <div class="item w-80 h-12"><P class="text-gray-700"> Sobre udsdsa</P></div>
    <div class="item w-60 h-12">
        <a href="#" class="btn m-2 btn-primary  btn-sm">Ver mais...</a>
        <div class="dropdown dropdown-left ">
            <label tabindex="0" class="btn btn-sm gap-2 btn-secondary">Ação <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.8285 12.0259L16.2427 13.4402L12 17.6828L7.7574 13.4402L9.17161 12.0259L11 13.8544V6.31724H13V13.8544L14.8285 12.0259Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7782 19.7782C15.4824 24.0739 8.51759 24.0739 4.22183 19.7782C-0.0739417 15.4824 -0.0739417 8.51759 4.22183 4.22183C8.51759 -0.0739419 15.4824 -0.0739419 19.7782 4.22183C24.0739 8.51759 24.0739 15.4824 19.7782 19.7782ZM18.364 18.364C14.8492 21.8787 9.15076 21.8787 5.63604 18.364C2.12132 14.8492 2.12132 9.15076 5.63604 5.63604C9.15076 2.12132 14.8492 2.12132 18.364 5.63604C21.8787 9.15076 21.8787 14.8492 18.364 18.364Z" fill="currentColor" /></svg></label>
            <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box  w-52">
              <li class="p-2"><a href="#" class="btn  btn-sm btn-warning">Editar</a></li>
              <li class="p-2"><a href="#" class="btn  btn-sm  btn-error">Excluir</a></li>
            </ul>
          </div>
    </div>
</div>
<!-- end-item-card -->

 
        </section>
    </div>
       
    
    

    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <div>
          <p>Copyright © 2022 - All right reserved by AGTA Studios</p>
        </div>
      </footer>
      
  
    
</body>
</html>