	<div class="container" style="margin-top:120px">
		<h1>Liste des rapports</h1>
		<table class="table">
			<?php if (!empty($allrapport)){?>
			<tr>
				<td>Titre</td>
				<td>Supprimer</td>
			</tr>
			<?php }
			if (!empty($allrapport)){
				foreach ($allrapport as $key => $value) {
					?>
					<tr>
						<td>
							<div style="margin-bottom:20px;">
								<?php echo $this->Form->create('rapport',array('action'=>'load/'.$value['Rapport']['id']));?>
								<?php echo $this->Form->end(array('label'=>$value['Rapport']['title'],'class'=>'btn btn-primary'));?>
							</div>
						</td>
						<td>
							<?php echo $this->Html->link('X','/rapports/delete/'.$value['Rapport']['id'],array('class'=>'btn btn-primary'));?>
						</td>
					</tr>
					<?php
				}
			}
			else{
				?>
			</table>
			<div class="row">
				<div class="col-xs-12">
					<h4>Vous n'avez aucun rapport.</h4>
				</div>
			</div>
			<?php
		}
		?>
	</div>