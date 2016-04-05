<div class="container">
	<div class="well col-xs-10 col-xs-offset-1 relative">
		<div class="col-xs-12 text-center">
			<h1><?php echo strtoupper($username); ?>'S FAVORITES</h1>
			<div class="holder"></div>
		</div>
		<!-- Future navigation panel -->

		<div id="allWallpapers" class="posts-list text-left" style="display:none">
			<?php 
			if (count($q) > 0){
				if(isset($q)){
					foreach ($q as $key => $value) { 
						?>
						<div class="col-lg-3 col-md-6 col-sm-3">
							<a href="/wallpapers/show/<?php echo $key; ?>" target="_blank" alt="img">
								<?php $img = "/files/wallpaper/thumbnail/".$value['Wallpaper']['file']; ?>
								<img src="<?php echo $img; ?>" class="post-item" style="width:100%;margin-bottom:30px">
							</a>
						</div>
						<?php 
					}
				} 
			}
			else
				{?>
			<p class="col-xs-12" style="margin-bottom:20px">No favorites.</p><?php
		}?>
	</div>
	<div class="col-xs-12 text-center lessMarginTop">
		<div class="holder"></div>
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