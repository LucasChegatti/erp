<div class="row">
    <div class="col-lg-12">
        <h1>Novo Horário</h1>
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
                        echo $this->Form->create($horario, ['class'=>'form-horizontal']);
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <?php
                            echo $this->Form->input('descricao', [
                              'label'=>'Descrição',
                              'class'=>$config
                            ]);
                          ?>
                    </div>
                </div>

                <div class="row">
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
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        echo $this->Form->button('Salvar', ['class'=>'btn btn-success']);
                        echo $this->Html->link('Cancelar',['action'=>'index'], ['class'=>'btn btn-danger']);
                        echo $this->Form->end();
                        ?>
                    </div>
                </div>
            </div>               
        </div>            
    </div>
</div>