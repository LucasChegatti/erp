<div class="container">
	<h1>
	    Horários
	    <div class="btn-group pull-right">
	        <?php echo $this->Html->link('Novo Horário', ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
	    </div>
	</h1>
</div>
<div class="container">
    <hr>
    <div class="row">
        <table class="table table-bordered table-hover table-condensed">
          <thead>
            <tr>
              <th>Descrição</th>
              <th>Inicio</th>
              <th>Intervalo</th>
              <th>Fim</th>

              <th class="text-center" style="width: 100px">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $v) : ?>
                <tr>
                  <td><?php echo $v->descricao; ?></td>
                  <td><?php echo $v->hora_inicio; ?></td>
                  <td><?php echo $v->intervalo; ?></td>
                  <td><?php echo $v->hora_fim; ?></td>
                  <td class="actions text-center">
                      <?php
                          echo $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>',
                              ['action' => 'view', $v->id],
                              ['escape' => false]);
                      ?>
                      <?php
                          echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>',
                              ['action' => 'edit', $v->id],
                              ['escape' => false]);
                      ?>
                      <?php
                          echo $this->Form->Postlink('<span class="glyphicon glyphicon-remove-circle"></span>',
                              ['action' => 'delete', $v->id],
                              ['escape' => false, 'confirm' => 'Tem certeza que deseja excluir # {0}?', $v->id]);
                      ?>
                  </td>
                </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
    </div>
</div>

<?php echo $this->element('pagination');
