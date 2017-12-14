<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            //echo  $this->Html->image( 'cake-logo.png',  [ 'alt' => 'CakePHP']);
        ?>
    </div>
    <div class="jumbotron">
        <h1>Bem Vindo!</h1>
        <p>Entre no ERP mais completo da Web ;)</p>
        <p><a class="btn btn-primary btn-lg" href="<?php echo $this->Url->build('/users/login');?>" role="button">Faça seu login</a></p>
    </div>

    <section id="sobre-nos">
		<h2>Sobre Nós</h2>
		<div class="row">
			<img class="img-responsive col-sm-6" src="img/reunioes.jpg">

			<div class="panel-group col-sm-6" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Desde 2010
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
                            O ERPFODÃO está no mercado de TI desde o ano de 2010, e de lá pra cá já soma mais de 50 clientes super satisfeitos com os resultados obtidos pelo nosso 
                            sistema.  
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
								Funcionalidades
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							Cuidamos desde toda parte de cadastros de sua empresa, até toda gestão de negócios.
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
								Simples, Moderno e Eficiente
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							Se você é daquelas pessoas que busca simplicidade, modernismo e eficiencia, então você encontrou o sistema ideal para sua empresa.
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    
    <div class="jumbotron">
		<div class="container">	
			<h3>Mais de 300 prêmios em design e em conforto</h3>
			<p>Mais de 5 milhões de clientes satisfeitos em todo o mundo.</p>	
		</div>
    </div>

    <div class"container">
        <h1>Contato</h1>
        <p>Entre em contato conosco:</p>
        <br>
        <?php
            $config = [
                'class' => 'form-control',
                'templates' => 'app_form'
            
            ];
        ?>

        <div class="col-lg-6">
	        <?php
		        echo $this->Form->input('',
                    [
                        'label'=>'Nome',
                        'class' => $config
                    ]);
            ?>
        </div>

        <div class="col-lg-6">
	        <?php
                echo $this->Form->input('',
                    [
                        'label'=>'Motivo',
                        'empty'=>'Escolha',
                        'class' => $config
                    ]);
            ?>
        </div>

        <div class="clearfix"></div>

        <div class="col-lg-6">
	        <?php
                echo $this->Form->input('',
                    [
                        'label'=>'E-mail',
                        'class' => $config
                    ]);
            ?>
        </div>

        <div class="col-lg-6">
	        <?php
                echo $this->Form->input('',
                    [
                        'label'=>'Pessoa Física',
                        'type' => 'checkbox',
                        'class' => $config
                    ]);
            ?>
            <?php
                echo $this->Form->input('',
                    [
                        'label'=>'Pessoa Jurídica',
                        'type' => 'checkbox',
                        'class' => $config
                    ]);
            ?>
        </div>

    </div>   
</body>
</html>





