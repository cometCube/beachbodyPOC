<?php
$programDetails = $this->programDetails;
?>
<style type="text/css">
	.hide{
		display: none;
	}
	.show {
		display: block;
	}

</style> 
</head>
<script type="text/javascript">
	function showWorkouts(elem) {
		$(elem).parent().find('.content').toggle();
	}
	function showWorkOutDesc(element) {
		$(element).next('.hidden-description').toggle();
	}
</script>
<div class="module-featured-line module-margin-bottom white-bg clearfix">

	<div class="fixed-container">

		<div class="row clearfix">

		
			<div class="col-33">

				<div class="item">

					<div class="col-1">

					
						<img src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/30-MINS_ICON.png" alt="10 WEEKS; 25 minutes a day">

					
					</div>

					<div class="col-2">

						<p class="title"><?= $programDetails['program_details']['time'];?></p>

						<p class="sub-title">Each workout includes a modifier so anyone can succeed</p>

					</div>

				</div>

			</div>

		
			<div class="col-33">

				<div class="item">

					<div class="col-1">

					
						<img src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CARDIO_ICON.png" alt="Cardio / Slim &amp; Tone">

					
					</div>

					<div class="col-2">

						<p class="title"><?= $programDetails['program_details']['type'];?></p>

						<p class="sub-title">Focus Interval Training works every muscle group in your body</p>

					</div>

				</div>

			</div>

		
			<div class="col-33">

				<div class="item">

					<div class="col-1">

					
						<img src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/INTERMEDIATE_ICON.png" alt="Intermediate">

					
					</div>

					<div class="col-2">

						<p class="title"><?= $programDetails['program_details']['expert'];?></p>

						<p class="sub-title">Basic fitness level okay. Exertion may increase over time.</p>

					</div>

				</div>

			</div>

		
		</div>

		<div class="mobile-btn"><a href="javascript: void( 0 )">MORE</a></div>

	</div>

</div>
<script>

	window.bbLoaders[ window.bbLoaders.length ] = function () {

		bb.featuredLine( '.module-featured-line' );

	};

</script>
<script>var utag_data={"logged_in_status":"true","page_name":"Focus T25 product page","page_type":"Program","site_name":"bod","site_section":"bod-dom","page_group":"Unlock","page_subgroup":"","customer_id":"31E66C34-C960-4EE9-8AC8-3D1505A4A116","customer_email":"c707fd9b2e0b2bab3780cad2424403c500c665ec78c5829b7ba861b77b2bce81","unlock_type":"locked"};</script>
<?php
if($programDetails['program_details']['ispremium'] == 1) {
?>
<article class="module-program-unlock-options module-margin-bottom clearfix">
	<div class="fixed-container">
		<div class="module-program-wrapper">
			<div class="message">
				<?= $programDetails['program_details']['desc'];?>
			</div><!---->
			<div class="buttons">
				<a class="button button-video button-trailer btn-play video-modal-btn" href="/video/T2514677B01?Focus+T25&amp;program=Focus+T25&amp;content_type=group-member" title="Focus T25" data-videoguid="T2514677B01" data-brandcode="T25" data-program="T25" data-title="Focus T25" data-description="No time to work out? Shaun Tâ��s going to get you an hourâ��s worth of results in just 25 minutes. With FOCUS T25Â®, thatâ��s all it takes to look better, feel better, change your life." data-duration="" data-preloadimg="" data-equipment="">SAMPLE WORKOUT</a>  						<a class="button button-unlock button-orange" href="https://club.teambeachbody.com/unlock/T25" title="Unlock Program">UNLOCK NOW</a>
			</div>
		</div>
	</div>
</article>
<?php 
}
?>
<script>

		
		window.localStorage.setItem( 'programUrl', 'program/FocusT25' );

		
		
	</script>
<div class="fixed-container">
  <div class="row clearfix">
    <div class="col-66 col-medium-100">
      
