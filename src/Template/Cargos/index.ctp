<div class="row">
	<div class="col-lg-12">
		<h1>
		    Cargos
		    <div class="btn-group pull-right">
		        <?php echo $this->Html->link('Novo Cargo', ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
		    </div>
		</h1>
		<hr>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
                Lista dos Cargos
            </div>
	        <div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Descricão</th>

							<th class="text-center" style="width: 100px">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($result as $v) : ?>
							<tr>
								<td><?php echo $v->nome; ?></td>
								<td><?php echo $v->descricao; ?></td>
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
	</div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

