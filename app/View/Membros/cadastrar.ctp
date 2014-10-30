<script type="text/javascript">
	$("select").dropdown();
</script>
<div class="ui form column">
	<div class="ui three fields">
<?php 
	echo $this->Form->create('PessoaFisica',array(
		'inputDefaults'=>array(
			'div'=>array('class'=>'field ')
		)));
		echo $this->Form->input('nome');

		echo $this->Form->input('sexo',array('options'=>array('M'=>'Masculino','F'=>'Feminino')));
		echo $this->Form->input('data_nascimento',array('type'=>'text'));
	echo $this->Form->end('Salvar');

?>
	</div>
</div>

