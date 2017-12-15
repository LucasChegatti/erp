<div class="container">
<h1>Editar Cargo</h1>
<hr>
<?php

$config = [
	'class' => 'form-control',
	'templates' => 'app_form'
	
];

echo $this->Form->create($cargo, ['class' => 'form-horizontal']);
?>

<div class="col-md-4">
	<?php 
		echo $this->Form->input('nome', [
				'label' => 'Nome',
				'class' => $config
			]);
	?>
</div>

<div class="clearfix"></div>

<div class="col-md-8">
	<?php
		echo $this->Form->input('descricao', [
				'label'=>'Descrição',
				'type'=>'textarea',
				'rows'=>'4',
				'class'=>$config
			]);
	?>
</div>

<div class="clearfix"></div>
<hr>

<?php 
echo $this->Form->button('Salvar', ['class'=>'btn btn-success']);
echo $this->Html->link('Cancelar', ['action'=>'index'], ['class'=>'btn btn-danger']);

echo $this->Form->end();
?>
</div>