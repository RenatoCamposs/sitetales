<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link rel="stylesheet" href="css/cursos.css"/>
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

<?php
$banco = 'tales';
$userdb = 'root';
$senhadb = '';
$hostdb = 'localhost';
 $conndb = mysqli_connect($hostdb,$userdb,$senhadb,$banco);
// $sql = "create table cursos ( id int(6) primary key auto_increment, curso_titulo varchar(30) not null, curso_descricao varchar(300) not null, 
// curso_inicio varchar(20) not null, curso_fim varchar(20) not null, curso_dias varchar(100) not null, curso_horario varchar(80) not null, 
// curso_tipo varchar(30) not null )";
$sql_vestibular = " select * from cursos where curso_tipo = 'Vestibular' ";
$result_vestibular = mysqli_query($conndb,$sql_vestibular);
$sql_vestibulinho = " select * from cursos where curso_tipo = 'Vestibulinho' ";
$result_vestibulinho = mysqli_query($conndb,$sql_vestibulinho);
$curso_back = " select * from backgrounds where id = 5 "; $result_curso_back = mysqli_query($conndb,$curso_back);
 
?>

</head>

<body style="background-image:url( <?php while( $coluna = mysqli_fetch_assoc($result_curso_back) ) { echo  $coluna['imagem']; } ?>) ;">



<div id="cursos">

<menu id="menuall">
<ul id="menu">
<li><a onClick="unidades()" href="#">Unidade</a></li>
<li><a href="cursos.php">Cursos</a></li>
<li><a href="#">Notícias</a></li>
<li><a onClick="contato()" href="#">Contato</a></li>
<li><a onClick="contato()" href="#">Parceiros</a></li>
</ul>
<img OnClick="show()" src="img/menu.fw.png"/>
</menu>
<img id="logo"  src="img/header_logo.png"/>



<h1> <img src='img/cursos.fw.png'> Vestibulares </h1> <hr>


<?php

    while($coluna = mysqli_fetch_assoc($result_vestibular)) {

		echo "<div id='curso2'> \n ";
if($coluna['id'] % 2 == 1 ) {
			echo "<h1 style='background-color:rgba(52, 152, 219,1); margin-left:0px'>" . $coluna['curso_titulo'] . " </h1>  \n "; }
else{ echo "<h1 style='background-color:rgba(20,200,150,1); margin-left:0px'>" . $coluna['curso_titulo'] . " </h1>  \n ";  }
		echo "<h2>" . $coluna['curso_descricao'] . "</h2> \n ";
		echo "<p> <strong> INÍCIO: </strong> " . $coluna['curso_inicio'] .   "  -  <strong>TÉRMINO:</strong> " . $coluna['curso_fim'];
		echo " \n <p><strong> Dias: </strong> " . $coluna['curso_dias'] . " <p> ";
		echo " \n <p><strong>HORÁRIOS: </strong>" . $coluna['curso_horario'] . "</p>";
		echo " \n </div>";
    };


?>	

<h1> <img src="img/cursos.fw.png"> Vestibulinhos </h1>
<hr>


<?php

    while($coluna = mysqli_fetch_assoc($result_vestibulinho)) {
		echo "<div id='curso2'> \n ";
if($coluna['id'] % 2 == 1 ){
	echo "<h1 style='background-color:rgba(52, 152, 219,1); margin-left:0px'>" . $coluna['curso_titulo'] . " </h1>  \n "; }
else{ echo "<h1 style='background-color:rgba(20,200,150,1); margin-left:0px'>" . $coluna['curso_titulo'] . " </h1>  \n ";  }

		echo "<h2>" . $coluna['curso_descricao'] . "</h2> \n ";
		echo "<p> <strong> INÍCIO: </strong> " . $coluna['curso_inicio'] .   "  -  <strong>TÉRMINO:</strong> " . $coluna['curso_fim'];
		echo " \n <p><strong> Dias: </strong> " . $coluna['curso_dias'] . " <p> ";
		echo " \n <p><strong>HORÁRIOS: </strong>" . $coluna['curso_horario'] . "</p>";
		echo " \n </div>";
    };


?>	


<h1 id="tech" style="text-align:center; margin:0 auto; width:300px; border-radius:5px; border:1px solid #EEE; "> Técnico </h1>

				</div>

<footer style="margin-top:30px;">

<menu>
<ul>
<li><a onClick="_home()" href="#">Topo</a></li>
<li><a onClick="_home()" href="#">Home</a></li>
<li><a onClick="unidades()" href="#">Unidade</a></li>
<li><a href="#">Cursos</a></li>
<li><a onClick="contato()" href="#">Contato</a></li>
<li><a onClick="contato()" href="#">Parceiros</a></li>
<li><a onClick="contato()" href="#">Gabaritos e Listas</a></li>
</ul>
</menu>
<hr>
<h6> Desenvolvido pela New Academy &copy; </h6>
</footer>
</body>
</html>
