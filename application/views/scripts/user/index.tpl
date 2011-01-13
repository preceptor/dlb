<div id="content">
	<ul>
		<?php foreach ( $this->list as $rs ) : ?>
			<li>
				<a href="<?=$this->url?>/user/edit/id/<?=$rs->id?>" ><?=$rs->name?></a><br/>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<?=$this->script?>
