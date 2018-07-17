<?php
require_once "config.php";
?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html, charset=utf-8">
	<title>VIDEO - CADASTRO COM PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div id="cadastro">
	<form method="post" action="?go=logar">
		<table id="login_table">
			<tr>
				<td>Usuário:</td>
				<td><input type="text" name="usuario" id="usuario" class="txt" maxlength="15" /></td>
			</tr>
			<tr>
				<td>Senha:</td>
				<td><input type="password" name="senha" id="senha" class="txt" maxlength="15" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Entrar" class="btn" id="btnEntrar"> 
				<!--	&nbsp;<a href="cadastro.php"><input type="button" value="Cadastre-se" class="btn" id="btnCad"></a></td> -->
			</tr>	
		</table>
	</form>
</div>

</body>
</html>

<?php
if(@$_GET['go'] == 'logar'){
	$user = $_POST['usuario'];
	$pwd = $_POST['senha'];

	if(empty($user)){
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}elseif(empty($pwd)){
		echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
	}else{
		$query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIO WHERE USUARIO = '$user' AND SENHA = '$pwd'"));
		if($query1 == 1){
			echo "<script>alert('Usuário logado com sucesso.');</script>"; 
			echo "<meta http-equiv='refresh' content='0, url=./_painel/'>";
		}else{
			echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
		}
	}
}

?>