<div class="module-workout-tracks module-margin-bottom clearfix rel">
	<p class="module-title module-title-lang">Program Details</p>

        
		<span class="divider"></span>
		
		

			<div class="accordion" >
	<?php
	foreach ($programDetails['workout-groups'] as $key => $value) {
	?>		
	<div class="item"  >

		<p class="module-title head-label workout-unlock " onclick="showWorkouts(this)">

			<span class="arrow"></span>

			<?= $value['wg_name']; ?>		</p>


		<span class="divider"></span>

		<div class="content" >

			<div class="track-row row-head clearfix">

				<div class="col-play"></div>

				<div class="col-content">

					<div class="workout-name">WORKOUT NAME</div>

					<div class="equipment">REQUIRED EQUIPMENT</div>

					
					<div class="duration">DURATION</div>

				</div>

			</div>

			<?php
			foreach ($value['workout'] as $k => $val) {
			?>
			<div class="track-row clearfix">

				<div class="col-play">

				
				</div>

				<div class="col-content"  onclick="showWorkOutDesc(this)">

					<div class="workout-name"><?= $val['name'];?></div>

					<div class="equipment">

					
					</div>

				
					<div class="duration">

						<span class="icon-clock"></span><?= $val['time'];?>
					</div>

				</div>

				<div class="hidden-description">

					<p>

						<span class="label">Required Equipment</span>

						<span class="important-text"><?= $val['req_eqp'];?></span>

					</p>

					<p>

						<span class="label">Recommended Equipment</span>

						
						<span class="important-text"><?= $val['rec_eqp'];?></span>

					</p>

					<p><span class="label">Workout Description:</span><?= $val['desc'];?></p>

				
					<a class="close-description" href="javascript:void( 0 );">SHOW LESS</a>

				</div>

			</div>
			<?php
			}
			?>
		</div>
		</div>
		<?php
		}
		?>
	</div>

<div class="module-disclaimer" data-version="bf3c5238d7ee186cfb600ef6c8e67a4e">

    <div class="content">

        <p class="title">WARNING!</p>

        <div class="text-box">
            <p class="sub-title" align="CENTER"><strong>Consult your physician, assess your fitness levels, and follow all safety instructions before beginning this or any exercise program and nutrition plan.</strong></p>
<p class="text">The Beachbody<sup>®</sup> program you are about to begin is a physically demanding and high-intensity exercise program. It is extremely important that you listen to your body, use common sense, take breaks, and hydrate as needed to avoid injury and help prevent serious medical conditions, such as rhabdomyolysis, a rare but potentially lethal threat impacting people who have not let their muscles adapt to difficult workouts. Only you can know if you are in sufficient physical condition to safely perform this exercise program and follow the nutrition plan.</p>
<p class="text">&nbsp;If at any time you feel you are exercising beyond your current fitness abilities, or you feel any discomfort, pain, dizziness, or nausea, you should discontinue exercise immediately and reconsider your use of the program or the particular exercise routine. </p>
<p class="text">&nbsp;Certain Beachbody programs utilize resistance bands, pull up bars, stability balls, sliding discs, weights and other equipment which, if not used correctly, could lead to serious injury.  For your safety, you must use any equipment shown in the workouts only as demonstrated, inspect any equipment prior to each use and refrain from using any equipment that appears damaged, worn or defective.  For any equipment that requires hanging or attaching, always use a secure, proper, and stable anchor.  For exercise moves that require wrapping exercise bands around your body, make sure the bands are firmly secure to prevent slipping and injury to yourself or anyone else. Always exercise caution during use to make sure you do not lose your grip or control, such as making sure your hands are not wet or sweaty. </p>
<p class="text">&nbsp;When performing jumping or other exercises using a workout bench, make sure your bench is stable, strong enough to hold your weight and does not move. If you do not think you can safely perform exercises with your bench, or you do not have a proper bench, you should use the modifier exercises to stay safe without the bench. Do not substitute any other equipment for a proper workout bench. Improper form or use of equipment can cause serious and permanent injury. Always make sure your exercise area is clear of any obstacles, including pets, children, other people, or equipment not currently in use.</p>
<p class="text">&nbsp;If you have any <strong>unique or special medical conditions, such as if you’re pregnant, or if you have a history of knee, ankle, shoulder or spinal (back or neck) problems</strong>, you must consult with a competent and reliable physician to understand all risks, contraindications and complications of using this program, and receive authorization from them before beginning. Failure to do so could result in significant injury to you and others (including, if applicable, your unborn child). By using this program, you assume all dangers, hazards and risks of injury in the use of this program.</p>
<p class="text">Beachbody offers many fitness alternatives if you are prone to or have a history of injuries, or are not ready for a physically demanding workout and nutrition plan.  Accordingly, to the extent permitted by law, Beachbody, LLC, will not be liable to any person or entity for any damage or loss caused or alleged to be caused directly or indirectly by any workouts, nutrition plan, advice or any other Beachbody content.</p>            <p class="text container-checkbox">
                <input type="checkbox" id="checkAgreement" class="check-box">
                <label for="checkAgreement">

				By checking the box and clicking “Accept”, I acknowledge I have read, understand, and agree with this warning.
                </label>
            </p>

        </div>

        <div class="controls">
            <a href="javascript:void(0);" class="btn-decline">Decline</a>

            <a href="javascript:void(0);" class="btn-accept disabled">accept</a>
        </div>

        <a href="javascript:void(0);" class="btn-close"></a>

    </div>

