<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles  tailwind-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
    <body class="antialiased">
        
      {{-- hero main --}}
      <div class="hero min-h-screen" style="background-image: url('{{asset('storage/assets/taskbg.jpg')}}');">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
          <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Lista de tarefas</h1>
            <p class="mb-5">Consumindo uma API sem fazer MER....</p>
            <a href="{{route('login.index')}}" class="btn btn-primary">Entrar</a>
            <a href="{{route('register.index')}}" class="btn btn-secondary">Cadastrar</a>


          </div>
        </div>
      </div>   
    {{-- end hero mais --}}
        
    </body>
</html>
