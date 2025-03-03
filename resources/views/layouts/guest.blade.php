<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz Fernando Duarte Cabette</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="shortcut icon" type="image/png " href="{{ asset('images/logo.png') }}">
</head>
<body>

    <div class="painel-login">
        {{ $slot }}
    </div>

    <footer>
    <a href="">
        <img class="logo" src="{{ asset('images/logo_white.png') }}" alt="" />
    </a>
    <p class="title">Vivendo, aprendendo e melhorando um dia de cada vez.</p>

    <div class="social">
        <a href="https://www.instagram.com/luiz_fernando.11/">
            <img src="{{ asset('images/social_ig.svg') }}" alt="Instagram" />
        </a>
        <!-- <a href="">
            <img src="{{ asset('images/social_x.svg') }}" alt="X" />
        </a> -->
        <a href="https://www.linkedin.com/in/luiz-fernando-duarte-cabette-3a0ba7193/">
            <img src="{{ asset('images/social_Linkedin.svg') }}" alt="LinkedIn" />
        </a>
        <a href="mailto:luiz.fernando@viannasempre.com.br">
            <img src="{{ asset('images/social_email.svg') }}" alt="E-mail" />
        </a>
        <a href="https://wa.me/+5532988097534">
            <img src="{{ asset('images/social_zap.svg') }}" alt="WhatsApp" />
        </a>
    </div>
    <p class="copyright">Criado por: Luiz Fernando Duarte Cabette.</p>
    <p class="legal">CPF: 084.831.716-51</p>
    </footer>

    <!-- <script type="text/javascript" src="{{ asset('js/script.js') }}"></script> -->
</body>
</html>
