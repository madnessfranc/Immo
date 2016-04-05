<?php
/**
 * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<header>
</header>
<div class="users index container login">
	<fieldset class="row">
		<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 well">
			<h1>SE CONNECTER</h1>
			<?php echo $this->Form->create($model, array('action' => 'login','id' => 'LoginForm',"role"=>"form")); ?>
			<div class="form-group row">
				<div class="col-xs-12">	
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
						<?php echo $this->Form->input('email', array('label' => false,"type"=>"email","class"=>"form-control","required"=>"required","placeholder"=>"Email")); ?>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key"></i></div>
						<?php echo $this->Form->input('password',  array('label' => false,"type"=>"password","class"=>"form-control","required"=>"required","placeholder"=>"Password")); ?>
					</div>			
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 remember_me">
					<?php echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  'Remember me')); ?>
				</div>
				<div class="col-xs-6 forgotmypass text-right">
					<?php echo $this->Html->link('I forgot my password', array('action' => 'reset_password')); ?>
				</div>
			</div>
			<?php echo $this->Form->hidden('User.return_to', array('value' => $return_to)); ?>
			<div class="row">
				<div class="col-xs-12">
					<?php echo $this->Form->end(array("label"=>"VALIDER","class"=>"btn btn-primary floatRight btnLogin")); ?>
				</div>
			</div>
		</div>
	</fieldset>
</div>
