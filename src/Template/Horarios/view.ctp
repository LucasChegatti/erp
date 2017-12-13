<h1><?php echo $result->descricao; ?></h1>
<hr>

<div class="row">
  <div class="container">
    <div class="col-md-2">
      <dl>
        <dt>Id</dt>
        <dd><?php echo $result->id; ?></dd>
      </dl>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
    <div class="col-md-4">
      <dl>
        <dt>Descrição</dt>
        <dd><?php echo $result->descricao; ?></dd>
      </dl>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
    <div class="col-md-2">
      <dl>
        <dt>Inicio</dt>
        <dd><?php echo $result->hora_inicio; ?></dd>
      </dl>
    </div>
    <div class="col-md-2">
      <dl>
        <dt>Intervalo</dt>
        <dd><?php echo $result->intervalo; ?></dd>
      </dl>
    </div>
    <div class="col-md-2">
      <dl>
        <dt>Fim</dt>
        <dd><?php echo $result->hora_fim; ?></dd>
      </dl>
    </div>
  </div>
</div>

<hr>
<?php
echo $this->Html->link('Voltar', ['action'=>'index'], ['class'=>'btn btn-primary']);
?>
