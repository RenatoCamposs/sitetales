<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link rel="stylesheet" href="../../css/admin.css"/>
<script src="../../js/jquery.js"></script>
<script src="../../js/cycle.js"></script>
<script type="text/javascript">

$(document).ready(function(e) {
   $('#menu').hide();  
});

function show(){
	$('#menu').toggle(1000);
	
	}

</script>
</head>
<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "tales";
//$sql =  " CREATE DATABASE " . $banco .  " DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci";
$conn = mysqli_connect($host,$user,$senha,$banco);
header('Content-Type: text/html; charset=utf-8');
//$sql = "insert into texto_index (texto_main,text_two) values (' Telefones: 11 2036-3610 / 11 2036-3610  ', ' E-mail: talesaricanduva@gmail.com ')";
// mysqli_query($conn,$sql);
//$createbacksql = " create table backgrounds (id int(6) not null primary key, titulo varchar(20) not null, imagem varchar(100) not null);";
//$sql =  " insert into backgrounds (titulo,imagem) values ('Cursos','img/cursosback.jpg')";
//mysqli_query($conn,$sql);
?>
<body>
<div id="cursos">
<a href="index.php"><img id="logo"  src="../../img/header_logo.png"/></a>
</div>


<h1> Gerenciador de páginas </h1>
<menu>
<ul>
<li><a href="#planodefundo">Backgrounds</a></li>
<li><a href="#principal">Editar Textos da principal</a></li>
<li><a href="#cursos_id">Cursos</a></li>
<li><a href="#noticias_id">Notícias</a></li>
</ul>
</menu>

<h1 id="principal"> Página Principal </h1>
<hr>
<form method="POST" enctype="multipart/form-data" action="admin.php">
<p> Texto de Entrada <input type="text" name="main_text" /> </p>
<p>  Secundário </p> <p>  <textarea cols="50" name="sec_text" rows="7"></textarea> </p> 
<p> Endereço : <input type="text" name="text_ender" /> </p>
<p> Telefones : <input type="text" name="telefone" /> </p>
<p> Email : <input type="text" name="mail" /> </p>

<?php
$update_main_text = @$_POST["main_text"];
$update_main_two_text = @$_POST["sec_text"];
$update_ender_text = @$_POST["text_ender"];
$update_tele_text = @$_POST["telefone"];
$update_mail_text = @$_POST["mail"];

if( $update_main_text != ""){
$sql_update_text_main = "update texto_index set texto_main = '$update_main_text' where id = 1 ";
mysqli_query($conn,$sql_update_text_main);
}

if( $update_main_two_text != ""){
$sql_update_text_main_two = "update texto_index set text_two = '$update_main_two_text' where id = 1 ";
mysqli_query($conn,$sql_update_text_main_two);
}

if($update_ender_text != ""){
$sql_update_text_ender = "update texto_index set text_two = '$update_ender_text' where id = 2 ";
mysqli_query($conn,$sql_update_text_ender);
}

if($update_tele_text != ""){
$sql_update_text_tele = "update texto_index set texto_main = '$update_tele_text' where id = 3 ";
mysqli_query($conn,$sql_update_text_tele);
}

if($update_mail_text != ""){
$sql_update_text_mail = "update texto_index set text_two = '$update_mail_text' where id = 3 ";
mysqli_query($conn,$sql_update_text_mail);
}

?>
<input name="submit" value="Upload" type="submit">
</form>


