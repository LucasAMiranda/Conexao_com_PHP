<!--Estabelecendo a conexão com o servidor de banco de dados -->
<?php
 $host = "localhost"
 $db = "residencia"
 $user = "root"
 $pass = "";
 $con = mysql_connect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
 mysql_select_db($db, $con);
 $query = sprintf("SELECT id, Nome, Email FROM Professores");
 $dados = mysql_query($query, $con) or die(mysql_error());
 $linha = mysql_fetch_assoc($dados);
 $total = mysql_num_rows($dados)

<?