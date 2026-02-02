<?php

namespace Everton\controller;

use Everton\core\Controlador;
use Everton\model\postModel;

class SiteController extends Controlador
{
    /**
     * O construtor chama o construtor da classe pai (Controlador),
     * informando a ele onde estão os arquivos de template deste controller.
     */
    public function __construct()
    {
        // Com base na sua estrutura de imagem, o caminho é este:
        parent::__construct('template/site/views');
    }

    /**
     * Renderiza a página inicial.
     */
    public function index(): void
    {
        $posts = (new postModel())->buscar('status = 1 ORDER BY id_post DESC');
        
        $dados = ['posts' => $posts];

        $this->render('index.php', $dados);
    }

    /**
     * Renderiza a página de contato.
     */
    public function contato(): void
    {
        $dados = ['titulo' => 'Fale Conosco'];
        $this->render('contato.php', $dados);
    }

    /**
     * Renderiza a página "sobre".
     */
    public function sobre(): void
    {
        $dados = ['titulo' => 'Sobre Nós'];
        $this->render('sobre.php', $dados);
    }
}