<h3><?php echo $results->name; ?></h3>
<hr>

<div class="container">
	<dl>
		<dt>Email:</dt>
		<dd><?php echo $results->email; ?></dd>
	</dl>
	<dl>
		<dt>Telefone:</dt>
		<dd><?php echo $results->telefone; ?></dd>
	</dl>
	<dl>
		<dt>Nome de Usuário:</dt>
		<dd><?php echo $results->username; ?></dd>
	</dl>
	
</div>

<?php
echo $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-primary']);