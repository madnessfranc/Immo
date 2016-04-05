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
<div class="users overview dashboardUser">
	<div class="container-fluid">
		<div class="container well" style="position:relative;padding-bottom:0px">
			<div class="row margin15" style="margin-top:6px;">
				<div class="profile_image" style="display:inline-block;position:relative" onmouseover="editImageOn()" onmouseleave="editImageOff()">
					<?php 
					if ($owner){ 
						?>
						<?php echo '<div class="edit_image">'.$this->Html->link("<i class='fa fa-edit'></i>",'/editprofileimage',array('escape'=>false,'style'=>'color:white')).'</div>';
					}
					if (isset($img)){
						echo $this->Html->image('/files/image/thumbnail/'.$img['Image']['image'], array('height'=>'200','width'=>'200','class'=>'boxshadowprofile'));
					}
					else{
						echo $this->Html->image('/files/profile/default.png',array('height'=>'200','width'=>'200','class'=>'boxshadowprofile'));
					}
					?>
				</div>
				<h1  style="display:inline-block" class="username"><?php echo strtoupper($user['username']); ?></h1>
			</div>
			<div class="dashbuttons" data-toggle="tooltip" data-placement="left" title="Send a message">
				<?php echo $this->Form->create('Message',array('url'=>'/messages/send'));?>
				<?php echo $this->Form->hidden('to_id',array('value'=>$user['id']));?>
				<?php echo $this->Form->hidden('to_username',array('value'=>$user['username']));?>
				<?php echo $this->Form->button('<i class="fa fa-envelope-o"></i>',array('escape'=>false,'class'=>'btn btn-primary btn-sm'));?>
				<?php echo $this->Form->end(array('style'=>'display:none;'));?>
			</div>
			<div class="row">
				<div class="col-md-6" style="padding-left:30px;padding-right:30px">
					<label class="lblSearchingFor">Informations</label><hr class="marginHR">
				</div>
				<div class="col-md-6 paddingRight30 hidden-sm hidden-xs">
					<label class="lblSearchingFor">Comments</label>
					<?php echo $this->Html->link('All comments','/users/comments/'. $user['username'], array('type'=>'button','class'=>'btn btn-primary btn-sm allfavorites floatRight')); ?><hr class="marginHR">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="row" style="margin-bottom:15px">
						<div class="col-md-6 text-center">
							<div class="row">
								<div class="col-xs-6">
									<p>Joined</p>
								</div>
								<div class="col-xs-6">
									<?php echo $createdUser; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<p>Last login</p>
								</div>
								<div class="col-xs-6">
									<?php echo compareDates($user['last_login']); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<p>Uploads</p>
								</div>
								<div class="col-xs-6">
									<?php echo $uploads; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<p>Favorites</p>
								</div>
								<div class="col-xs-6">
									<?php echo $favorites; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<p>Profile views</p>
								</div>
								<div class="col-xs-6">
									<?php echo $user['views']; ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<p>Profile comments</p>
								</div>
								<div class="col-xs-6">
									<?php echo count($allcomments); ?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6">
									<p>Description</p>
								</div>
								<div class="col-xs-6" style="overflow:auto">
									<?php echo ($user['descr'] != "") ? $user['descr'] : "No description."; 
									if ($owner){ 
										?>
										<?php echo '<div class="edit_desc inline">'.$this->Html->link("<i class='fa fa-edit faMargin faDesc'></i>",'/users/description',array('escape'=>false,'style'=>'color:white')).'</div>';
									}?>
								</div>
							</div>
						</div>
						<div class="row hidden-md hidden-lg" style="margin-top:20px">
							<div class="col-xs-12 hidden-md hidden-lg">
								<div class="col-md-6 hidden-md hidden-lg" style="padding-left:30px;padding-right:30px">
									<label class="lblSearchingFor">Comments</label>
									<?php echo $this->Html->link('All comments','/users/comments/'. $user['username'], array('type'=>'button','class'=>'btn btn-primary btn-sm allfavorites floatRight')); ?><hr class="marginHR">
								</div>
							</div>
						</div>
						<div class="col-md-6 paddingRight30">
							<?php if ($online)
							{
								?>
								<div class="add_comment row">
									<div class="col-xs-12">
										<?php echo $this->Form->create('add_comment',array('url'=>'/comments/add_for_user')); ?>
										<?php echo $this->Form->hidden('parent_username',array('value'=>$user['username'])); ?>
										<?php echo $this->Form->input('comment',array('type'=>'textarea','rows'=>4,'maxlength'=>250 ,'label'=>false,'style'=>'width:100%','placeholder'=>'Share your thoughts...')); ?>
										<?php echo $this->Form->submit('Send',array('class'=>'btn btn-primary','style'=>'float:right')); ?>
										<?php echo $this->Form->end(); ?>
									</div>
								</div>
								<?php 
							}
							else{
								?>
								<div class="log_in_or_r">
									<p><?php echo $this->Html->link('Login','/login'); ?> or <?php echo $this->Html->link('Register','/register'); ?> to leave a comment.</p>
								</div>
								<?php
							}
							if (count($allcomments) > 0){
								foreach ($allcomments as $key => $value) {
									?>
									<div class="media relative comment_block" style="margin-top:5px">
										<div class="media-left">
											<a href="<?php echo "/users/dashboard/".$value['Comment']['user_username']; ?>" target="_blank" alt="img">
												<img src="<?php echo $value['Comment']['avatar']; ?>" width="50" height="50">
											</a>
											<div class="commented_when"><?php echo compareDates($value['Comment']['created']); ?></div>
										</div>
										<div class="media-body">
											<p class="media-heading"><a href="<?php echo "/users/dashboard/".$value['Comment']['user_username']; ?>" target="_blank"><?php echo $value['Comment']['user_username']; ?></a></p>
											<?php echo $value['Comment']['body'] ?>
										</div>
									</div>
									<?php
								}
							}
							else
							{
								?>
								<p>No comments.</p>
								<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" style="padding-left:30px;padding-right:30px;">
					<label class="lblSearchingFor">Recent favorites</label>
					<?php echo $this->Html->link('All favorites','/users/favorites/'. $user['username'], array('type'=>'button','class'=>'btn btn-primary btn-sm allfavorites floatRight')); ?><hr class="marginHR">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12"  style="margin-top:20px">
					<?php if (count($favoritesWall) > 0){
						
						foreach ($favoritesWall as $key => $value) {
							?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="margin-bottom:30px">
								<a href="/wallpapers/show/<?php echo $key; ?>" class="lazy" target="_blank" alt="img" "data-original"="<?php echo $tochange."app/webroot/files/wallpaper/file/".$key.'/'.$value; ?>">
									<?php $img = "/files/wallpaper/thumbnail/".$value; ?>
									<img src="<?php echo $img; ?>" style="padding:0;height:168px" class="post-item">
								</a>
							</div>
							<?php 
						}
					}
					else
					{
						?>
						<p class="col-xs-12" style="margin-bottom:20px">No favorites.</p>
						<?php
					}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" style="padding-left:30px;padding-right:30px">
					<label class="lblSearchingFor">Recent uploads</label>
					<?php echo $this->Html->link('All uploads','/users/uploads/'. $user['username'], array('type'=>'button','class'=>'btn btn-primary btn-sm allfavorites floatRight')); ?>
					<hr class="marginHR">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" style="margin-top:20px">
					<?php if (count($uploadsWall) > 0){
						foreach ($uploadsWall as $key => $value) {
							?>
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="margin-bottom:30px" onmouseover="editUpOn('<?php echo $key;?>')" onmouseleave="editUpOff('<?php echo $key;?>')"><?php
							if ($owner){ 
								?>
								<?php echo '<div class="edit_image_up" id="edit_image_'.$key.'">'.$this->Html->link("<i class='fa fa-edit faMargin'></i>",'/edit/'.$key,array('escape'=>false,'style'=>'color:white')).'</div>';
								echo '<div class="delete_image_up" id="delete_image_'.$key.'">'.$this->Html->link("<i class='fa fa-times faMargin'></i>",'/delete/'.$key,array('escape'=>false,'style'=>'color:white','confirm' => 'Are you sure you wish to delete this file ?')).'</div>';
							}?>
							<a href="/wallpapers/show/<?php echo $key; ?>" class="lazy" target="_blank" alt="img" "data-original"="<?php echo $tochange."app/webroot/files/wallpaper/file/".$key.'/'.$value; ?>">
								<?php $img = "/files/wallpaper/thumbnail/".$value;?>

								<img src="<?php echo $img; ?>" style="padding:0;height:168px" class="post-item">
							</a>
						</div>
						<?php 
					}
				}
				else
				{
					?>
					<p class="col-xs-12" style="margin-bottom:25px">No uploads.</p>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<?php 		


function human_filesize($bytes, $decimals = 2) {
	$sz = 'BKMGTP';
	$factor = floor((strlen($bytes) - 1) / 3);
	return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}

function isthere($check){
	if (empty($check))
		return "unknown";
	else
		return $check;



}

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

<?php echo $this->element('editImageJS');?>
<?php echo $this->element('fadeOut');?>