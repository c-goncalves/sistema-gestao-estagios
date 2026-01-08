<?php
/**
 * Rotas 
 * COMO USAR:
 * $router->get('rota', 'página.php');
 * $router->get('rota/{parametro}', 'página.php');
 * $router->get('rota/{param1}/{param2}', 'página.php');
 */

if (!isset($router)) {
    die('<b>Erro:</b> O roteador não foi inicializado antes de carregar as rotas.');
}

// RAIZ
$router->get('', 'Home');
// $router->get('/', 'home'); 

// ASSESTS
$router->get('assest', 'assets');

// SOLICITAÇÕES 
$router->get('solicitacao', 'Solicitacao');// aceita /solicitacao e /solicitacao/*
$router->get('solicitacao/termo/{tipo}', 'Solicitacao@tce');
$router->get('solicitacao/termo/{tipo}', 'Solicitacao@pae');

// GERAR PDF (teste temporário)
$router->get('solicitacao/form/pdf/checklist-termo', '_pdf/checklist_termo');
$router->get('solicitacao/form/pdf/gerar-termo', '_pdf/gerar_termo_estagio');
$router->get('solicitacao/form/pdf/gerar-plano', '_pdf/gerar_plano_atv');
$router->get('solicitacao/form/pdf/gerar-relatorio-semestral', '_pdf/gerar_relatorio_semestral');
$router->get('solicitacao/form/pdf/gerar-termo-aditivo-xvi', '_pdf/gerar_termo_aditivo_n_obrig');
$router->get('solicitacao/form/pdf/gerar-termo-aditivo-obrigatorio', '_pdf/gerar_termo_aditivo_obrig');

// ACOMPANHAMENTO

$router->get('andamento', 'Acompanhamento');
// $router->get('andamento', 'andamento/index');
// $router->get('andamento/{step}', 'andamento/index');

// ENCERRAMENTO 
$router->get('encerramento', 'Encerramento');
// $router->get('encerramento/{step}', 'encerramento/index');

// RECURSOS 
$router->get('recursos', 'Recursos');

// NOTÍCIAS 
// $router->get('noticias', 'noticias/index');
// $router->get('noticias/{step}', 'noticias/index');

// ESTÁTICAS 
$router->get('sobre', 'sobre');
$router->get('contato', 'contato');

?>
