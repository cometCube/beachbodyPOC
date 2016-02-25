<?php
$normalPrograms = $this->normalPrograms;
$premiumPrograms = $this->premiumPrograms;
$trainers = $this->trainers;
?>
<div class="module-banner white-bg clearfix" style="background:#f0f0f0">
    <div class="fixed-container"></div>
</div>
<div class="module-banner module-banner-announcement module-margin-bottom clearfix" style="display: none;">
    <div class="fixed-container">
        <div class="announcement-container active">
            <div class="announcement-icon"> <img src="/website/static/announcement.png"></div><!--
            --><div class="announcement-container">
                <div class="announcement-title"></div>
                <div class="announcement-text"></div>
                <div></div>
            </div>
        </div>
        <div class="toggle">
            <img class="announcement-toggle" src="/website/static/up-arrow.png">
        </div>
    </div>
</div><div class="container module-drawer clearfix widget-cdj-aud">
    <div id="bod-activity"></div>
    <div class="half-container-left module-drawer module-margin-bottom clearfix">
       <a href="http://club.teambeachbody.com/program/challenge-du-jour" class="module-title">Challenge Du Jour</a>
        <div class="cdj-module">
                                <a href="http://club.teambeachbody.com/video/MHC20305D04?15+Min+Leg+Hammer&amp;program=The+Master%27s+Hammer+and+Chisel&amp;content_type=challenge-du-jour" class="video-modal-btn" data-title="15 Min Leg Hammer" data-description="15 minutes is all you need to fire up your quads, hamstrings, glutes, and calves for maximum strength and power." data-program="The Master&#39;s Hammer and Chisel" data-duration="20m">
                              <div class="cdj-module-bg">
                    <img alt="Challenge Du Jour" src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/c_scale,h_223,w_569/web/cdj_default.png">
                </div>
                <div class="cdj-module-info">
                    <strong>02.23</strong>
                    <span>15 Min Leg Hammer</span>
                    <span>The Master's Hammer and Chisel</span>
                </div>
            </a>
        </div>
    </div>



    <div class="half-container-right module-drawer module-margin-bottom clearfix">
                  <input type="hidden" id="activeUsersCount" value="343">
          <input type="hidden" id="Counter" value="4">
          <input type="hidden" id="totalUsersCount" value="2147">

          <a href="http://club.teambeachbody.com/#" class="module-title">Activity</a>
          <div class="bod-activity-wrapper">
            <div class="bod-activity">

              <div class="bod-left-container">
                
                <div class="bod-left-content">
                  <div class="heading blue">Members Working Out</div>
                  <strong>Online Now!</strong>
                  <h2>
                    <span class="numbers-with-commas" id="activeUsers">343</span>
                  </h2>
                </div>
                
                <div class="bod-left-content">
                  <div class="heading green">Peak Active Users</div>
                  <h2>
                    <span class="numbers-with-commas" id="totalUsers">2,147</span>
                  </h2>
                </div>

              </div>

              <div class="bod-right-container">
                   <div class="heading dark-b">Top 3 Programs</div>   
                   <ol id="topPrograms"><li>Hammer and Chisel</li><li>21 Day Fix</li><li>P90X3</li></ol>
              </div>
            </div>
          </div>
            </div>
</div>

<script type="text/javascript">
window.bbLoaders[window.bbLoaders.length] = function() {
  bb.audCounter('.numbers-with-commas');
};
</script>

<div class="container module-drawer module-margin-bottom clearfix">

  <a class="module-title" href="http://club.teambeachbody.com/programs">Member Library</a>
    <a class="question-tooltip" href="javascript:void(0);">
      <span class="icon-question"></span>
      <span class="popover">
          <span class="icon-question-circle"></span>
          <p class="title">Member Library</p>
          <p class="description">These are the <br>programs available to all Club members</p>
      </span>
  </a>

  <div class="slider-box loaded">
    <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;">
    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 336px;">
    <ul class="bxslider drawer-slider slider-cards" id="all_programs" style="width: 3315%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
    <?php
      foreach ($normalPrograms as $key => $value) {
    ?>
        <li class="drawer-item has-hovered-data" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
        <img class="img-card-responsive inited" data-src="<?= $value->getPimage();?>" src="<?= $value->getPimage();?>">
                <a href="http://club.teambeachbody.com/program/autumncalabreseexclusives"></a>

        <div class="metadata-box">
          <div class="metadata-cell">
            <a href="javascript:void(0);" class="btn-close-rollover-data"></a>
            <span class="icon-type" style="background: none;"><img src="<?= $value->getFimage();?>" alt="<?= $value->getPtype();?>"></span>
            <p class="type"><?= $value->getPtype();?></p>
            <span class="divider"></span>
            <p class="general-info"><span class="icon-clock"></span><?= $value->getFtimelabel();?></p>
            <p class="general-info"><?= $value->getFexpertlevel();?></p>
            <span class="divider"></span>
            <p class="info"></p>
            <a href="http://club.teambeachbody.com/program/autumncalabreseexclusives" class="link">LET'S GET STARTED</a>
          </div>
        </div>

      </li>
    <?
    }
    ?>
        </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
  </div>
</div>

<script type="text/javascript">
window.bbLoaders[window.bbLoaders.length] = function() {
  var slideIdentifier = $('#all_programs');
  bb.drawerSlider(slideIdentifier, {
    type: "default",
    hasPurchasedAllPrograms: false  });
};
</script>


