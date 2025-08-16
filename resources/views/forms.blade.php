<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <title>CAMPEONATO PAULISTA</title>
</head>
<body>

<section class="banner">
        <img src="{{ asset('assets/img/logo-paulistao.jpg') }}" alt="Banner Campeonato Paulista">
    </section>
 
    <header>
        <div class="navigation">
            <nav>
                <ul>
                    <li>
                        <img src="{{ asset('assets/img/logo-paulistao.jpg') }}" alt="Logo Paulistão">
                    </li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/formulario') }}">Formulário</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
  <h2>NOS FALE SOBRE VOCÊ</h2>

  <form action="/enviar" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

     <label for="estado">Estado:</label><br>
    <input type="text" id="estado" name="estado" required><br><br>

     <label for="timeCoracao">Time do coração:</label><br>
    <input type="text" id="timeCoracao" name="timeCoracao" required><br><br>


    <input type="submit" value="Enviar">
  </form>
</body>
</html>


