<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');
	echo $this->fetch('meta');
	echo $this->Html->css('bootstrap');
	echo $this->Html->css('custom');
	echo $this->Html->css('font-awesome');
	echo $this->Html->css('animate.min');
	echo $this->Html->css('creative');
	echo $this->Html->script('jquery-1.11.3.min');
        echo $this->Html->script('jquery-ui');
	//echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('jquery.maskMoney');
	echo $this->Html->script('plotly-latest.min');
        
	//echo $this->Html->script('cbpAnimatedHeader');
	//echo $this->Html->script('jquery.easing.min');
	//echo $this->Html->script('jquery.fittext');
	//echo $this->Html->script('wow.min');
	?>
</head>
<body>
	<div id="container">
		<div id="header" class="text-center">
			<?php echo $this->element('menu');?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
