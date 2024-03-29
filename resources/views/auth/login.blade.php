<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!-- Styles  tailwind-->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
    <section>
      <div class="hero min-h-screen bg-no-repeat bg-cover bg-clip-content " >
        <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold text-gray-100">Login now!</h1>
            <p class="py-6 text-gray-100">Faça o seu login e começe a cadastras as tarefas que jamais talvez sejam cumprodas</p>
          </div>
          <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <div class="card-body">

              <form action="{{route('login.login')}}" method="POST">

                @csrf
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
                  <input type="password" placeholder="senha" class="input input-bordered" id="password" name="password"  required/>
                  <label class="label">
                    <a href="{{route('register.index')}}" class="label-text-alt link link-hover">Não tem cadastro?</a>
                  </label>
                </div>
                <div class="form-control mt-6">
                  <button class="btn btn-primary">Conectar</button>
                </div>

              </form>
              
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>