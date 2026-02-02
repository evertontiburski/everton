<?php

namespace Everton\core;

class Controlador
{
    /** @var string O caminho para a pasta de templates */
    protected string $templatePath;

    /**
     * O construtor define o caminho base para os templates deste controlador.
     * @param string $diretorio O caminho relativo a partir da raiz do projeto.
     */
    public function __construct(string $diretorio)
    {
        // Usamos dirname(__DIR__, 2) para pegar o caminho absoluto da raiz do projeto.
        // Isso torna o código mais robusto e evita erros de "caminho não encontrado".
        $this->templatePath = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . $diretorio;
    }

    /**
     * Renderiza um arquivo de template, passando dados para ele.
     * @param string $arquivo O nome do arquivo de template (ex: 'index.php').
     * @param array $dados Um array de dados para serem usados no template.
     */
    protected function render(string $arquivo, array $dados = []): void
    {
        $caminhoCompleto = $this->templatePath . DIRECTORY_SEPARATOR . $arquivo;

        if (!file_exists($caminhoCompleto)) {
            echo "Erro: Template não encontrado em: {$caminhoCompleto}";
            return;
        }

        // Transforma as chaves do array em variáveis (ex: $dados['titulo'] vira $titulo)
        extract($dados);

        // Inicia o buffer de saída para capturar o HTML do arquivo
        ob_start();

        // Inclui o arquivo do template. As variáveis ($titulo, etc.) estarão disponíveis aqui.
        include $caminhoCompleto;

        // Limpa o buffer e envia o conteúdo para o navegador.
        ob_end_flush();
    }
}