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

    <link rel="stylesheet" href="css/principal.css">
</head>

<body class="fundo">
    <header>
        <div>
            <div class="upperHead">
                <div>
                    <p>
                        <a href="principal.html">Lumière</a>
                    </p>
                </div>
                <form action="#" method="post">
                    <input type="text" placeholder="Pesquisar">
                    <button type="submit" class="button" img="lupa 13.png"></button>
                </form>
                <div class="logosHeader">
                    <a href="usuario.html" class="button"> Usuário</a>
                    <img src="./images/perfil.png" />
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

        <div class="quadradodasinopse">

            <div class="sisi">
                <div>
                    <div class="title">
                    <p class="card-text"><strong>Título:</strong> {{$foto->nomeObra}}</p><br>
                     <br>
                    </div>
                    <p class="card-text"><strong>Lançamento:</strong> {{$foto->data}}</p><br>
                        <p class="card-text"><strong>Duração:</strong> {{$foto->duracao}}</p><br>
                </div>
            </div>
            <div class="imgsi">
                      <div>
                        <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$foto->arquivo}}" class="showImg"></img>
                      </div>
                  </div>

            <div class="sisi">
            <p class="card-text"><strong>Sinopse:</strong> {{$foto->sinopse}}</p><br>
                <br>
                <p class="card-text"><strong>Produção:</strong> {{$foto->producao}}</p>
                <br>
                <p class="card-text"><strong>Elenco:</strong> {{$foto->elenco}}</p><br>
            </div>
        </div>

        <div class="quadross">

            <div class="quadradoavaliacoes">
                <div class="quadradodoavaliacoes">
                    <h1>Avaliações</h1>
                </div>
                <div class="dataava">
                    <p> Sua Avaliação: </p>
                </div>
                <br>
            </div>

            <br>
            
            <div class="quadradocomentario">
                <div class="quadradocomentario">
                    <h1>Comentários</h1>
                </div>
            </div>
                
        </div>

    </main>
    <footer>
        <div class="rodape">
        </div>
    </footer>
    

</body>

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

.quadradodasinopse{
  background-color: #3B4A52;
  margin-top: 10px;
  margin-left: 10px;
  border-radius: 10px;
  height: 740px;
  width: 800px;
}

h2{
  margin-left: 10px;
  margin-top: 10px;
  color: white;
}

.title a{
  color: white;
  font-size: 2rem;
  margin-top: 10px;
}


.imgsi{
  margin-left: 130px;
  margin-top: 50px;
}

.sisi{
  margin-top: 50px;
  margin-left: 10px;
  margin-right: 5px;
  color: white;
}
.quadross{
  margin-top: 10px;
  margin-right: 10px;
  display: flex;
  flex-direction: column;
  margin-left: 50px ;
  width: 1200px;
  height: 1000px;
}
.quadradoavaliacoes{
  width: 1000px;
  height: 200px;
  background-color: #3B4A52;
  border-radius: 10px;
  color: white;
}
.dataava{
  margin-left: 20px;
  font-size: medium;
  margin-top: 20px;
}
.quadradocomentario{
  width: 1000px;
  height: 500px;
  margin-top: 10px;
  background-color: #3B4A52;
  border-radius: 10px;
  color: white;
}

.rodape{
  background-color: #23353E;
  margin-top: 1px;
  height: 50px;
}