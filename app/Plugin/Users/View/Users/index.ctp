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
<div class="container well">
	<div class="users index">
		<h1>USERS</h1>
		<p><?php
		echo $this->Paginator->counter(array(
			'format' => __d('users', 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
			));
			?></p>

			<table cellpadding="0" cellspacing="0" class="table">
				<tr>
					<th><?php echo $this->Paginator->sort('username'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th><?php echo $this->Paginator->sort('last_login'); ?></th>
					<th><?php echo $this->Paginator->sort('email'); ?></th>
					<th><?php echo $this->Paginator->sort('role'); ?></th>
					<th><?php echo $this->Paginator->sort('views'); ?></th>
				</tr>
				<?php
				$i = 0;
				foreach ($users as $user):
					$class = null;
				if ($i++ % 2 == 0) :
					$class = ' class="altrow"';
				endif;
				?>
				<tr<?php echo $class; ?>>
				<td><?php echo $this->Html->link($user[$model]['username'],'/users/dashboard/'.$user[$model]['username']); ?></td>
				<td><?php echo compareDates($user[$model]['created']); ?></td>
				<td><?php echo compareDates($user[$model]['modified']); ?></td>
				<td><?php echo compareDates($user[$model]['last_login']); ?></td>
				<td><?php echo $user[$model]['email']; ?></td>
				<td><?php echo $user[$model]['role']; ?></td>
				<td><?php echo $user[$model]['views']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php echo $this->element('Users.pagination'); ?>
</div>
</div>

<?php 
function compareDates($then){
	$then = new DateTime($then);
	$now = new DateTime("now");
	$interval = date_diff($then, $now);
	$days = $interval->format('%R%a');
	$hours = $interval->format('%R%h');
	$minutes = $interval->format('%R%i');
	$seconds = $interval->format('%R%s');
	$days_val = intval(substr($days, 1, strlen($days)-1));
	$hours_val = intval(substr($hours, 1, strlen($hours)-1));
	$minutes_val = intval(substr($minutes, 1, strlen($minutes)-1));
	$seconds_val = intval(substr($seconds, 1, strlen($seconds)-1));

	if ($days_val == 0){
		if ($hours_val == 0){
			if ($minutes_val == 0){
				if ($seconds_val == 0){
					return "Just now";
				}
				else if ($seconds_val == 1){
					return "1 second ago";
				}
				else
					return $seconds_val." seconds ago";
			}
			else if ($minutes_val == 1){
				return "1 minute ago";
			}
			else
				return $minutes_val." minutes ago";
		}
		else if ($hours_val == 1){
			return "1 hour ago";
		}
		else{
			return $hours_val . " hours ago";
		}
	}
	else if ($days_val > 0 && $days_val <= 29){
		if ($days_val == 1){
			return "1 day ago";
		}
		else
			return $days_val." days ago";
	}
	else if ($days_val >= 30 && $days_val < 365) {
		$compare = floor($days_val/30);
		if ($compare == 1)
			return "1 month ago";
		else
			return $compare." months ago";
	}
	else if ($days_val >= 365){
		$compare = floor($days_val/365);
		if ($compare == 1) {
			return "1 year ago";
		}
		else
			return $compare." years ago";
	}
}
?>