</div>
</div>

<!-- </div> -->


<script>

	window.bbLoaders[ window.bbLoaders.length ] = function() {

		bb.workoutTracks( '.module-workout-tracks' );

	};

</script>
    </div>
    <div class="col-33 col-medium-100">
      <p class="module-title program-downloads-title">Program Materials</p>

<ul class="module-drawer sidebar">

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/QA_ICON.png" width="50" height="52" alt="Trainer Q&amp;A">

				Trainer Q&amp;A

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Trainer Q&amp;A</p>

					<p class="description">Shaun answers your questions and more in his exclusive Q&amp;A session with BOD member questions.</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/SPOTIFY_ICON.png" width="50" height="52" alt="Spotify Playlists">

				Spotify Playlists

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Spotify Playlists</p>

					<p class="description">Let 25 minutes of hits power you through your workout</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/FAQ_ICON.png" width="50" height="52" alt="FAQ">

				FAQ

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">FAQ</p>

					<p class="description">All the answers you need to get the results you want!</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/JUMP-START.png" width="50" height="52" alt="Quick Start">

				Quick Start

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Quick Start</p>

					<p class="description">The 3-Step Quick Start Guide helps you hit the ground running</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CALENDAR_ICON.png" width="50" height="52" alt="Foundation Calendar">

				Foundation Calendar

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Foundation Calendar</p>

					<p class="description">Cross off each day as you get closer to the body you want</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CALENDAR_ICON.png" width="50" height="52" alt="Pure Gamma Calendar">

				Pure Gamma Calendar

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Pure Gamma Calendar</p>

					<p class="description">Use the Gamma calendar and cross off each day as you get closer to the body you want</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/NUTRITION_ICON.png" width="50" height="52" alt="Nutrition Guide">

				Nutrition Guide

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Nutrition Guide</p>

					<p class="description">Just 5 minutes of prep per meal. Perfect for busy folks.</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/QUICK-LAUNCH_ICON.png" width="50" height="52" alt="5-Day Fast Track">

				5-Day Fast Track

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">5-Day Fast Track</p>

					<p class="description">The 5 Day Fast Track gives you a head start on getting ripped</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936573/Icons/redesign/CALENDAR_ICON.png" width="50" height="52" alt="Calendriers d'Entraînement">

				Calendriers d'Entraînement

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Calendriers d'Entraînement</p>

					<p class="description">Barrez chaque journée à mesure que vous vous rapprochez du corps que vous voulez vraiment obtenir.</p>

				</div>

			</a>

		</li>

	
		
		<li>

			<a class="title" href="#program-downloads-unlock" target="_self" title="download">

				<img class="icon" src="//imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1453936574/Icons/redesign/NUTRITION_ICON.png" width="50" height="52" alt="Guide Nutritionnel">

				Guide Nutritionnel

			</a>


			<a class="question-tooltip" href="javascript: void( 0 );">

				<span class="icon-question-dark"></span>

				<div class="popover offset">

					<p class="title">Guide Nutritionnel</p>

					<p class="description">Il suffit de 5 minutes de préparation par repas. Idéal pour les gens occupés.</p>

				</div>

			</a>

		</li>

	
</ul>

