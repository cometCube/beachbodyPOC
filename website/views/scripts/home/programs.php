<?php
$programs = $this->programs;
?>
<div class="container module-tiles module-margin-bottom clearfix">

    <p class="module-title">Member Library</p>

    <div class="programs-box">

	<ul class="programs-content programs">
	<?php
	foreach ($programs as $key => $value) {
	?>
		<li class="item has-hovered-data">
			<?php
			$isPremium = $value->getIspremium();
			if($isPremium == 1) {
			?>
			<div class="item-overlay premium">UNLOCK NOW</div>
			<?php } ?>
			<a href="/program/<?= $value->getKey();?>"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="<?= $value->getFimage();?>">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(<?= $value->getFimage();?>);"></span>
						<p class="type"><?= $value->getPtype();?></p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span><?= $value->getFtimelabel();?></p>
						<p class="general-info"><?= $value->getFexpertlevel();?></p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/autumncalabreseexclusives" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="<?= $value->getPimage();?>" src="<?= $value->getPimage();?>">
		</li>
	<?php
	}
	?>
	</ul>
	</div>
</div>