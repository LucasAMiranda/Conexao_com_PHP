
<!DOCTYPE html>
<html>
<head>
	<title>Acessando o Banco de dados</title>
</head>
<body>
	<h1>Retorna a Tabela do Banco do dados</h1>

	<?php

		if($total > 0){
			do{

			

			?>

			<p><?=$linha['Nome']?> / <?=$linha['Email']?></p>

			<?php

				}while($linha = mysql_fetch_assoc($dados));
			?>

		}
	</body>
</html>

<?php
mysql_free_result($dados);
?