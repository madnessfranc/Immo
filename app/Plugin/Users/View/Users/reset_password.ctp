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

<div class="users index container login">
	<fieldset class="row">
		<div class="col-xs-4 col-xs-offset-4 well">
			<h2>RESET YOUR PASSWORD</h2>
			<?php echo $this->Form->create($model, array('url' => array('action' => 'reset_password',$token),'role'=>'form')); ?>
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key"></i></div>
						<?php echo $this->Form->input('new_password', array('label' => false,"placeholder"=>"New password",'type'=>'password', "class"=>"form-control")); ?>
					</div>			
				</div>
			</div>
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key"></i></div>
						<?php echo $this->Form->input('confirm_password', array('label' => false,"placeholder"=>"Confirm password",'type'=>'password', "class"=>"form-control")); ?>
					</div>			
				</div>
			</div>
			<div class="row submit">
				<div class="col-xs-12">
					<?php echo $this->Form->end(array("label"=>"Send","class"=>"btn btn-primary floatRight")); ?>
				</div>
			</div>
		</div>
	</fieldset>
</div>