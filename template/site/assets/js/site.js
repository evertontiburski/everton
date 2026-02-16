document.addEventListener("DOMContentLoaded", () => {
    
    // 1. Interceptar cliques nos links de navegação
    const links = document.querySelectorAll('.nav-menu a');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            // Pega o destino (ex: #contato)
            const targetId = link.getAttribute('href');
            
            // Define a nova URL (ex: /contato) baseada no ID
            // Remove o # para ficar bonito na URL
            const routeName = targetId.replace('#', ''); 
            const newUrl = routeName === 'home' ? '/' : `/${routeName}`;

            // Muda a URL sem recarregar
            window.history.pushState({ section: targetId }, "", newUrl);

            // Realiza a navegação (scroll)
            scrollToSection(targetId);
        });
    });

    // 2. Tratar o botão "Voltar" do navegador
    window.onpopstate = (event) => {
        if (event.state && event.state.section) {
            scrollToSection(event.state.section);
        } else {
            // Se não houver estado (ex: voltou para a home inicial), define padrão
            scrollToSection('#home');
        }
    };

    // 3. Tratar acesso direto via URL (ex: usuário entra direto em /contato)
    handleInitialLoad();
});

function scrollToSection(id) {
    const section = document.querySelector(id);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

function handleInitialLoad() {
    const path = window.location.pathname.replace('/', ''); // Pega "contato" da URL
    
    // Mapa de rotas para IDs
    const routes = {
        '': '#home',
        'sobre': '#sobre',
        'habilidades': '#habilidades',
        'projetos': '#projetos',
        'contato': '#contato'
    };

    const targetId = routes[path];
    if (targetId) {
        scrollToSection(targetId);
    }
}