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
    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $this->Url->build('/') ?>"><?php echo  $this->Html->image( 'logo-menu.png',  [ 'alt' => 'CakePHP']);?></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo $this->Url->build('/');?>">Home</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
                        <ul class="dropdown-menu">
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
                        </ul>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php
                                    echo $this->Html->link('<span class="glyphicon glyphicon-off"></span>',
                                        ['action' => 'logout'],
                                        ['escape' => false]);
                                ?>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </nav>
    </header>

	<main>
        
			<?php echo $this->fetch('content') ?>
		
	</main>

</body>

</html>
