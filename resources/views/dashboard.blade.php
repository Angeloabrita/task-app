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

      <!-- end-item-card -->
        <x-item creator="Angelo" date="24/11/21" text="bkfbmkbmk" del-url="#" edit-url="#" show-url="#" />
 
        </section>
    </div>

       <x-footer />
    
</body>
</html>