<h3><?php echo $result->nome; ?></h3>
<hr>

<div class="col-lg-3">
    <dl>
        <dt>Nome:</dt>
        <dd><?php echo $result->nome; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>Sobrenome:</dt>
        <dd><?php echo $result->sobrenome; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>CPF:</dt>
        <dd><?php echo $result->cpf; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>RG:</dt>
        <dd><?php echo $result->rg; ?></dd>
    </dl>
</div>

<div class="clearfix"></div>

<div class="col-lg-3">
    <dl>
        <dt>Cargo:</dt>
        <dd><?php echo $results->cargo->nome; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>Horário:</dt>
        <dd><?php echo $results->horario->descricao; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>Sálario:</dt>
        <dd><?php echo $result->salario; ?></dd>
    </dl>
</div>

<div class="clearfix"></div>

<div class="col-lg-3">
    <dl>
        <dt>Data Admissão:</dt>
        <dd><?php echo $result->data_entrada; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>Data Demissão:</dt>
        <dd><?php echo $result->data_saida ? $result->data_saida : '--'; ?></dd>
    </dl>
</div>

<div class="clearfix"></div>

<div class="col-lg-3">
    <dl>
        <dt>Celular:</dt>
        <dd><?php echo $result->telefone_celular ? $result->telefone_celular : '--' ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>Telefone:</dt>
        <dd><?php echo $result->telefone_residencial ? $result->telefone_residencial : '--'; ?></dd>
    </dl>
</div>

<div class="col-lg-4">
    <dl>
        <dt>Email:</dt>
        <dd><?php echo $result->email ? $result->email : '--'; ?></dd>
    </dl>
</div>

<div class="clearfix"></div>

<div class="col-lg-3">
    <dl>
        <dt>Estado:</dt>
        <dd><?php echo $results->estado->nome; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>Cidade:</dt>
        <dd><?php echo $results->cidade->nome; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>Endereço:</dt>
        <dd><?php echo $result->endereco; ?></dd>
    </dl>
</div>

<div class="col-lg-3">
    <dl>
        <dt>CEP:</dt>
        <dd><?php echo $result->cep; ?></dd>
    </dl>
</div>

<div class="clearfix"></div>

<hr>
<?php echo $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-primary']);
