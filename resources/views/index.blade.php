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
            <a href="logar" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Login</a>
            <a href="https://wa.me/+5532988097534" class="button">Contato</a>
        </nav>
    </header>

    <section class="hero container">
        <h1>Full Stack PHP/Laravel</h1>
        <h2>Eu desenho e codifico projetos bonitos e amo o que faço.</h2>
        <img class="hero-avatar" src="{{ asset('images/avatar.svg') }}" alt="" />
        <img class="hero-device" src="{{ asset('images/hero-devices.svg') }}" alt="" />
    </section>

    <section class="intro">
        <div class="container">
            <div class="box">
                <p class="title">Oi, eu sou Luiz Fernando, tudo bem?</p>
                <p class="subtitle">Sou formado em Análise e Desenvolvimento de Sistemas pelo Instituto Vianna Jr
                e desde então tenho me aprimorado em PHP/Laravel para desenvolvimento de sites e sistemas.
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
                            <img src="{{ asset('images/code.svg') }}" alt="" />
                        </div>
                        <p class="skill-title">Back-end Developer</p>
                        <p class="skill-desc">Eu valorizo estruturas simples e customizadas.</p>
                        <p class="skill-sub">Coisas que goste de codigicar</p>
                        <p class="skill-txt">sistemas e páginas Web</p>
                        <p class="skill-sub">Ferramentas que uso</p>
                        <div class="skill-txt">
                            <ul>
                                <li>VsCode</li>
                                <li>PHP</li>
                                <li>Laravel</li>
                                <li>MySQLl</li>
                                <li>GitHub</li>
                            </ul>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill-icon">
                            <img src="{{ asset('images/design.svg') }}" alt="" />
                        </div>
                        <p class="skill-title">Front-end Developer</p>
                        <p class="skill-desc">Gosto de codificar projetos do zero, trazendo ideias à vida no navegador.</p>
                        <p class="skill-sub">Linguagens que uso</p>
                        <p class="skill-txt">HTML, CSS, JavaScript, PHP/Laravel</p>
                        <p class="skill-sub">Ferramentas que uso</p>
                        <div class="skill-txt">
                            <ul>
                                <li>Html e CSS</li>
                                <li>JavaScript</li>
                                <li>Bootstrap</li>
                                <li>GitHub</li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="skill">
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
                    </div>-->
                </di>
            </div>
        </div>
    </section>

    <section class="recent-work container">
        <p class="title">Meus trabalhos recentes</p>
        <p class="subtitle"> Aqui estão alguns dos trabalhos que já fiz. Quer ver mais <a href="">Entre em contato.</a></p>
        <div class="grid">
            <div class="item">
                <img class="image" src="{{ asset('images/works/Logo_PSI_Natalia.png') }}" alt="" />
                <div class="overlay">
                    <p>Natalia Cabette Psicóloga</p>
                    <a href="http://192.168.1.11/" class="button">Visite o website</a>
                </div>
            </div>
            <!--<div class="item">
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
            </div>-->
        </div>

        <a href="" class="button seemore">Deseja ver mais?</a>
    </section>

    <!--<section class="worked-with">
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
    </section>-->

    <section class="collab">
        <p class="title">Tem interesse em fazer algum trabalho comigo?</p>
        <p class="subtitle">Estou sempre aberto a discutir projetos e possíveis parcerias de trabalho.</p>
        <a href="https://wa.me/+5532988097534" class="button">Começar uma conversa</a>
    </section>

    <!--<section class="testimonials container">
        <p class="title">Depoimentos</p>
        <p class="subtitle">As pessoas com quem já trabaçhei disseram coisas boas ao meus respeito</p>

        <div class="slider">
            <input checked id="slider-1" name="slider" type="radio">
            <input id="slider-2" name="slider" type="radio">
            <div class="slider-area">
                <div class="slider-item">
                    <img src="{{ asset('images/avatars/pascal.png') }}" alt="" />
                    <p class="description">"Trabalhar com Bruno foi um prazer e nós esperamos poder trabalhar juntos
                    novamente. Ele é o tipo de designer que você pode confiar seu projeto desde o início até o fim."</p>
                    <p class="name">Antonio Golçalves</p>
                    <p class="role">Diretor criativo, Empresa X</p>
                </div>
                <div class="slider-item">
                    <img src="{{ asset('images/avatars/alvin.png') }}" alt="" />
                    <p class="description">“Bruno é um excelente comunicador e possui sensibilidade e confiança para se
                        aprofundar nos projetos e entender de fato o que deve ser feito para sair um resultado
                        excepcional.”</p>
                    <p class="name">Mateus Dantar</p>
                    <p class="role">CEO, imobiliaria ABC</p>
                </div>
            </div>
            <div class="slider-nav">
                <label class="n1" for="slider-1"></label>
                <label class="n2" for="slider-2"></label>
            </div>
        </div>
    </section>-->

    <!--<section class="cta">
        <div class="overlay"></div>
        <div class="container">
            <div class="area">
                <div class="area-side">
                    <p class="title">Comece um projeto</p>
                </div>
                <div class="area-side">
                    <p class="subtitle">Tem interesse em trabalhar junto? Vamos agendar uma reunião</p>
                </div>
                <div class="area-side">
                    <a href="" class="button">Agendar reunião</a>
                </div>
            </div>
        </div>
    </section>-->

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

    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

</body>
</html>