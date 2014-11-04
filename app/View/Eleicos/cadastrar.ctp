<section ng-app="EleicaoApp" ng-controller="CadastrarController">
	<div class="ui form column">
		<div class="ui three fields">
	<?php 
		echo $this->Form->create('Eleico',array(
			'inputDefaults'=>array(
				'div'=>array('class'=>'field ')
			)));		
			echo $this->Form->input('id',array('ng-model'=>'Eleico.id','type'=>'text','div'=>array('class'=>'hidden')));
			echo $this->Form->input('descricao',array('label'=>'Descrição','ng-model'=>'Eleico.descricao'));
			echo $this->Form->input('ano',array('label'=>'Ano','ng-model'=>'Eleico.ano'));
			echo $this->Form->end('Salvar');

	?>	
		</div>	
	</div>		

	
	
		
			<?php 
				echo $this->Form->input('cargo_id',array('div'=>array('class'=>"field"), 'ng-model'=>'cargo_id','ng-options'=>'cargos' ));				
				echo $this->Form->input('vagas',array('div'=>array('class'=>"field"), 'ng-model'=>'vagas' ));				
			?>				
			<div class="positive ui button field"><i class="plus icon"></i>Adicionar</div>
			<div class="negative ui button field"><i class="eraser icon"></i>Limpar</div>
	
	
</section>
<?= $this->Html->script('apps/EleicaoApp') ?>