<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles  tailwind-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Lista de tarefas - criar</title>
</head>
<body>
    
    <x-nav-bar user-name="Angelo" token-api="fkpaodkfapdofkaopa" />

    <div class="flex flex-col justify-center items-center h-screen bg-no-repeat bg-cover bg-clip-content " >
      <h2 class="text-5xl text-slate-100 font-bold text-center p-3 m-3 bg-gray-700 rounded-lg"  style="background-color: rgba(0, 0, 0, 0.7);">App lista de tarefas - Tarefa</h2>
      <!-- container alpha black -->
      <section class="w-auto p-4 h-4/5  bg-gray-900  rounded-lg  overflow-x-hidden " style="background-color: rgba(0, 0, 0, 0.7);">
        
        <!-- grid -->
        <div class="grid overflow-hidden grid-cols-3 grid-rows-4 gap-2">
            <div class="box row-span-4 h-48 w-52 p-3 flex flex-col justify-center items-center">
                <p class="text-white ">Ações</p>

                <a href="#" class="btn w-full m-3 btn-warning">Editar</a>
                <a href="#" class="btn w-full m-3 btn-error">Excluir</a>

            </div>
            <div class="box col-start-2 h-24 col-span-2 item p-3">
                <p class="text-white text-lg m-3">Uma descrição breve</p>
                <p class="text-white text-lg m-3">23/11/2022</p>
            </div>
            <div class="box col-start-2 row-span-3 h-48 col-span-2 p-3 item"><p>
                odfkapofka´~pofkapõka~pofkaçdlvmzlkcvmzçlkvmzçpivja[dsópkfa´dpslfz~çl,vzçclxvmzçoicxvjnz´~pocvkz~c´pvlzcpvklz~povckzc~povcokp~vzcxop]
            </p></div>
        </div>
        <!-- end grid -->

      </section>

    <!-- end container alpha black -->

    </div>
      
        
        
        
      
    

    <x-footer />
    
</body>
</html>