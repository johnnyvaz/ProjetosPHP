<!DOCTYPE html>
<html>
<head>
	<title>Processamento de Upload de Banco de Dados</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="http://andeserp.com.br/wiki/skins/common/style.css" type="text/css" media="all" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body><pre>
<?php
include "funcao.php";
if (!extension_loaded('zip')) {
    echo( "Nao esta habilitado php_zip.dll, edite seu php.ini" );
    //no php.ini descomente essa linha, se nao existir basta cria-la: extension=php_zip.dll
    exit;    
}

// Pasta onde o arquivo vai ser salvo
//$_UP['pasta'] = '/hd200/bkp_clientes/bd_fdb/processando/';
$_UP['pasta'] = 'uploads/processando/';
$_UP['pastaDest'] = '/hd200/bkp_clientes/bd_fdb/'; 
//$_UP['pastaDest'] = 'uploads/'; 
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 3000000000; //1024 * 1024 * 100; // 2Mb
 
// Array com as extensões permitidas
$_UP['extensoes'] = array('zip');
 
// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
$_UP['renomeia'] = false;
 
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo']['error'] != 0) {
die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
exit; // Para a execução do script
}
 
// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
 
// Faz a verificação da extensão do arquivo
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {

echo "Por favor, envie arquivos com as seguintes extensões: .zip, .7z e .rar";
echo "<br><a href='index.php'>Voltar</a>";
exit();
}
// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
echo "O arquivo enviado é muito grande, envie arquivos de até 1GB.";
echo "<br><a href='index.php'>Voltar</a>";
exit();
}
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else {
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
$nome_final = time().'.jpg';
} else {
// Mantém o nome original do arquivo
$nome_final = $_FILES['arquivo']['name'];
}
// Depois verifica se é possível mover o arquivo para a pasta escolhida
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo

//descompactar arquivo .zip
$zip = new ZipArchive();
    if( $zip->open( $_UP['pasta'] . $nome_final )  === true)
    {     
        $zip->extractTo($_UP['pastaDest']);
        //  $zip->extractTo($_UP['pasta'] , array('string.txt','lorem.txt'));
        $zip->close();
    }
echo "<p>Upload efetuado com sucesso!</p>";
echo "<br><a href='index.php'>Voltar</a>";
} else {
// Não foi possível fazer o upload, provavelmente a pasta está incorreta
echo "Não foi possível enviar o arquivo, tente novamente";
echo "<br><a href='index.php'>Voltar</a>";
exit();
}
 
}
?>
</pre>
</body>
</html>