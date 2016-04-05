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
		<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 well">
			<h2>REINITIALISER LE MOT DE PASSE</h2>
			<p>Entrez l'email que vous avez utilisé pour vous inscrire. Nous vous enverrons un email de confirmation de mot de passe.</p>
			<?php echo $this->Form->create($model, array('url' => array('admin' => false,'action' => 'reset_password','role'=>'form'))); ?>
			<div class="form-group row">
				<div class="col-xs-12">
					<div class="input-group">
						<div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
						<?php echo $this->Form->input('email', array('label' => false,"placeholder"=>"Email", 'error' => array('isValid' => 'Must be a valid email address', 'isUnique' => 'An account with that email already exists'),"class"=>"form-control")); ?>
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