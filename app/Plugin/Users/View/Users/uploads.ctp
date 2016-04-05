<div class="container alluploads">
	<div class="well col-xs-10 col-xs-offset-1 relative">
		<div class="col-xs-12 text-center">
			<h1><?php echo strtoupper($username); ?>'S UPLOADS</h1>
			<div class="holder"></div>
		</div>
		<!-- Future navigation panel -->

		<div id="allWallpapers" class="posts-list text-left" style="display:none">
			<?php if (count($q) > 0){
				foreach ($q as $key => $value) {
					?>
					<div class="col-lg-3 col-md-6 col-sm-3" onmouseover="editUpOn('<?php echo $value['Wallpaper']['id'];?>')" onmouseleave="editUpOff('<?php echo $value['Wallpaper']['id'];?>')"><?php
					if ($owner){ 
						?>
						<?php echo '<div class="edit_image_up" id="edit_image_'.$value['Wallpaper']['id'].'">'.$this->Html->link("<i class='fa fa-edit'></i>",'/edit/'.$value['Wallpaper']['id'],array('escape'=>false,'style'=>'color:white')).'</div>';
						echo '<div class="delete_image_up" id="delete_image_'.$value['Wallpaper']['id'].'">'.$this->Html->link("<i class='fa fa-times'></i>",'/delete/'.$value['Wallpaper']['id'],array('escape'=>false,'style'=>'color:white','confirm' => 'Are you sure you wish to delete this file ?')).'</div>';
					}?>
					<a href="/wallpapers/show/<?php echo $value['Wallpaper']['id']; ?>" class="lazy" target="_blank" alt="img" "data-original"="<?php echo "/files/wallpaper/file/".$value['Wallpaper']['id'].'/'.$value['Wallpaper']['file']; ?>">
						<?php $img = "/files/wallpaper/thumbnail/".$value['Wallpaper']['file'];?>

						<img src="<?php echo $img; ?>" style="width:100%;margin-bottom:30px" class="post-item">
					</a>
				</div>
				<?php 
			}
		}
		else
		{
			?>
			<p class="col-xs-12" style="margin-bottom:20px">No uploads.</p>
			<?php
		}
		?>
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

<?php echo $this->element('editImageJS');?>