<h1><?php echo $result->nome; ?></h1>
<hr>

<div class="col-md-2">
	<dl>
		<dt>Id</dt>
		<dd><?php echo $result->id; ?></dd>
	</dl>
</div>

<div class="clearfix"></div>

<div class="col-md-4">
	<dl>
		<dt>Nome</dt>
		<dd><?php echo $result->nome; ?></dd>
	</dl>
</div>

<div class="clearfix"></div>

<div class="col-md-8">
	<dl>
		<dt>Descrição</dt>
		<dd><?php echo $result->descricao; ?></dd>
	</dl>
</div>

<div class="clearfix"></div>

<?php
echo $this->Html->link('Voltar', ['action'=>'index'], ['class'=>'btn btn-primary']);
