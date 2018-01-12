<div class="row">
    <div class="col-lg-12">
        <h1>Novo Usuário</h1>
        <hr>
    </div>          
</div>

<?php
	$config = [
		'class' => 'form-control',
		'templates' => 'app_form'
	];
?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Preencha os campos abaixo:
            </div>
            <div class="panel-body">
            	<div class="row">
            		<?php
						echo $this->Form->create($user, ['class' => 'form-horizontal']);
					?>
				</div>
				<div class="row">
					<div class="col-md-3">
						<?php
							echo $this->Form->input('name', [
									'label'=>'Nome', 
									'class' => $config
							]);
						?>
					</div>
					<div class="col-md-3">
						<?php
							echo $this->Form->input('email', [
									'label'=>'E-mail', 
									'class' => $config
							]);
						?>
					</div>
					<div class="col-md-2">
						<?php
							echo $this->Form->input('telefone', [
									'label'=>'Telefone', 
									'class' => $config
							]);
						?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<?php
							echo $this->Form->input('username', [
									'label'=>'Nome de Usuário', 
									'class' => $config
							]);
						?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<?php
							echo $this->Form->input('password', [
									'label'=>'Senha', 
									'class' => $config
							]);
						?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<?php
							echo $this->Form->button('Salvar', ['class' => 'btn btn-success']);
							echo $this->Html->link('Cancelar', ['action' => 'index'], ['class' => 'btn btn-danger']);
							echo $this->Form->end();
						?>
					</div>
				</div>
				
			</div>               
    	</div>            
	</div>
</div>