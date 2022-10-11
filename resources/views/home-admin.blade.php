<!doctype html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/admin/estilo.css') }}">
    <title>Álbum</title>
    <style>
        body { padding: 20px; }
        .navbar { margin-bottom: 20px; }
        :root { --jumbotron-padding-y: 10px; }
        .jumbotron {
          padding-top: var(--jumbotron-padding-y);
          padding-bottom: var(--jumbotron-padding-y);
          margin-bottom: 0;
          background-color: #fff;
        }
        @media (min-width: 768px) {
          .jumbotron {
            padding-top: calc(var(--jumbotron-padding-y) * 2);
            padding-bottom: calc(var(--jumbotron-padding-y) * 2);
          }
        }
        .jumbotron p:last-child { margin-bottom: 0; }
        .jumbotron-heading { font-weight: 300; }
        .jumbotron .container { max-width: 40rem; }
        .btn-card { margin: 4px; }
        .btn { margin-right: 5px; }
        footer { padding-top: 3rem; padding-bottom: 3rem; }
        footer p { margin-bottom: .25rem; }
    </style>
</head>
<body>

    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Cadastro de filmes</strong>
          </a>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Cadastre um conteúdo</h1>
          <form method="POST" action="/filmes" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-left">
              <label for="nomeObra">Titulo</label>
              <input class="form-control" id="nomeObra" name="nomeObra" rows="3"></input>
            </div>

            <div class="form-group text-left">
              <label for="data">Data de lançamento</label><br>
              <input type="date" id="data" name="data"></input>
            </div>

            <div class="form-group text-left">
              <label type="type" for="duracao">Duração</label><br>
              <input type="time" id="duracao" name="duracao"></input>
            </div>

            <div class="form-group text-left">
              <label for="descricao">Sinopse</label>
              <textarea class="form-control" id="sinopse" name="sinopse" rows="3"></textarea>
            </div>

            <div class="form-group text-left">
              <label for="elenco">Elenco</label>
              <textarea class="form-control" id="elenco" name="elenco" rows="3"></textarea>
            </div>

            <div class="form-group text-left">
              <label for="producao">Produção</label>
              <textarea class="form-control" id="producao" name="producao" rows="3"></textarea>
            </div>

            <div class="form-group text-left">
                 <label for="arquivo">Imagem</label><br>
                 <input type="file" name="arquivo" id="arquivo" accept="arquivo/*" required/>
            </div>         
    
            <p>
              <button type="submit" class="btn btn-primary my-2">Enviar</button>
              <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
            </p>

          </form>
        </div>
      </section>

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

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">voltar</a>
        </p>
      </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
      $("#arquivo").blur(function(){
          var nomeCompleto = document.getElementById('arquivo').value;
          var nome = nomeCompleto.split("\\").pop();
          $("#RotuloArquivo").text(nomeCompleto);
      });
    </script>

</body>
</html>