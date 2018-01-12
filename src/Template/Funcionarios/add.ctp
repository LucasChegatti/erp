<div class="row">
    <div class="col-lg-12">
        <h1>Novo Funcionário</h1>
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
            			echo $this->Form->create($funcionarios, ['class' => 'form-horizontal']);
            		?>
            	</div>

            	<div class="row">
            		<div class="col-md-4">
						<?php
							echo $this->Form->input('nome',
								[
									'label'=>'Nome',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-4">
						<?php
							echo $this->Form->input('sobrenome',
								[
									'label'=>'Sobrenome',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-2">
						<?php
							echo $this->Form->input('cpf',
								[
									'label'=>'CPF',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-lg-2">
						<?php
							echo $this->Form->input('rg',
								[
									'label'=>'RG',
									'class' => $config
								]);
						?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<?php
							echo $this->Form->input('cargo_id',
								[
									'label'=>'Cargo',
									'empty'=>'Escolha',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-3">
						<?php
							echo $this->Form->input('horario_id',
								[
									'label'=>'Horário',
									'empty'=>'Escolha',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-3">
						<?php
							echo $this->Form->input('salario',
								[
									'label'=>'Sálario',
									'class' => $config
								]);
						?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<?php
							echo $this->Form->input('data_entrada',
								[
									'label'=>'Data Admissão',
									'type'=>'text',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-3">
						<?php
							echo $this->Form->input('data_saida',
								[
									'label'=>'Data Demissão',
									'type'=>'text',
									'class' => $config
								]);
						?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<?php
							echo $this->Form->input('telefone_celular',
								[
									'label'=>'Celular',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-3">
						<?php
							echo $this->Form->input('telefone_residencial',
								[
									'label'=>'Telefone',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-4">
						<?php
							echo $this->Form->input('email',
								[
									'label'=>'E-mail',
									'class' => $config
								]);
						?>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<?php
							echo $this->Form->input('estado_id',
								[
									'label'=>'Estado',
									'empty'=>'Escolha',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-3">
						<?php
							echo $this->Form->input('cidade_id',
								[
									'label'=>'Cidade',
									'empty'=>'Escolha',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-4">
						<?php
							echo $this->Form->input('endereco',
								[
									'label'=>'Endereço',
									'class' => $config
								]);
						?>
					</div>
					<div class="col-md-2">
						<?php
							echo $this->Form->input('cep',
								[
									'label'=>'CEP',
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