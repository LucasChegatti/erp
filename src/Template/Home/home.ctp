<?php
	$config = [
		'class' => 'form-control',
		'templates' => 'app_form'
	];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron" id="welcome">
            <div class="container">
                <h1>Bem Vindo!</h1>
                <p>Entre no ERP mais completo da Web ;)</p>
                <p><a class="btn btn-primary btn-lg" href="<?php echo $this->Url->build('/users/login');?>" role="button">Faça seu login</a></p>
            </div>
        </div>
    </div>

    <section id="sobre-nos">
        <div class="container">
		<h2>Sobre Nós</h2>
		<div class="row">
			<img class="img-responsive col-lg-6" src="img/reunioes.jpg">

			<div class="panel-group col-lg-6" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-primary">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Desde 2010
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
                            O ERPFODÃO está no mercado de TI desde o ano de 2010, e de lá pra cá já soma mais de 50000 clientes super satisfeitos com os resultados obtidos pelo nosso sistema.  
						</div>
					</div>
				</div>

				<div class="panel panel-primary">
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

				<div class="panel panel-primary">
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
        </div>
    </section>
    
    <div class="jumbotron" id="depoimentos">
		<div class="container">	
			<h3>Mais de 5000 clientes satisfeitos em todo o mundo</h3>
			<p>Veja abaixo alguns depoimentos de nossos clientes:</p>	
		</div>
    </div>

    <div class="container">
        <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">LogInfo</div>
                <div class="card-body">
                    <h4 class="card-title">Elton</h4>
                    <p class="card-text">Depois de começar a usar o ERPFODÃO minha gestão evoluiu muito.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">Paulo Informática</div>
                <div class="card-body">
                    <h4 class="card-title">Paulo</h4>
                    <p class="card-text">Sistema muito eficiente, simples e agradável de utilizar, Ótimo produto.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
                <div class="card-header">Coca-Cola</div>
                <div class="card-body">
                    <h4 class="card-title">James</h4>
                    <p class="card-text">Exelentes resultados obtidos com o sistema, Parábens a todos.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="container">
		<div class="row">
			<section id="video" class="col-lg-6">

				<h2>Video institucional</h2>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/i_3Pv1AygeI" frameborder="0" allowfullscreen></iframe>
				</div>
			</section>

			<section id="contato" class="col-lg-6">
				<h2>Contato</h2>
				<h5>Entre em contato conosco</h5>
				<form>
					<div class="form-group">
						<label for="contato-nome">Nome:</label>
						<input id="contato-nome" class="form-control" type="text" placeholder="Seu nome">
					</div>

					<div class="form-group">
						<label for="contato-email">E-mail:</label>
						<div class="input-group">
							<div class="input-group-addon">@</div>
			      			<input id="contato-email" class="form-control" type="email" placeholder="Seu e-mail">
		      			</div>
					</div><!--

					--><div class="form-group">
  						<label for="comment">Mensagem:</label>
  						<textarea class="form-control" rows="3" id="comment"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Enviar</button>

				</form>
			</section>
        </div>
    </div>

    <footer>
        <center>
            <address>
                <?php echo  $this->Html->image( 'logo-menu.png',  [ 'alt' => 'CakePHP']);?><br>
                Rua das alamedas, 467, Fundos falar com Dorizete<br>
                São Paulo, SP<br>
                Tel: (XX) XXXX-XXXX ou YYYY-YYYY
            </address>
            <address>
                E-mail: contato@erpfodao.com.br
            </address>
            </center>
    </footer>
        
</body>
</html>





