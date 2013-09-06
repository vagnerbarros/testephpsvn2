<?php
// Passe para este script o arquivo da NFe
// Ex. testaDANFE.php?nfe=35100258716523000119550000000033453539003003-nfe.xml

require_once('../libs/DanfeNFePHP.class.php');

//$arq = '../exemplos/xml/26130110094258000158550010000032591000032593-nfe.xml';
//$arq = '../exemplos/xml/26130110094258000158550010000032631000032634-nfe.xml';

$arq = $_GET['dir'].$_GET['xml'];

if ( is_file($arq) ){
	
    $docxml = file_get_contents($arq);
    $danfe = new DanfeNFePHP($docxml, 'P', 'A4','../images/team office.png','I','');
    $id = $danfe->montaDANFE();
    $teste = $danfe->printDANFE($id.'.pdf','I');
	echo 'teste';
}
?>
