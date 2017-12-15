<div class="container">
	<h3>Editar Usuário <?php echo $user['name']; ?></h3>
	<hr>

	<?php

	$config = [
		'class' => 'form-control',
		'templates' => 'app_form'
		
	];

	echo $this->Form->create($user, ['class' => 'form-horizontal']);
	?>
	<div class="col-lg-3">
		<?php
			echo $this->Form->input('name', [
					'label'=>'Nome', 
					'class' => $config
			]);
		?>
	</div>
	<div class="col-lg-3">
		<?php
			echo $this->Form->input('email', [
					'label'=>'E-mail', 
					'class' => $config
			]);
		?>
	</div>
	<div class="col-lg-2">
		<?php
			echo $this->Form->input('telefone', [
					'label'=>'Telefone', 
					'class' => $config
			]);
		?>
	</div>

	<div class="clearfix"></div>
	<br>

	<div class="col-lg-3">
		<?php
			echo $this->Form->input('username', [
					'label'=>'Nome de Usuário', 
					'class' => $config
			]);
		?>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-3">
		<?php
			echo $this->Form->input('password', [
					'label'=>'Senha', 
					'class' => $config
			]);
		?>
	</div>

	<div class="clearfix"></div>
	<hr>

		<?php
			echo $this->Form->button('Salvar', ['class' => 'btn btn-success']);
			echo $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-danger']);
		?>

	<?php
	echo $this->Form->end();
	?>
</div>