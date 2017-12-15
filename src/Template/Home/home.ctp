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
			<img class="img-responsive col-sm-6" src="img/reunioes.jpg">

			<div class="panel-group col-sm-6" id="accordion" role="tablist" aria-multiselectable="true">
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
			<section id="video" class="col-sm-6">

				<h2>Video institucional</h2>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/i_3Pv1AygeI" frameborder="0" allowfullscreen></iframe>
				</div>
			</section>

			<section id="contato" class="col-sm-6">
				<h2>Contato</h2>
				<h4>Entre em contato conosco</h4>

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
					</div>

					<div class="grupo-radio">
						<div class="radio">
							<label>
								<input type="radio" name="tipo-pessoa" value="fisica" checked>
								Pessoa física
							</label>
						</div>

						<div class="radio">
							<label>
								<input type="radio" name="tipo-pessoa" value="juridica">
								Pessoa jurídica
							</label>
						</div>
					</div><!--

					--><select class="contato-select form-control" name="tipo-solicitacao">
						<option value="" disabled selected>Tipo de solicitação</option>
					  <option value="casa">Casa</option>
					  <option value="apartamento">Apartamento</option>
					  <option value="mansao">Mansão</option>
					</select>

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





