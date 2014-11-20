<section ng-app="EleicaoApp" ng-controller="CadastrarController">
	<div class="ui form segment">
		<div class="two fields">
	<?php 
		echo $this->Form->create('Eleico',array(
			'inputDefaults'=>array(
				'div'=>array('class'=>'field ')
			)));		
			echo $this->Form->input('id',array('ng-model'=>'Eleico.id','type'=>'text','div'=>array('class'=>'hidden')));
			echo $this->Form->input('descricao',array('label'=>'Descrição','ng-model'=>'Eleico.descricao'));
			echo $this->Form->input('ano',array('label'=>'Ano','ng-model'=>'Eleico.ano'));		
	?>	
		</div>	
		<!--Cargos Vinculados a Eleição-->		
		<div class="three fields">
			<div class="field">
				<label for="cargo">Cargo</label>
					<select ng-model="EleicaoCargo.cargo" name="cargo" ng-options="cargo.descricao for cargo in cargos"></select><br>		  		
			</div>			
			<div class="field">
			<label for="vagas">Qtd. Vagas</label>	
				<input type="number" name="vagas" ng-model="EleicaoCargo.vagas" min="1"/>
			</div>
			<div class="field">
				<div style="margin-top: 23px;"class="ui blue submit button" ng-click="adicionar()">
	  				Vincular
				</div>	
			</div>
		</div>
	</div>	
		<legend>Cargos para a Votação</legend>		
		<table class="ui table segment" >
			<thead>
				<tr>
					<th>#</th>
					<th>Cargo</th>
					<th>Vagas</th>
					<th>Opções</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="cargo in cargosAdicionado">
					<td>{{$index +1}}</td>
					<td>{{cargo.descricao}}</td>
					<td>{{cargo.vagas}}</td>
					<td><span ng-click="excluir($index)" class="circular ui button" style="font-size: 10pt;"><i class="remove circle icon"></i>Excluir</span></td>
				</tr>
			</tbody>
		</table>
	<div style="margin-top: 23px;"class="ui submit button" ng-click="salvar()">Salvar</div>	
</section>
<?= $this->Html->script('apps/EleicaoApp') ?>