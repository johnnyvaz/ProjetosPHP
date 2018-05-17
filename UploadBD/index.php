<!DOCTYPE html>
<html>
<head>
	<title>Processamento de Upload de Banco de Dados</title>
	<meta charset="iso-8859-1">
	<link rel="stylesheet" href="http://andeserp.com.br/wiki/skins/common/style.css" type="text/css" media="all" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
<h2>Envio de Banco de Dados</h2>
	<p>Preencha os dados para ser notificado quando o arquivo estiver sido processado(em teste)</p>
	<h3>Será aceito somente arquivos com extensão .zip</h3>
		
    <form method="post" id="envioBD" action="recebe_upload.php"  enctype="multipart/form-data" onsubmit="validaForm(); return false;" class="form">
		<p class="nome">
            <label for="nome">Nome do Técnico que está enviando</label>
            <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
		</p>
                
            <p class="cliente">
            <label for="cliente">Nome do Cliente</label>
            <input type="text" name="cliente" id="cliente" placeholder="o nome do cliente como está registrado no crm" />
		</p>
               
		<p class="emaildest">
            <label for="emaildest">E-mail para notificação</label>
            <input type="text" id="emaildest" placeholder="nome_sobrenome@andeserp.com.br" />
		</p>

        <P>
            <label>Arquivo:</label>
            <input type="file" name="arquivo" />
        </P>

		<p class="submit">
            <input type="submit" value="Enviar" />
		</p>
	</form>
    <p>Os arquivos .zip serão descompactados automaticamente</p>
    <script type="text/javascript">
        function validaForm()
        {
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#cliente').val() == '' && !erro)
            {
                alert('Você precisa preencher o nome do Cliente');erro = true;
            }
            if($('#emaildest').val() == '' && !erro)
            {
                alert('Você precisa preencher o E-mail que receberá a notificação');erro = true;
            }
            //se nao tiver erros
            if(!erro)
            {
                $('#envioBD').submit();

            }
        }
    </script>
</body>
</html>