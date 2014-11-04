<section ng-app="CargoApp" ng-controller="CadastrarController">
	<div class="ui form column">
		<div class="ui three fields">
	<?php 
		echo $this->Form->create('Cargo',array(
			'inputDefaults'=>array(
				'div'=>array('class'=>'field ')
			)));		
			echo $this->Form->input('id',array('ng-model'=>'Cargo.id','type'=>'text','div'=>array('class'=>'hidden')));
			echo $this->Form->input('descricao',array('label'=>'Descrição','ng-model'=>'Cargo.descricao'));
			echo $this->Form->end('Salvar');

	?>	
		</div>	
	</div>		
	<table class="ui table segment" >
		<thead>
			<tr>
				<th>#</th>
				<th>Cargo</th>				
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="cargo in cargos" ng-click="carrega($index)" class="link">
				<td>{{cargo.Cargo.id}}</td>
				<td>{{cargo.Cargo.descricao}}</td>				
			</tr>
		</tbody>
	</table>
</section>

<?= $this->Html->script('apps/CargoApp'); ?>