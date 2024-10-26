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
                    <div class="skill">
                        <div class="skill-icon">
                            <img src="{{ asset('images/design.svg') }}" alt="" />
                        </div>
                        <p class="skill-title">Designer</p>
                        <p class="skill-desc">Eu valorizo estruturas simples, disgn clean e insteçãoes customizadas.</p>
                        <p class="skill-sub">Coisas que goste de desenhar</p>
                        <p class="skill-txt">UX, UI, Web, Apps, Logos</p>
                        <p class="skill-sub">Ferramentas que uso</p>
                        <div class="skill-txt">
                            <ul>
                                <li>Affinity Designer</li>
                                <li>Figma</li>
                                <li>papel & Caneta</li>
                                <li>Sketch</li>
                                <li>WebFlow</li>
                            </ul>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <img src="{{ asset('images/code.svg') }}" alt="" />
                        </div>
                        <p class="skill-title">Front Developer</p>
                        <p class="skill-desc">Gosto de codigicar projetos do zero, trazer ideias a vida no navegador.</p>
                        <p class="skill-sub">CLinguagens que uso</p>
                        <p class="skill-txt">Html, CSS, php, javascript</p>
                        <p class="skill-sub">Ferramentas que uso</p>
                        <div class="skill-txt">
                            <ul>
                                <li>Githun</li>
                                <li>Laravel</li>
                                <li>VsCode</li>
                                <li>javascript</li>
                                <li>mysql</li>
                            </ul>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <img src="{{ asset('images/video.svg') }}" alt="" />
                        </div>
                        <p class="skill-title">Video Maker</p>
                        <p class="skill-desc">Amo fazer videos com boas produções e efeitos especiais.</p>
                        <p class="skill-sub">Coisas que goste de filmar</p>
                        <p class="skill-txt">Pessoas, produtos, ambientes e carros</p>
                        <p class="skill-sub">Ferramentas que uso</p>
                        <div class="skill-txt">
                            <ul>
                                <li>Adobe Premiere</li>
                                <li>Davinci resolve</li>
                                <li>Camera canon</li>
                                <li>Luzes</li>
                                <li>Microfone Rode</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-work container">
        <p class="title">Meus trabalhos recentes</p>
        <p class="subtitle"> Aqui estão alguns dos trabalhos que já fiz. Quer ver mais <a href="">Entra em contato.</a></p>
        <div class="grid">
            <div class="item">
                <img class="image" src="{{ asset('images/works/wfdesignbuild.png') }}" alt="" />
                <div class="overlay">
                    <p>Aqui vai alguma descricao sobre o projeto em si ou a propria empresa</p>
                    <a href="" class="button">Visite o website</a>
                </div>
            </div>
            <div class="item">
                <img class="image" src="{{ asset('images/works/burkettandco.png') }}" alt="" />
                <div class="overlay">
                    <p>Aqui vai alguma descricao sobre o projeto em si ou a propria empresa</p>
                    <a href="" class="button">Visite o website</a>
                </div>
            </div>
            <div class="item">
                <img class="image" src="{{ asset('images/works/chronicled.png') }}" alt="" />
                <div class="overlay">
                    <p>Aqui vai alguma descricao sobre o projeto em si ou a propria empresa</p>
                    <a href="" class="button">Visite o website</a>
                </div>
            </div>
            <div class="item">
                <img class="image" src="{{ asset('images/works/glcsolutions.png') }}" alt="" />
                <div class="overlay">
                    <p>Aqui vai alguma descricao sobre o projeto em si ou a propria empresa</p>
                    <a href="" class="button">Visite o website</a>
                </div>
            </div>
            <div class="item">
                <img class="image" src="{{ asset('images/works/coupal.png') }}" alt="" />
                <div class="overlay">
                    <p>Aqui vai alguma descricao sobre o projeto em si ou a propria empresa</p>
                    <a href="" class="button">Visite o website</a>
                </div>
            </div>
            <div class="item">
                <img class="image" src="{{ asset('images/works/wedlerengineering.png') }}" alt="" />
                <div class="overlay">
                    <p>Aqui vai alguma descricao sobre o projeto em si ou a propria empresa</p>
                    <a href="" class="button">Visite o website</a>
                </div>
            </div>
        </div>

        <a href="" class="button seemore">Deseja ver mais?</a>
    </section>

    <section class="worked-with">
        <div class="container">
            <p class="title">Já colaborei com diversas empresas incriveis:</p>
            <div class="grid">
                <img src="{{ asset('images/clients/briteweb.svg') }}" alt="" />
                <img src="{{ asset('images/clients/serpmetrics.svg') }}" alt="" />
                <img src="{{ asset('images/clients/redstamp.svg') }}" alt="" />
                <img src="{{ asset('images/clients/domain7.svg') }}" alt="" />
                <img src="{{ asset('images/clients/designlab.png') }}" alt="" />
                <img src="{{ asset('images/clients/chronicled.svg') }}" alt="" />
                <img src="{{ asset('images/clients/bldrs.png') }}" alt="" />
                <img src="{{ asset('images/clients/serpmetrics.svg') }}" alt="" />
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>