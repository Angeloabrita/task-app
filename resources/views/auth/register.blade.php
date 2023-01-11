<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Styles  tailwind-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
  {{-- <div class="alert alert-error shadow-lg">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <span>Error! Task failed successfully.</span>
    </div>
  </div> --}}
  <section>
    <div class="hero min-h-screen bg-base-200">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
          <h1 class="text-5xl font-bold">Cadastro</h1>
          <p class="py-6">Faça o seu cadastro e começe a criar as tarefas que talvez sejam cumpridas</p>
        </div>
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
          <div class="card-body">

            <form action="{{route('register.register')}}" method="POST">
              @csrf
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Nome</span>
                </label>
                <input type="text" placeholder="nome" class="input input-bordered" id="name" name="name" required/>
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Email</span>
                </label>
                <input type="text" placeholder="email" class="input input-bordered" id="email" name="email" required/>
              </div>
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Senha</span>
                </label>
                <input type="password" placeholder="senha" class="input input-bordered" id="password" name="password" required />
               
              </div>
              <div class="form-control mt-6">
                <button type="submit" class="btn btn-primary">Criar conta</button>
          
              </div>

            </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>
     
    
</body>
</html>