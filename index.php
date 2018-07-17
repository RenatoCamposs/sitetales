﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery.js"></script>
<script src="js/cycle.js"></script>
<script type="text/javascript">

$(document).ready(function(e) {
   $('#menu').hide();  
});

function show(){
	$('#menu').toggle(200);
	
	}

</script>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "tales";
$conn = mysqli_connect($host,$user,$senha,$banco);
$sql_main = " select * from backgrounds where id = 1 "; $result_main = mysqli_query($conn,$sql_main);
$sql_contato = " select * from backgrounds where id = 3 "; $result_contato = mysqli_query($conn,$sql_contato);
$sql_parceiros = " select * from backgrounds where id = 4 "; $result_parceiros = mysqli_query($conn,$sql_parceiros);
$sql_unidades = " select * from backgrounds where id = 2 "; $result_unidades = mysqli_query($conn,$sql_unidades);
$sql_main_text = " select * from texto_index where id = 1 "; $result_main_text = mysqli_query($conn,$sql_main_text);
$sql_unidade_text = " select * from texto_index where id = 2 "; $result_unidade_text = mysqli_query($conn,$sql_unidade_text);
$sql_contato_text = " select * from texto_index where id = 3 "; $result_contato_text = mysqli_query($conn,$sql_contato_text);
?>
<header style="background-image:url(<?php while( $coluna = mysqli_fetch_assoc($result_main) ) { echo  $coluna['imagem']; } ?>);">
<menu id="menuall">
<ul id="menu">
<li><a  href="#unidades">Unidade</a></li>
<li><a href="cursos.php">Cursos</a></li>
<li><a href="blog.php">Notícias</a></li>
<li><a  href="#contato">Contato</a></li>
<li><a  href="#">Parceiros</a></li>
</ul>
<img OnClick="show()" src="img/menu.fw.png"/>
</menu>

<img id="logo" src="img/header_logo.png"/>

<div id="conq">
<?php while( $coluna = mysqli_fetch_assoc($result_main_text) ) { echo  "<h1>" . $coluna['texto_main'] . "</h1>" ; echo  "<h2>" . $coluna['text_two'] . "</h2>"; } ?>
<a href="cursos.php"><h3> Iniciar </h3></a>
</div>

</header>



<div style="background-image:url(<?php while($coluna = mysqli_fetch_assoc($result_unidades)) { echo  $coluna['imagem']; } ?>);" id="unidades">
<h1> Unidades <img src="img/unity.png"</h1>
<hr>

<h6>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3657.2199271750223!2d-46.519273299999995!3d-23.5605435!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5df69c620541%3A0x597d7a233d0ee8c3!2sAv.+Rio+das+Pedras%2C+311+-+Jardim+Aricanduva%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1428262238622" width="70%" height="450" frameborder="0"></iframe>
</h6>
<p> Endereço : <?php while($coluna = mysqli_fetch_assoc($result_unidade_text)) { echo $coluna['text_two'];  } ?> </p>
</div>


<div style="background-image:url(<?php while($coluna = mysqli_fetch_assoc($result_parceiros)) { echo  $coluna['imagem']; } ?>);" id="parceiros">
<h1> Parceiros <img src="img/parceria.png"> </h1>
<hr>

<h6>
<div style="float:left; margin-left:200px;" id="par">
<a href="http://www.etecsaomateus.com.br/">
<img src="img/logo_etec.jpg"/>
<h1>ETEC São Mateus</h1>
</a>
</div>
<div  id="par">
<a href="http://colegiocostaaguiar.com.br/">
<img src="img/logo_ca.png"/>
<h1>Costa Aguiar</h1>
</a>
</div>
</h6>


</div>


<footer>

<menu>
<ul>
<li><a href="#header">Topo</a></li>
<li><a href="index.php">Home</a></li>
<li><a href="#unidades">Unidade</a></li>
<li><a href="cursos.php">Cursos</a></li>
<li><a href="#">Contato</a></li>
<li><a href="#parceiros">Parceiros</a></li>
<li><a href="#">Notícias</a></li>
</ul>
</menu>
<hr>
<p> <?php while($coluna = mysqli_fetch_assoc($result_contato_text)) { echo $coluna['texto_main'] . "<br>" . $coluna['text_two'];  } ?>  </p>
<h6> Desenvolvido pela New Academy &copy; </h6>
</footer>

</body>
</html>
