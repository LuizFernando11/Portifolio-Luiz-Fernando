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

    <header class="container">
        <div class="navbar">
            <div class="logo">
                <a href=""><img src="{{ asset('images/logo.png') }}" alt=""></a>
            </div>
            <div class="menu-opener">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav>
            <a href="">Blog</a>
            <a href="" class="button">Contato</a>
        </nav>
    </header>

    <section class="hero container">
        <h1>Full Stack php/laravel</h1>
        <h2>Eu desenho e codifico projetos bonitos e amo o que faço.</h2>
        <img class="hero-avatar" src="{{ asset('images/avatar.svg') }}" alt="" />
        <img class="hero-device" src="{{ asset('images/hero-devices.svg') }}" alt="" />
    </section>

    <section class="intro">
        <div class="container">
            <div class="box">
                <p class="title">Oi, eu sou Luiz Fernando, tudo bem?</p>
                <p class="subtitle">Desde que comecei minha jornada com designer freelancer, há
                    bla bla remotos para agencias, ajudei startups e colaborei com pessoas talentosas
                    bla bla digitais para ambos usos empresarial e do consumidor. Sou bastante confiante,
                    bla bla trabalho para melhorar minhas habilidades constantemente.
                </p>
            </div>
        </div>
    </section>

    <section class="skills">
        <div class="skills-overlay">
            <div class="container">
                <div class="grid">
                    <div class="skill">...</div>
                    <div class="skill">...</div>
                    <div class="skill">...</div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>