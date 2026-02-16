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

        //Exemplos
        // 2. (Futuro) Buscar informações do "Sobre" do banco de dados
        // $sobre = (new SobreModel())->buscarPrimeiro();
        
        // 3. (Futuro) Buscar informações de "Contato"
        // $contato = (new ContatoModel())->buscarPrimeiro();


        // 4. Empacota tudo em um único array para a view
        $dados = [
            'posts' => $posts
            // 'sobre'   => $sobre,  // Passa os dados para a view usar
            // 'contato' => $contato
        ];

        $this->render('index.php', $dados);
    }
}