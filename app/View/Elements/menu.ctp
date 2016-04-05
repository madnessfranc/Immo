<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
				<?php echo $this->Html->link('IMMO','/',array('class'=>'navbar-brand'));?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
					<?php if (!$islogged){
						?>
                <li><?php echo $this->Html->link('Se connecter','/login');?></li>
                <li><?php echo $this->Html->link("S'inscrire",'/register');?></li>
						<?php
					}
					else
					{
						?>
                <li><?php echo $this->Html->link('Liste des rapports','/listerapport');?></li>
                <li><?php echo $this->Html->link('Nouveau rapport','/rapport');?></li>
                <li><?php echo $this->Html->link('Déconnexion','/logout');?></li>
						<?php
					}
					?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>