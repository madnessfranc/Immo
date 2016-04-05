<div class="container">
	<div class="col-sm-6 col-sm-offset-3 well col-xs-10 col-xs-offset-1 relative">
		<div class="col-xs-12 text-center">
			<h1><?php echo strtoupper($username); ?>'S PROFILE COMMENTS</h1>
			<div class="holder"></div>
		</div>
		<!-- Future navigation panel -->
		<div class="margimBottom20">
			<div id="allWallpapers" class="posts-list text-left" style="display:none">
				<?php 
				if (count($allcomments) > 0){
					foreach ($allcomments as $key => $value) {
						?>
						<div class="row comment_wrap">
							<div class="col-xs-12"  style="padding-left:30px;padding-right:30px">
								<div class="comment_block row">
									<div class="avatar_b_wrap col-xs-1">
										<div  class="avatar_block">
											<a href="<?php echo "/users/dashboard/".$value['Comment']['user_username']; ?>" target="_blank" alt="img">
												<img src="<?php echo $value['Comment']['avatar']; ?>" width="50" height="50">
											</a>
										</div>
									</div>
									<div class="comment_info_block col-xs-11">
										<div class="title_block"><a href="<?php echo "/users/dashboard/".$value['Comment']['user_username']; ?>" target="_blank"><?php echo $value['Comment']['user_username']; ?></a></div>
										<div class="commented_when"><?php echo compareDates($value['Comment']['created']); ?></div>
										<div class="body_block"><?php echo $value['Comment']['body'] ?></div>
									</div>
								</div>
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
			<div class="col-xs-12 text-center">
				<div class="holder"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<?php echo $this->Html->link('Back to dashboard','/users/dashboard/'.$username,array('type'=>'button','class'=>'btn btn-primary btn-sm floatRight backtodashboard'));?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){

	$("div.holder").jPages({
		containerID : "allWallpapers",
		perPage : 32,
		keyBrowse : true
	});

});

$('#allWallpapers').show();
</script>

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
}?>