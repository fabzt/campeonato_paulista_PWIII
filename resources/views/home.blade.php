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
 

    <main>
        <h1>CAMPEONATO PAULISTA</h1>
        <h2>OS MAIORES CAMPEÕES PAULISTAS</h2>
 
        <table class="tabela" border="5">
            <tr>
                <th>Escudos</th>
                <th>Clube</th>
                <th>Títulos</th>
            </tr>
            <tr>
                <td><img src="{{ asset('assets/img/corinthians.png') }}" alt="Corinthians"></td>
                <td>Corinthians</td>
                <td>31 títulos</td>
            </tr>
            <tr>
                <td><img src="{{ asset('assets/img/palmeiras.webp') }}" alt="Palmeiras"></td>
                <td>Palmeiras</td>
                <td>26 títulos</td>
            </tr>
            <tr>
                <td><img src="{{ asset('assets/img/sao_paulo.png') }}" alt="São Paulo"></td>
                <td>São Paulo</td>
                <td>22 títulos</td>
            </tr>
            <tr>
                <td><img src="{{ asset('assets/img/santos.jpg') }}" alt="Santos"></td>
                <td>Santos</td>
                <td>22 títulos</td>
            </tr>
            <tr>
                <td><img src="{{ asset('assets/img/paulistano.png') }}" alt="Paulistano"></td>
                <td>Paulistano</td>
                <td>11 títulos</td>
            </tr>
        </table>
    </main>
 
</body>
</html>