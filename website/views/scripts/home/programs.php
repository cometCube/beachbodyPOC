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
			<?
			$isPremium = $value->getIspremium();
			if($isPremium == 1) {
			?>
			<div class="item-overlay premium">UNLOCK NOW</div>
			<?php } ?>
			<a href="/program/autumncalabreseexclusives"></a>
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
		<!-- <li class="item has-hovered-data">

						<a href="/program/tonyhortonexclusives"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>5-45 Minutes</p>
						<p class="general-info">Intermediate / Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/tonyhortonexclusives" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1441146337/TrainerExclusives/Tony_BodExclusives_BoxArt.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1441146337/TrainerExclusives/Tony_BodExclusives_BoxArt.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/sagikalevexclusives"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>5-45 Minutes</p>
						<p class="general-info">Intermediate / Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/sagikalevexclusives" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1441146337/TrainerExclusives/Sagi_BodExclusives_BoxArt.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1441146337/TrainerExclusives/Sagi_BodExclusives_BoxArt.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/JerichoMcMatthewsExclusives"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Cardio &amp; Yoga</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>20-40 Minutes</p>
						<p class="general-info">Beginner / Intermediate / Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/JerichoMcMatthewsExclusives" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453241522/Jericho/BODExclusives_BoxArt_Jericho_20160119.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1453241522/Jericho/BODExclusives_BoxArt_Jericho_20160119.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/JoelFreemanExclusives"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>20-40 Minutes</p>
						<p class="general-info">Intermediate / Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/JoelFreemanExclusives" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453248532/Joel/BODExclusives_BoxArt_Joel__20160119.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1453248532/Joel/BODExclusives_BoxArt_Joel__20160119.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/activematernity"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/LOW-IMPACT_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/LOW-IMPACT_ICON.png);"></span>
						<p class="type">Low-Impact</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>25-35 Minutes</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/activematernity" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1444263589/TrainerExclusives/ActiveMaternity_BoxArt.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1444263589/TrainerExclusives/ActiveMaternity_BoxArt.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/insanity"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>60 DAYS, 15–60 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/insanity" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297171/Insanity/SAN_BoxArt_20150308.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297171/Insanity/SAN_BoxArt_20150308.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/brazilbuttlift"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png);"></span>
						<p class="type">Dance / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>60 DAYS; 10–50 minutes a day</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/brazilbuttlift" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1422469415/BrazilButtLift/BrazilButtLift_Program_BoxArt_540x672_w0zm2h.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1422469415/BrazilButtLift/BrazilButtLift_Program_BoxArt_540x672_w0zm2h.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/turbofire"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Cardio / Dance</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>90 DAYS; 10–55 minutes a day</p>
						<p class="general-info">Intermediate / Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/turbofire" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297174/TurboFire/TR_BoxArt_20150308.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297174/TurboFire/TR_BoxArt_20150308.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/p90x3"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>90 Days; 30 mins a day</p>
						<p class="general-info">Intermediate / Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/p90x3" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297173/P90X3/P90X3_Program_BoxArt_540x672_fgqhks.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297173/P90X3/P90X3_Program_BoxArt_540x672_fgqhks.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/p90x2"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>90 DAYS; 50–60 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/p90x2" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297172/P90X2/P90X2_Program_ThumbBoxArt_540x672_hsfjpx.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297172/P90X2/P90X2_Program_ThumbBoxArt_540x672_hsfjpx.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/p90x"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>90 DAYS; 45–60 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/p90x" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297172/P90X/P90X_Program_BoxArt_540x672_royey9.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297172/P90X/P90X_Program_BoxArt_540x672_royey9.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/chaleanextreme"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png);"></span>
						<p class="type">Slim &amp; Tone / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>90 DAYS; 30–45 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/chaleanextreme" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297170/ChaleanExtreme/ChaLeanExtreme_Program_BoxArt_540x672_nsqgpe.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297170/ChaleanExtreme/ChaLeanExtreme_Program_BoxArt_540x672_nsqgpe.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/hiphopabs"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png);"></span>
						<p class="type">Dance / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>60 DAYS; 25–45 minutes a day</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/hiphopabs" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297169/HipHopAbs/HipHopAbs_Program_BoxArt_540x672_an9qji.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297169/HipHopAbs/HipHopAbs_Program_BoxArt_540x672_an9qji.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/10mintrainer"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png);"></span>
						<p class="type">Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>60 Days; 10 minutes a day</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/10mintrainer" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297170/10MinTrainer/10MinuteTrainer_Program_BoxArt_540x672_qxzg8w.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297170/10MinTrainer/10MinuteTrainer_Program_BoxArt_540x672_qxzg8w.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/p90xoneonone"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>30–70 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/p90xoneonone" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297172/P90XOneOnOne/OneOnOne_Program_BoxArt_540x672_dogasi.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297172/P90XOneOnOne/OneOnOne_Program_BoxArt_540x672_dogasi.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/insanityasylumvol1"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png);"></span>
						<p class="type">Slim &amp; Tone / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>30 DAYS; 45–60 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/insanityasylumvol1" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297170/InsanityAsylumVol1/Insanity_Asylum_V1_Program_BoxArt_540x672_emmmp1.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297170/InsanityAsylumVol1/Insanity_Asylum_V1_Program_BoxArt_540x672_emmmp1.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/insanityasylumvol2"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>30 DAYS; 20–60 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/insanityasylumvol2" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1427827841/Program_Thumbs_ASY2_tgzjlx.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1427827841/Program_Thumbs_ASY2_tgzjlx.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/BrazilButtLiftMaster"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png);"></span>
						<p class="type">Dance / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>30 DAYS; 25–35 minutes a day</p>
						<p class="general-info">Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/BrazilButtLiftMaster" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1432852145/BrazilButtLiftMaster/BBL_Master_Program_BoxArt_540x672_20150601.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1432852145/BrazilButtLiftMaster/BBL_Master_Program_BoxArt_540x672_20150601.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/Slimin6"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png);"></span>
						<p class="type">Slim &amp; Tone / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>6 WEEKS; 25–60 minutes a day</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/Slimin6" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1419297173/SlimIn6/SL6_Program_BoxArt_540x672_20150601.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1419297173/SlimIn6/SL6_Program_BoxArt_540x672_20150601.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/RockinBody"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/DANCE_ICON.png);"></span>
						<p class="type">Dance / Cardio</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>60 DAYS; 15–45 minutes a day</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/RockinBody" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430175296/RockinBody/RB_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430175296/RockinBody/RB_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/RevAbs"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Cardio / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>25–80 minutes a day</p>
						<p class="general-info">Advanced</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/RevAbs" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1427822485/Program_Thumbs_540x672_RevAbs_kgpzpy.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1427822485/Program_Thumbs_540x672_RevAbs_kgpzpy.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/TaiCheng"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/LOW-IMPACT_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/LOW-IMPACT_ICON.png);"></span>
						<p class="type">Low Impact / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>25–80 minutes a day</p>
						<p class="general-info">Beginner</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/TaiCheng" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1427822488/Program_Thumbs_540x672_TaiCheng_njcuka.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1427822488/Program_Thumbs_540x672_TaiCheng_njcuka.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/TurboJam"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Cardio / Dance</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>60 DAYS; 20–45 minutes a day</p>
						<p class="general-info">Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/TurboJam" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430177075/TurboJam/TJ_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430177075/TurboJam/TJ_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/YogaBootyBallet"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Low-Impact / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>10–60 minutes a day</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/YogaBootyBallet" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430177317/YogaBootyBallet/YBB_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430177317/YogaBootyBallet/YBB_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/TotalBodySolution"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/LOW-IMPACT_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/LOW-IMPACT_ICON.png);"></span>
						<p class="type">Low-Impact</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>15 minutes a day</p>
						<p class="general-info">Beginner</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/TotalBodySolution" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430176963/TotalBodySolution/TB_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430176963/TotalBodySolution/TB_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/PowerHalfHour"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/MUSCLE-BUILDING_ICON.png);"></span>
						<p class="type">Muscle Building / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>30 DAYS; 30 minutes a day</p>
						<p class="general-info">Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/PowerHalfHour" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430175115/PowerHalfHour/PHH_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430175115/PowerHalfHour/PHH_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/KSProjectYouType2"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Cardio / Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>20–60 minutes a day</p>
						<p class="general-info">Beginner</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/KSProjectYouType2" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430173078/KSProjectYouType2/KS_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430173078/KSProjectYouType2/KS_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/GreatBodyGuaranteed"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png);"></span>
						<p class="type">Slim &amp; Tone</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>7–11 minutes a day</p>
						<p class="general-info">Beginner</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/GreatBodyGuaranteed" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430172727/GreatBodyGuaranteed/GBG_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430172727/GreatBodyGuaranteed/GBG_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/Power90"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SLIM-TONE_ICON.png);"></span>
						<p class="type">Slim &amp; Tone / Muscle Building</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>90 DAYS; 4–38 minutes a day</p>
						<p class="general-info">Beginner / Intermediate</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/Power90" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430175057/Power90/P90_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430175057/Power90/P90_Program_BoxArt_540x672_20150501.jpg">
		</li>
		
		<li class="item has-hovered-data">

						<a href="/program/HoAlakeKino"></a>
				<div class="metadata-box">
					<div class="metadata-cell">
						<a href="javascript:void(0);" class="btn-close-rollover-data"></a>
	          			<img class="program-mobile-logo" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png">
						<span class="icon-type" style="background-repeat:no-repeat; background-image: url(//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png);"></span>
						<p class="type">Yoga / Low-Impact</p>
						<span class="divider"></span>
						<p class="general-info"><span class="icon-clock"></span>30 minutes a day</p>
						<p class="general-info">Beginner</p>
						<span class="divider"></span>
						<p class="info"></p>
						<a href="/program/HoAlakeKino" class="link">LET'S GET STARTED</a>
					</div>
				</div>
			<img class="img-card-responsive inited" data-src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1430173045/HoAlaKeKino/HOA_Program_BoxArt_540x672_20150501.jpg" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/q_80,h_336/v1430173045/HoAlaKeKino/HOA_Program_BoxArt_540x672_20150501.jpg">
		</li> -->
				
			</ul>
	</div>
</div>