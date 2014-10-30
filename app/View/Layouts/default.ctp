<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		iGenesis - <?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('min/dependencias_js');
		echo $this->Html->css(array(
			'min/dependencias_css',
			'estilo'
			));
	?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.dropdown').dropdown();
	});
</script>
</head>
<body>
	<div id="container" class="wrap ">
	
	<div id="header">
		<div class="ui inverted menu ">
			<div class="menu">			
		  		<a class="active item"><i class="home icon"></i> Início</a>
		    	
		    	<div class="ui dropdown item">
		      		<i class="add sign icon"></i> Cadastro <i class="dropdown icon"></i>
		      		<div class="menu">
		        		<a class="item" href="<?= $this->webroot ?>Membros/Cadastrar"><i class="users icon"></i>Membros</a>
		        		<a class="item" href="<?= $this->webroot ?>Cargos/Cadastrar"><i class="suitcase icon"></i>Cargos</a>
		        		<a class="item"><i class="thumbs up icon"></i>Eleição</a>
		      		</div>
		    	</div>

		    	<div class="ui dropdown item">
		      		<i class="users icon"></i> Membros <i class="dropdown icon"></i>
		      		<div class="menu">
		        		<a class="item"><i class="search icon"></i>Consultar</a>		        		
		      		</div>
		    	</div>

		    	<div class="ui dropdown item">
		      		<i class="add sign icon"></i> Eleições <i class="dropdown icon"></i>
		      		<div class="menu">
		        		<a class="item"><i class="play sign icon"></i>Iniciar</a>
		        		<a class="item"><i class="sitemap icon"></i>Apuração</a>
		        		<a class="item"><i class="hand right icon"></i>Candidatar</a>
		        		<a class="item"><i class="search icon"></i>Consultar</a>
		      		</div>
		    	</div>
		 	</div>
		</div>		
	</div>
		<div id="content" class="content ui segment">
		<h2 class="ui header">
		  <i class="<?= $icone ?> icon"></i>
		  <div class="content">
		    <?= $titulo; ?>
		    <div class="sub header"><?= $sub_titulo; ?></div>
		  </div>
		</h2>
		<div class="ui clearing divider"></div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="ui grid">
			<div class="footer computer only column">
				<p><strong>iGenesis - Sistema de Gestão Eclesiastica</strong></p>
				<p>Todos os direitos reservados para <a href="#">Igreja Presbiteriana do Brasil</a></p>
			</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
