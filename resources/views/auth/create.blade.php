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
      <h2 class="text-5xl text-slate-100 font-bold text-center p-3 m-3 bg-gray-700 rounded-lg"  style="background-color: rgba(0, 0, 0, 0.7);">App lista de tarefas - criar</h2>
      
      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-gray-100">
        <div class="card-body">
          <div class="form-control">
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="label-text">
                  Titulo
                </label>
                <input class="input input-bordered nput-sm w-full max-w-xs" id="title" type="text" placeholder="Descrição breve">
              </div>
              <div class="w-full md:w-1/2 px-3">
                <label class="label-text">
                  Data
                </label>
                <input class="input input-bordered nput-sm w-full max-w-xs" id="date" type="date" value="2022-12-15">
              </div>
            </div>
          </div>
          <div class="form-control">
            <textarea class="textarea textarea-primary" placeholder="Adicione uma descrição"></textarea>

          </div>
          <div class="form-control mt-6">
            <button class="btn btn-primary">Criar</button>
          </div>
        </div>
      </div>
    
      </div>
      
        
        
        
      
    

    <x-footer />
    
</body>
</html>