<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
   <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
   <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
   <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
</head>

<body class="fundo">
    <header>
            <div >
                <div class="upperHead">
                  <div>
                     <p>
                      <a href="">Lumière</a>
                    </p>
                  </div>
                    <form action="#" method="post">
                        <input type="text" placeholder="Pesquisar">
                    </form>
                    <div class="logosHeader">
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                     </div>
                    </div>
                </div>
                <div class="tags">
                    <ul>
                        <li>
                            <a href="Acao.html">Ação</a>
                        </li>
                        <li>
                            <a href="Comedia.html">Comedia</a>
                        </li>
                        <li>
                            <a href="Sliceoflife.html">Slice of life</a>
                        </li>
                        <li>
                            <a href="Terror.html">Terror</a>
                        </li>
                        <li>
                            <a href="Scifi.html">Sci - fi</a>
                        </li>
                        <li>
                            <a href="">Mais</a>
                        </li>
                    </ul>
                </div>
            </div>
         </header>
      
            <main> 
            
            
            
        <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$post->arquivo}}"></img>
                    <div class="card-body">
                      <p class="card-text"><strong>Título:</strong> {{$post->nomeObra}}</p>
                      <p class="card-text"><strong>Lançamento:</strong> {{$post->data}}</p>
                      <p class="card-text"><strong>Duração:</strong> {{$post->duracao}}</p>
                      <p class="card-text"><strong>Sinopse:</strong> {{$post->sinopse}}</p>
                      <p class="card-text"><strong>Elenco:</strong> {{$post->elenco}}</p>
                      <p class="card-text"><strong>Produção:</strong> {{$post->producao}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="/update/{{$post->id}}">Editar</a>
                          <form method="POST" action="/{{$post->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>

      </main>