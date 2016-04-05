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
<header></header>
<div class="users index container login">
	<fieldset class="row">
		<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 well">
			<h1>S'INSCRIRE</h1>
			<?php echo $this->Form->create($model, array("role"=>"form")); ?>
			<div class="form-group row">
				<div class="col-xs-12">	
					<div class="input-group">
						<div class="input-group-addon add_user_icon"><i class="fa fa-user"></i></div>
						<?php echo $this->Form->input('username', array('label' => false,"placeholder"=>"Username","class"=>"form-control",'maxlength'=>'30','autofocus'=>'autofocus')); ?>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
						<?php echo $this->Form->input('email', array('label' => false,"placeholder"=>"Email", 'error' => array('isValid' => 'Must be a valid email address', 'isUnique' => 'An account with that email already exists'),"class"=>"form-control")); ?>
					</div>			
				</div>
			</div>
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key"></i></div>
						<?php echo $this->Form->input('password', array('label' => false,"placeholder"=>"Password", 'type' => 'password',"class"=>"form-control",'maxlength'=>'30')); ?>
					</div>			
				</div>
			</div>
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key"></i></div>
						<?php echo $this->Form->input('temppassword', array('label' => false,"placeholder"=>"Confirm password",'type' => 'password',"class"=>"form-control",'maxlength'=>'30'));?>
					</div>			
				</div>
			</div>
			<!--<div class="row">
				<div class="col-xs-12 tos text-center">
					<?php //echo $this->Form->input('tos', array('type'=>'checkbox','label' => 'I have read and agreed to the ' . $this->Html->link("rules",'/rules',array("target"=>"_blank")))); ?>
				</div>	
			</div>-->
			<div class="row submit">
				<div class="col-xs-12">
					<?php echo $this->Form->end(array("label"=>"Valider","class"=>"btn btn-primary floatRight")); ?>
				</div>
			</div>
		</div>
	</fieldset>
</div>