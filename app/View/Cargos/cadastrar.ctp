<div class="ui form column">
	<div class="ui three fields">
<?php 
	echo $this->Form->create('Cargo',array(
		'inputDefaults'=>array(
			'div'=>array('class'=>'field ')
		)));
		echo $this->Form->input('descricao',array('label'=>'Descrição'));
		echo $this->Form->end('Salvar');

?>
	</div>
</div>