<h1 id="planodefundo">Planos de Fundo</h1>
<hr>
<form method="POST" enctype="multipart/form-data" action="admin.php">
<p> Principal<input type="file" name="img_main" /> Unidades<input type="file" name="img_uni" /> </p> 
<p> Parceiros<input type="file" name="img_par" />  Contato<input type="file" name="img_con" /> </p>
<p> Notícias<input type="file" name="img_not" />   Cursos<input type="file" name="img_cur" /> </p>
<input name="submit" value="Upload" type="submit">
<?php
header('Content-Type: text/html; charset=utf-8');
$pastaimg = 'img/';

	
	@$img_main = $pastaimg . basename($_FILES['img_main']['name']);
	@$img_par  = $pastaimg . basename($_FILES['img_par']['name']);
	@$img_not  = $pastaimg . basename($_FILES['img_not']['name']);
	@$img_uni  = $pastaimg . basename($_FILES['img_uni']['name']);
	@$img_con  = $pastaimg . basename($_FILES['img_con']['name']);
	@$img_cur  = $pastaimg . basename($_FILES['img_cur']['name']);
	
if( move_uploaded_file(@$_FILES["img_main"]["tmp_name"], $img_main) ) {
        echo "The file ". basename( $_FILES["img_main"]["name"] ). " has been uploaded.";
        $sql_query = "update backgrounds set imagem = '$img_main' where id = 1 ";
        mysqli_query($conn,$sql_query);
		 
		}
if( move_uploaded_file(@$_FILES["img_par"]["tmp_name"], $img_par) ) {
        echo "The file ". basename( $_FILES["img_par"]["name"] ). " has been uploaded."; 
        $sql_query2 = "update backgrounds set imagem = '$img_par' where id = 4 ";
        mysqli_query($conn,$sql_query2);
		}
if( move_uploaded_file(@$_FILES["img_not"]["tmp_name"], $img_not) ) {
        echo "The file ". basename( $_FILES["img_not"]["name"] ). " has been uploaded.";
        $sql_query3 = "update backgrounds set imagem = '$img_not' where id = 6 ";
        mysqli_query($conn,$sql_query3); 
		}
if( move_uploaded_file(@$_FILES["img_uni"]["tmp_name"], $img_uni) ) {
        echo "The file ". basename( $_FILES["img_uni"]["name"] ). " has been uploaded."; 
        $sql_query4 = "update backgrounds set imagem = '$img_uni' where id = 2 ";
        mysqli_query($conn,$sql_query4);
		}
if( move_uploaded_file(@$_FILES["img_con"]["tmp_name"], $img_con) ) {
        echo "The file ". basename( $_FILES["img_cur"]["name"] ). " has been uploaded."; 
        $sql_query5 = "update backgrounds set imagem = '$img_con' where id = 3 ";
        mysqli_query($conn,$sql_query5);
		}
if( move_uploaded_file(@$_FILES["img_cur"]["tmp_name"], $img_cur) ) {
        echo "The file ". basename( $_FILES["img_cur"]["name"] ). " has been uploaded."; 
        $sql_query6 = "update backgrounds set imagem = '$img_cur' where id = 5 ";
        mysqli_query($conn,$sql_query6);
		}
		
?>
</form>

<form method="POST" action="admin.php">
<h1 id="cursos_id"> Cursos </h1>
<hr>
<h2> Criar </h2>

<p>  
Título <input type="text" name="curso_titulo"/>
Dias <input type="text" name="curso_dias"/>
Início do curso <input type="text" name="curso_inicio"/> 
Fim do curso <input type="text" name="curso_fim"/>  <br>
Horário <input type="text" name="curso_horario"/>
Tipo <select name="curso_tipo">
<option>Vestibular</option>
<option>Vestibulinho</option>
</select> <br>
Descrição  <br> <br> <textarea name="curso_descricao" rows="9" cols="100"> </textarea> <input name="create_curse" type="submit"> </p>
<?php
@$curso_titulo = $_POST['curso_titulo'];
@$curso_tipo = $_POST['curso_tipo'];
@$curso_inicio = $_POST['curso_inicio'];
@$curso_fim = $_POST['curso_fim'];
@$curso_horario = $_POST['curso_horario'];
@$curso_dias = $_POST['curso_dias'];
@$curso_descricao = $_POST['curso_descricao'];

