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
		<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xsoffset-1 well">
			<h2>CHANGE YOUR PASSWORD</h2>
			<?php echo $this->Form->create($model, array('action'=>'change_password','role'=>'form')); ?>
			<p><?php echo __d('users', 'Please enter your old password because of security reasons and then your new password twice.'); ?></p>
			<label class="lblRating2">Old</label><hr class="marginHR">
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-key"></i></div>
						<?php echo $this->Form->input('old_password', array('label' => false,"placeholder"=>"Old password",'type'=>'password', "class"=>"form-control")); ?>
					</div>			
				</div>
			</div>
			<label style="margin-top:15px" class="lblRating2">New</label><hr class="marginHR">
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