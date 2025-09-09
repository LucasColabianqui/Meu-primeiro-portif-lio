<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Meu Site' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('sobre') }}">Sobre</a></li>
            <li><a href="{{ route('portifolio') }}">Portfólio</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>
    </nav>

    <div class="container">
        {{ $slot }}
    </div>

    <footer>
        <div class="footer-redes">
            <a href="https://github.com/LucasColabianqui" target="_blank">GitHub</a>
            <a href="https://www.linkedin.com/in/lucas-colabianqui-89338a283/" target="_blank">LinkedIn</a>
            <a href="https://www.instagram.com/luckasszz/" target="_blank">Instagram</a>
        </div>
    </footer>
</body>
</html>
