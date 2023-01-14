<?php $data = json_decode(Cookie::get('api_token'), true); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 
    <!-- Styles  tailwind-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <title>Lista de tarefas - Tarefas</title>
</head>
<body>
 
    <x-nav-bar user-name="{{ $data['data'][1]}}" token-api="{{$data['token']}}" />


    <div class="flex flex-col justify-center items-center h-screen bg-no-repeat bg-cover bg-clip-content " >
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