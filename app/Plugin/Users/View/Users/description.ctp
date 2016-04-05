<div class="container">
	<div class="col-xs-6 col-xs-offset-3 well">
		<h1>DESCRIPTION</h1>
		<?php echo $this->Form->create('change_desc',array('url'=>array('action'=>'desc')));?>
		<div class="form-group row">
			<div class="col-xs-12">	
				<textarea name="data[Desc][descr]" rows="4" maxlength="500" autofocus="autofocus" style="width:100%;height:112%" placeholder="Say a little about yourself..." cols="30" id="add_commentComment"><?php if ($desc != "") echo $desc;?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<?php echo $this->Form->end(array('label'=>'Back to dashboard','class'=>'btn btn-primary'));?>
			</div>
			<div class="col-xs-6 text-right">
				<?php echo $this->Form->end(array('label'=>'Change','class'=>'btn btn-primary'));?>
			</div>
		</div>
	</div>
</div>