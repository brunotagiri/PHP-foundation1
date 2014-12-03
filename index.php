<?php 
require_once 'cabecalho.php'; 
require_once 'menu.php';

if ($_GET['redireciona'] == 'contato') {
    require_once 'contato.php';
}
elseif ($_GET['redireciona'] == 'empresa') {
    require_once 'empresa.php';
}
elseif ($_GET['redireciona'] == 'produtos') {
    require_once 'produtos.php';
}
elseif ($_GET['redireciona'] == 'servicos') {
    require_once 'servicos.php';
}
elseif ($_GET && $_GET['redireciona'] != 'contato' && $_GET['redireciona'] != 'empresa' 
    && $_GET['redireciona'] != 'produtos' && $_GET['redireciona'] != 'servicos') 
{ ?>
    <h1>Página não encontrada!</h1>
<?php }
require_once 'rodape.php'; 

?>  
      
      
    