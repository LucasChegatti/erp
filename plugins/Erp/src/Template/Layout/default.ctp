<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Erp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php
    echo $this->Html->css(['estilo.css']);
    echo $this->fetch('css');
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo $this->Url->build('/') ?>">Erp</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <?php
                                echo $this->Html->link('Usuários',
                                [
                                    'controller' => 'users',
                                    'action' => 'index'
                                ]);
                            ?>
                        </li>
                        <li>
                            <?php
                                echo $this->Html->link('Funcionários',
                                [
                                    'controller' => 'funcionarios',
                                    'action' => 'index'
                                ]);
                            ?>
                        </li>
                        <li>
                            <?php
                                echo $this->Html->link('Cargos',
                                [
                                    'controller' => 'cargos',
                                    'action' => 'index'
                                ]);
                            ?>
                        </li>
                        <li>
                            <?php
                                echo $this->Html->link('Horários',
                                [
                                    'controller' => 'horarios',
                                    'action' => 'index'
                                ]);
                            ?>
                        </li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">One more separated link</a></li>
					        </ul>
						</li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $this->Url->build('/users/login');?>">Entrar</a></li>
                        <li><a href="<?php echo $this->Url->build('/users/logout');?>">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

	<main>
		<div class="container">
			<?php echo $this->fetch('content') ?>
		</div>
	</main>

	<footer>
		<center>
			<br>
			<p><small>by Lucas Chegatti</small></p>
		</center>
	</footer>

</body>

</html>