<article id="program-downloads-unlock" class="overlay">

	<style scoped="">

		#program-downloads-unlock.overlay {

			position: fixed;
			top:      0;
			bottom:   0;
			left:     0;
			right:    0;

			background: rgba( 0, 0, 0, 0.7 );

			opacity: 0;

			transition: opacity 500ms;

			visibility: hidden;

		}

		#program-downloads-unlock.overlay:target {

			opacity: 1;

			visibility: visible;

			z-index: 10000;

		}

		#program-downloads-unlock .modal {

			position:  fixed;
			top:       50%;
			left:      50%;
			transform: translate( -50%, -50% );

			padding: 25px;

			width: 300px;

			background: #FFF;

			border-radius: 5px;

			transition: all 5s ease-in-out;

		}

		#program-downloads-unlock .icon-close {

			position: absolute;
			top:      0;
			right:    10px;

			color: #333;

			font-size:   30px;
			font-weight: bold;

			transition: all 200ms;

		}

		#program-downloads-unlock .icon-close:hover { color: #F00; }

		#program-downloads-unlock .body    { overflow: auto; }
		#program-downloads-unlock .content { margin-bottom: 25px; }
		#program-downloads-unlock .buttons { text-align: center; }

		@media screen and ( max-width: 700px ) {

			#program-downloads-unlock .modal { width: 70%; }

		}

	</style>

	<div class="modal">

		<a class="icon-close" href="#close" title="Close">×</a>

		<div class="body">

			
			<p class="content">Sorry to be a downer, but you have to unlock this program to access that feature.</p>

			
				<div class="buttons">

					<a class="button button-unlock button-orange" href="https://club.teambeachbody.com/unlock/T25" title="Unlock Program">UNLOCK NOW</a>

				</div>

			
		</div>

	</div>

	<script>

		document.querySelector( '#program-downloads-unlock.overlay' ).addEventListener( 'click', function ( event ) {

			this.querySelector( '.icon-close' ).click();

			window.location.hash = null;

		} );

		document.addEventListener( 'mouseover', function ( event ) {

			window.navigator.backStatus = false;

		} );

		document.addEventListener( 'mouseleave', function ( event ) {

			window.navigator.backStatus = true;

		} );

		window.addEventListener( 'hashchange', function ( event ) {
			var hash = window.location.hash;

			if(hash == "#program-downloads-unlock"){
				$("#program-downloads-unlock .modal").show();
			}

			if(hash == "#close"){
				setTimeout(function(){
					$("#program-downloads-unlock .modal").hide();
				},100)
			}

			if ( window.navigator.backStatus ) {
				window.location.replace( '/' );
			}

		} );

	</script>

</article>    </div>
  </div>
</div>
<div class="module-guide">

    <div class="content">
        <p class="title">Quick Start Guide</p>

        <div class="text-box">

           
          	<div class="item-row">
                <div class="col-number">
                    1.
                </div>
                <div class="col-text">
                    <p class="step-title"><span class="number visible-phone">1. </span> </p>
                    <p class="info">
                        Take your “before” photos, weight, and measurements before you start, that will become the proof of how far you’ve come. For some pointers on how to take your “Before" and "After” photos, click here.                    </p>
                </div>
                <div class="col-icon">
                                          <span class="icon" style="background-image: url('');">
                      </span>
                                    </div>
            </div>
        	 
          	<div class="item-row">
                <div class="col-number">
                    2.
                </div>
                <div class="col-text">
                    <p class="step-title"><span class="number visible-phone">2. </span> </p>
                    <p class="info">
                        We recommend that you read your Program Materials before you begin. They’re designed to help you get the best possible results!                    </p>
                </div>
                <div class="col-icon">
                                          <span class="icon" style="background-image: url('');">
                      </span>
                                    </div>
            </div>
        	 
          	<div class="item-row">
                <div class="col-number">
                    3.
                </div>
                <div class="col-text">
                    <p class="step-title"><span class="number visible-phone">3. </span> </p>
                    <p class="info">
                        PRESS PLAY on your first workout—Alpha Cardio. Follow your calendar for all future workouts.                    </p>
                </div>
                <div class="col-icon">
                                          <span class="icon" style="background-image: url('');">
                      </span>
                                    </div>
            </div>
        	        </div>
        <div class="controls">
            <a href="javascript:void(0);" class="btn-back"><span class="arrow"></span>BACK<span class="hidden-phone"> TO PROGRAM</span></a>

            <a href="javascript:void(0);" class="btn-continue">LET'S GET STARTED</a>
        </div>

        <a href="javascript:void(0);" class="btn-close"></a>

    </div>

</div>
<div class="module-promo white-bg clearfix">
  <div class="container">
    <div class="row clearfix">
            <div class="col-33">
        <a target="_blank" href="http://www.shakeology.com/?ICID=BOD_SHAKE_SHKJAR_BANNER">
          <img src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455230545/Shakeology/SHK_BottomPromo_Jar.jpg">
        </a>
      </div>
            <div class="col-33">
        <a target="_blank" href="http://teambeachbody.com/workout-routines/the-masters-hammer-chisel/?ICID=BOD_TBB_MHCLAUNCH_HERO">
          <img src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1448387333/HammerChisel/MHC_BottomPromo_Launch_20151201.jpg">
        </a>
      </div>
            <div class="col-33">
        <a target="_blank" href="http://MyBeachbodyPerformance.com">
          <img src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1435254142/BBPerformance/BB_Performance_BottomPromo_20150630.jpg">
        </a>
      </div>
          </div>
  </div>
</div>