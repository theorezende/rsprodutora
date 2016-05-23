	<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RS Produtora 2016</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>RS</span>Produtora</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Usuario <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class=""><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class=""><a href="listarArtista.php"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg>Artista</a></li>
			<li class=""><a href="listarContrato.php"><svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"></use></svg>Contrato</a></li>
			<li class=""><a href="listarAcao.php"><svg class="glyph stroked video"><use xlink:href="#stroked-video"></use></svg>Ação</a></li>
			<li class="active"><a href="listarEvento.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Evento</a></li>
			<li class=""><a href="listarEmpresa.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Empresa</a></li>
			<li class=""><a href="listarUsuario.php"><svg class="glyph stroked lock"><use xlink:href="#stroked-lock"></use></svg> Usuário</a>
		</ul>

	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Eventos</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Eventos</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Listar Eventos <a href="cadastrarEvento.php" style="float:right">Cadastrar Evento</a></div>
					<div class="panel-body">

						<?php
						$con = mysqli_connect("mysql.hostinger.com.br","u766907098_root","123456","u766907098_rspro");
						$result = mysqli_query($con,'SELECT id_evento,nome,tipo,data_criacao,data_inicio,descricao,qt_horas,valor FROM evento');

						echo "<table class='db-table' cellpadding='0' cellspacing='0'>
						<tr>
						<th>Nome</th>
						<th>Tipo</th>
						<th>Data de Criacao</th>
						<th>Data do evento</th>
						<th>Descricao</th>
						<th>Tempo (horas)</th>
						<th>Valor</th>
						<th>Ação</th>
						<th>Ação</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td>" . $row['nome'] . "</td>";
						echo "<td>" . $row['tipo'] . "</td>";
						echo "<td>" . $row['data_criacao'] . "</td>";
						echo "<td>" . $row['data_inicio'] . "</td>";
						echo "<td>" . $row['descricao'] . "</td>";
						echo "<td>" . $row['qt_horas'] . "</td>";
						echo "<td>" . $row['valor'] . "</td>";
						echo "<td> <a href='editarEvento.php?id={$row['id_evento']}' > Editar </a></td>";
						echo "<td> <a href='conexaoExcluirEvento.php?id={$row['id_evento']}' > Excluir </a></td>";
						echo "</tr>";
						}
						echo "</table>";

						mysqli_close($con);
						?>
					</div>
				</div>
			</div>
		</div><!--/.row-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
