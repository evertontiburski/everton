<?php include 'header.php'; ?>

<header class="header">
    <nav class="nav container">
        <a href="#" class="nav-logo">
            <img src="<?= URL_SITE . '/template/site/assets/img/logo.png' ?>" alt="<?= SITE_NOME ?>">
        </a>
        <ul class="nav-menu">
            <li><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#habilidades">Habilidades</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="home" class="hero container">
        <div class="hero-content">
            <h1>Desenvolvedor Web Criativo & Focado em Resultados</h1>
            <p>Transformando ideias em experiências digitais interativas e funcionais. Especializado em criar interfaces modernas e responsivas.</p>
            <div class="hero-buttons">
                <a href="#projetos" class="btn btn-primary">Ver Projetos</a>
                <a href="#contato" class="btn btn-secondary">Entrar em Contato</a>
            </div>
        </div>
    </section>

    <section id="sobre" class="section-container">
        <div class="container">
            <h2>Sobre Mim</h2>
            <p>
                A programação sempre me fascinou. Comecei a estudar PHP e JavaScript por conta própria, como um hobby, e me apaixonei pela capacidade de criar coisas do zero. Meu método sempre foi aprender a linguagem pura, para realmente entender o que acontece "por baixo dos panos".

Ainda tenho muito a aprender, mas já me sinto confortável com os conceitos básicos. Já construí sites com sistemas de login seguros, incluindo recuperação de senha e ativação por e-mail. Lembro-me de quando olhava para uma operação CRUD e a via como um obstáculo gigante; hoje, é uma das primeiras coisas que pratico em um novo projeto. Essa jornada do "impossível" ao "normal" é o que me move a continuar crescendo como desenvolvedor.
            </p>
        </div>
    </section>

    <section id="habilidades" class="section-container">
        <div class="container">
            <h2>Minhas Habilidades</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original.svg" alt="HTML5">
                    <h6>HTML5</h6>
                </div>
                <div class="skill-card">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original.svg" alt="CSS3">
                    <h6>CSS3</h6>
                </div>
                <div class="skill-card">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="JavaScript">
                    <h6>JavaScript</h6>
                </div>
                <div class="skill-card">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP">
                    <h6>PHP</h6>
                </div>
                <div class="skill-card">
                    <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/git/git-original.svg" alt="Git">
                    <h6>Git</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="projetos" class="section-container">
        <div class="container">
            <h2>Projetos Recentes</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="#" alt="Nome do Projeto 1">
                    <div class="project-content">
                        <h3>Nome do Projeto 1</h3>
                        <p>Uma breve descrição do projeto, suas funcionalidades e as tecnologias utilizadas.</p>
                        <div class="project-links">
                            <a href="#" target="_blank" class="btn btn-secondary">Ver Site</a>
                            <a href="#" target="_blank" class="btn-link">Repositório</a>
                        </div>
                    </div>
                </div>
                <div class="project-card">
                    <img src="#" alt="Nome do Projeto 2">
                    <div class="project-content">
                        <h3>Nome do Projeto 2</h3>
                        <p>Uma breve descrição do projeto, suas funcionalidades e as tecnologias utilizadas.</p>
                        <div class="project-links">
                            <a href="#" target="_blank" class="btn btn-secondary">Ver Site</a>
                            <a href="#" target="_blank" class="btn-link">Repositório</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="section-container">
        <div class="container contact-content">
            <h2>Vamos Conversar?</h2>
            <p>Estou aberto a novas oportunidades e colaborações. Sinta-se à vontade para entrar em contato através do e-mail ou das minhas redes sociais.</p>
            <a href="mailto:evertontiburski@gmail.com" class="btn btn-primary">evertontiburski@gmail.com</a>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>