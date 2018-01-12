<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ERP FODÃO</title>

    <?php 
        echo $this->Html->css([
            'estilo.css',
            '/vendor/bootstrap/css/bootstrap.min.css',
            '/vendor/metisMenu/metisMenu.min.css',
            '/dist/css/sb-admin-2.css',
            '/vendor/morrisjs/morris.css',
            '/vendor/font-awesome/css/font-awesome.min.css',
            '/vendor/datatables-plugins/dataTables.bootstrap.css',
            '/vendor/datatables-responsive/dataTables.responsive.css',
        ]);
        echo $this->fetch('css');
    ?>
    <?php
        echo $this->Html->script([
            '/vendor/jquery/jquery.min.js',
            '/vendor/bootstrap/js/bootstrap.min.js',
            '/vendor/metisMenu/metisMenu.min.js',
            '/vendor/raphael/raphael.min.js',
            '/vendor/morrisjs/morris.min.js',
            '/data/morris-data.js',
            '/dist/js/sb-admin-2.js',
            '/vendor/datatables/js/jquery.dataTables.min.js',
            '/vendor/datatables-plugins/dataTables.bootstrap.min.js',
            '/vendor/datatables-responsive/dataTables.responsive.js',
        ]);
        echo $this->fetch('script');
    ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ERP FODÃO</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i> Início</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-list fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php
                                       echo $this->Html->link('<i class="fa fa-th-list fa-fw"></i> Cargos',
                                            [
                                                'controller' => 'cargos',
                                                'action' => 'index'
                                            ],
                                            ['escape' => false]
                                        );
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo $this->Html->link('<i class="fa fa-th-list fa-fw"></i> Funcionários',
                                            [
                                                'controller' => 'funcionarios',
                                                'action' => 'index'
                                            ],
                                            ['escape' => false]
                                        );
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo $this->Html->link('<i class="fa fa-th-list fa-fw"></i> Horários',
                                            [
                                                'controller' => 'horarios',
                                                'action' => 'index'
                                            ],
                                            ['escape' => false]
                                        );
                                    ?>
                                </li>
                                <li>
                                    <?php
                                        echo $this->Html->link('<i class="fa fa-th-list fa-fw"></i> Usuários',
                                            [
                                                'controller' => 'users',
                                                'action' => 'index'
                                            ],
                                            ['escape' => false]
                                        );
                                    ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Link</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Link</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            <main>
        
                <?php echo $this->fetch('content') ?>
        
            </main>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

</html>
