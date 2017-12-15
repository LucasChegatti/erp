<div class="container">
  <h1>Novo Horário</h1>
  <hr>
  <?php

  $config = [
    'class' => 'form-control',
    'templates' => 'app_form'

  ];

  echo $this->Form->create($horario, ['class'=>'form-horizontal']);
  ?>

  <div class="col-md-4">
    <?php
      echo $this->Form->input('descricao', [
        'label'=>'Descrição',
        'class'=>$config
      ]);
    ?>
  </div>

  <div class="clearfix"></div>

  <div class="col-md-3">
    <?php
      echo $this->Form->input('hora_inicio', [
        'label'=>'Inicio',
        'default'=>'08:00',
        'class'=>$config
      ]);
    ?>
  </div>

  <div class="col-md-3">
    <?php
      echo $this->Form->input('intervalo', [
        'label'=>'Intervalo',
        'default'=>'12:00 ás 13:30',
        'class'=>$config
      ]);
    ?>
  </div>

  <div class="col-md-3">
    <?php
      echo $this->Form->input('hora_fim', [
        'label'=>'Fim',
        'default'=>'17:30',
        'class'=>$config
      ]);
    ?>
  </div>
  <div class="clearfix"></div>
  <hr>
  <?php
  echo $this->Form->button('Salvar', ['class'=>'btn btn-success']);
  echo $this->Html->link('Cancelar',['action'=>'index'], ['class'=>'btn btn-danger']);
  echo $this->Form->end();
  ?>
</div>