if(isset($_POST['create_curse'])){
$sql_create_curse = "insert into cursos ( curso_titulo, curso_descricao, curso_inicio, curso_fim, curso_dias, curso_horario, curso_tipo) 
values('$curso_titulo', '$curso_descricao', '$curso_inicio', '$curso_fim', '$curso_dias', '$curso_horario', '$curso_tipo' )";
mysqli_query($conn,$sql_create_curse);
}
?>
</form>


<h2> Deletar  </h2>

<form action="admin.php"  method="POST">
<p> Vestibulares </p>


<select name="vestibular_del">
	<option> Vestibulares </option> 
<?php 
$sql_del_query_select_vestibular = " select * from cursos where curso_tipo = 'Vestibular' ";
$sql_del_query_select_vestibulinho = " select * from cursos where curso_tipo = 'Vestibulinho' ";
$result_vestibular = mysqli_query($conn,$sql_del_query_select_vestibular);
$result_vestibulinho = mysqli_query($conn,$sql_del_query_select_vestibulinho);

while ($coluna = mysqli_fetch_assoc($result_vestibular)) {
 echo "<option>" . $coluna['curso_titulo'] .  "</option> ";
 } 
 ?>
</select>
  
<p> Vestibulinhos </p>

<select name="vestibulinho_del">
<option> Vestibulinhos </option>
<?php

while ($coluna = mysqli_fetch_assoc($result_vestibulinho)) {
 echo "<option>" . $coluna['curso_titulo'] .  "</option> ";
 } 

 ?>
</select>
<?php
@$vestibular_coluna = $_POST['vestibular_del'];
@$vestibulinho_coluna = $_POST['vestibulinho_del'];
$deletar_vestibular = "delete from cursos where curso_titulo = '$vestibular_coluna' ";
$deletar_vestibulinho = "delete from cursos where curso_titulo = '$vestibulinho_coluna' ";
mysqli_query($conn,$deletar_vestibular);
mysqli_query($conn,$deletar_vestibulinho);
?>
<input  type="submit"/>
</form>
</body>

<h1 id="noticias_id"> Notícias </h1>
<hr>
<h2> Criar </h2>
<form action="admin.php" enctype="multipart/form-data" method="POST">
<p>  Título <input name="not_title" type="text"/> </p>
<p>   Descrição  <br> <br> <textarea name="not_post" rows="9" cols="100"></textarea> </p>
<p> Arquivo <input type="file" name="not_arquivo"/> </p>

<?php
if( @$_POST['not_title'] != ""){
	
$not_title = $_POST['not_title'];
$not_post = $_POST['not_post'];
$not_arquivo = $pastaimg . basename($_FILES['not_arquivo']['name']);
$tipo_notarquivo = pathinfo($not_arquivo,PATHINFO_EXTENSION);
if($tipo_notarquivo == "pdf"){ echo "piru de macaco"; }                                                                                                                                                                 
move_uploaded_file( $_FILES["not_arquivo"]["tmp_name"], $not_arquivo);
$sql_create_news = " insert into noticias (titulo,post,arquivo) values ('$not_title', '$not_post' , '$not_arquivo') ";
mysqli_query($conn,$sql_create_news);

}

?>
<input name="not_button" type="submit"/>
</form>
<h2> Deletar  </h2>

<form action="admin.php" method="POST">
<p> Selecionar Post </p>

<select name="post">
	<option> Posts </option> 
<?php 
$sql_del_query_select_noticias = " select * from noticias ";
$result_noticias = mysqli_query($conn,$sql_del_query_select_noticias);

while ($coluna = mysqli_fetch_assoc($result_noticias)) {
 echo "<option>" . $coluna['titulo'] .  "</option> ";
 } 
 ?>
</select>
<?php
@$post = $_POST['post'];
$deletar_noticia = "delete from noticias where titulo = '$post' ";
mysqli_query($conn,$deletar_noticia);
?>
<input value="deletar" type="submit"/>
</form>
</body>


</body>
</html>