<div class="container module-drawer module-margin-bottom clearfix">

  <a class="module-title" href="http://club.teambeachbody.com/premium-content">Premium Content</a>
    <a class="question-tooltip" href="javascript:void(0);">
      <span class="icon-question"></span>
      <span class="popover">
          <span class="icon-question-circle"></span>
          <p class="title">Premium Content</p>
          <p class="description">New and upcoming programs<br>available for purchase</p>
      </span>
  </a>

  <div class="slider-box loaded">
    <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;">
    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 336px;"><ul class="bxslider drawer-slider slider-cards" id="premium_programs" style="width: 1115%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
    <?
    foreach ($premiumPrograms as $key => $value) {
    ?>
        <li class="drawer-item has-hovered-data" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
        <img class="img-card-responsive inited" data-src="<?= $value->getPimage();?>" src="<?= $value->getPimage();?>">
                  <div class="item-overlay premium">UNLOCK NOW</div>
                <a href="http://club.teambeachbody.com/program/BodyBeast"></a>

        <div class="metadata-box">
          <div class="metadata-cell">
            <a href="javascript:void(0);" class="btn-close-rollover-data"></a>
            <span class="icon-type" style="background: none;"><img src="<?= $value->getFimage();?>" alt="<?= $value->getPtype();?>"></span>
            <p class="type"><?= $value->getPtype();?></p>
            <span class="divider"></span>
            <p class="general-info"><span class="icon-clock"></span><?= $value->getFtimelabel();?></p>
            <p class="general-info"><?= $value->getFexpertlevel();?></p>
            <span class="divider"></span>
            <p class="info"></p>
            <a href="http://club.teambeachbody.com/program/BodyBeast" class="link">UNLOCK NOW</a>
          </div>
        </div>

      </li>
    <?php
    }
    ?>
        </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
  </div>
</div>

<script type="text/javascript">
window.bbLoaders[window.bbLoaders.length] = function() {
  var slideIdentifier = $('#premium_programs');
  bb.drawerSlider(slideIdentifier, {
    type: "premium",
    hasPurchasedAllPrograms: false  });
};
</script>

<div class="container module-drawer module-margin-bottom clearfix">

  <a href="http://club.teambeachbody.com/types" class="module-title">By Type</a>
    <!-- a class="question-tooltip" href="javascript:void(0);">
        <span class="icon-question"></span>
        <span class="popover">
            <span class="icon-question-circle"></span>
            <p class="title">By Type</p>
            <p class="description">View the Member Library<br> by workout type</p>
        </span>
    </a -->
<div class="slider-box loaded">
  <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 167px;"><ul class="bxslider drawer-type-b-slider" id="programType" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
    <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
      <a href="http://club.teambeachbody.com/types/cardio/">
        <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-cardio.png);"></span></div>
        <div class="text-box"><span>Cardio</span></div>
      </a>
    </li>
    <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
      <a href="http://club.teambeachbody.com/types/muscle-building/">
        <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-musclebuilding.png);"></span></div>
        <div class="text-box"><span>Muscle Building</span></div>
      </a>
    </li>
    <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
      <a href="http://club.teambeachbody.com/types/less-than-30-min/">
        <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-30mins.png);"></span></div>
        <div class="text-box"><span>Less than 30 min.</span></div>
      </a>
    </li>
    <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
      <a href="http://club.teambeachbody.com/types/slim-tone/">
        <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-slim_tone.png);"></span></div>
        <div class="text-box"><span>Slim &amp; Tone</span></div>
      </a>
    </li>
    <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
      <a href="http://club.teambeachbody.com/types/dance/">
        <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-dance.png);"></span></div>
        <div class="text-box"><span>Dance</span></div>
      </a>
    </li>
    <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
      <a href="http://club.teambeachbody.com/types/low-impact-3/">
        <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-lowimpact.png);"></span></div>
        <div class="text-box"><span>Low Impact</span></div>
      </a>
    </li>
  </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
  </div>
</div>

<script type="text/javascript">
window.bbLoaders[window.bbLoaders.length] = function() {
  var slideIdentifier = $('#programType');
  bb.drawerSlider(slideIdentifier);
};
</script>
<div class="container module-drawer clearfix">

  <a href="http://club.teambeachbody.com/trainers" class="module-title">By Trainer</a>

    <!-- a class="question-tooltip" href="javascript:void(0);">
        <span class="icon-question"></span>
        <span class="popover">
            <span class="icon-question-circle"></span>
            <p class="title">By Trainer</p>
            <p class="description">View the Member Library<br> by Trainer</p>
        </span>
    </a -->
<div class="slider-box loaded">
  <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;">
  <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 336px;">
  <ul class="bxslider drawer-slider" id="trainers" style="width: 1515%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
  <?php
  foreach ($trainers as $key => $value) {
    $trainerName = explode(' ', $value->getTname());
  ?>
    <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
      <a href="http://club.teambeachbody.com/trainers/tony-horton/">
        <img class="img-card-responsive png-jpg inited" data-src="<?= $value->getTimgage();?>" src="<?= $value->getTimgage();?>">
        <div class="people-name">
          <div>
            <span class="name"><?= $trainerName[0];?></span>
            <br>
            <span class="surname"><?= $trainerName[1];?></span>
          </div>
        </div>
      </a>
    </li>
  <?php
  }
  ?>
  </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
 </div>
</div>

<script type="text/javascript">
window.bbLoaders[window.bbLoaders.length] = function() {
  var slideIdentifier = $('#trainers');
  bb.drawerSlider(slideIdentifier);
};
</script>
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
        <a target="_blank" href="http://mybeachbodyperformance.com/">
          <img src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1435254142/BBPerformance/BB_Performance_BottomPromo_20150630.jpg">
        </a>
      </div>
          </div>
  </div>
</div>