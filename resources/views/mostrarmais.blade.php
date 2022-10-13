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

        <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($foto as $foto)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$foto->arquivo}}" class="showImg"></img>
                    <div class="card-body">
                      <p class="card-text"><strong>Título:</strong> {{$foto->nomeObra}}</p>
                      <p class="card-text"><strong>Lançamento:</strong> {{$foto->data}}</p>
                      <p class="card-text"><strong>Duração:</strong> {{$foto->duracao}}</p>
                      <p class="card-text"><strong>Sinopse:</strong> {{$foto->sinopse}}</p>
                      <p class="card-text"><strong>Elenco:</strong> {{$foto->elenco}}</p>
                      <p class="card-text"><strong>Produção:</strong> {{$foto->producao}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="/filmes/{{$foto->id}}/edit">Editar</a>
                          <form method="POST" action="filmes/{{$foto->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                          </form>
                          <a type="button" class="btn btn-sm btn-outline-primary" href="/obra/{{$foto->id}}">+</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
         

         <main>
         
   


<style>
  * {
  margin: 0;
  padding: 0;
  outline: 0;
  box-sizing: border-box;
  max-width: 1950px;
  max-height: 100%;
}

h1 {
  text-align: center;
  margin: 1em 0;
  font-family: sans-serif;
}

.upperHead {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: auto;
    background-color: #23353E;
    color: white;
    padding: 1rem;
}
.logosHeader{
    position: relative;
    left: 9px;
    right: 6px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    font-size: 1.5rem;
    font-family: sans-serif;
}
.iconPer{
    position: absolute;
    left: 79.15%;
    right: 17.34%;
    top: 1.81%;
    bottom: 91.75%;
}
.home {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.logos {
    display: flex;
    justify-content: space-between;
    margin: auto;
}

main{
    display: grid;
    grid-template-columns: auto auto;
}

h2 {
    font-family: sans-serif;
    font-size: 24;
    color: white;
}
div p a{
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: #ffffff;
  font-size: 30px; color: #ffffff;
}

.usuario {
    margin-right: 2rem;
}

form input{
    position: relative;
    left: 10%;
    border-radius: 0.4rem;
    background: rgba(196, 196, 196, 0.5);
    border: 1px solid #969494;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    height: 30px;
    width: 505px;
  }
::placeholder{
    color: whitesmoke;
  }
.tags {
    display: flex;
    margin: auto;
    background-color: #3B4A52;
}

.tags ul {
    display: flex;
    justify-content: space-between;
    margin: auto;
    list-style-type: none;
    padding: 1rem;
}

.tags ul li {
    display: flex;
    justify-content: center;
    margin: auto;
    padding: 0 10px;
}

a {
    display: flex;
    font-family: 'Kulim Park', sans-serif;
    color: rgb(255, 255, 255);
    text-decoration: none;
    justify-content: space-between;
    align-items: center;
    padding: 7px;
}
 .fundo{
  background-color: black;
}
