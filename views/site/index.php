<?php
use yii\helpers\Url;
use kartik\sidenav\SideNav;
/* @var $this yii\web\View */

$this->title = 'Administración ECN';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Administración ECN</h1>

        <p class="lead">Bienvenido al sitio de manejo de movimiento ECN</p>

        <!-- <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p> -->
    </div>

    <!-- <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
    </div>  
    <span onclick="openNav()">open</span> -->

    <?php 
        echo SideNav::widget([
            'type' => SideNav::TYPE_PRIMARY,
            'heading' => 'Options',
            //'indMenuOpen' => '*',
            'items' => [
                [
                    'url' => Url::to(['site/index']),
                    'label' => 'Home',
                    'icon' => 'home'
                ],
                [
                    'url' => ['paises/index'],
                    'label' => 'Paises',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['canal-movimiento/index'],
                    'label' => 'Canales Comunicación',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['ciudad/index'],
                    'label' => 'Ciudades',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['comunidades/index'],
                    'label' => 'Comunidades',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['coordinadores-retiro/index'],
                    'label' => 'Coordinadores Retiro',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['iglesias/index'],
                    'label' => 'Iglesias',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['movimiento-religioso/index'],
                    'label' => 'Movimiento Religioso',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['personas/index'],
                    'label' => 'Personas',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['religiones/index'],
                    'label' => 'Religiones',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['tipo-documento/index'],
                    'label' => 'Tipo Documento',
                    'icon' => 'Hogar'
                ],
                [
                    'url' => ['tipo-relacion/index'],
                    'label' => 'Tipo Relación',
                    'icon' => 'Hogar'
                ],                                                                                                                                                                                
                [
                    'label' => 'Help',
                    'icon' => 'question-sign',
                    'items' => [
                        ['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
                        ['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
                    ],
                ],
            ],
        ]); ?>

</div>
