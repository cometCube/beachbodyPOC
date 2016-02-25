<?php
$trainers = $this->trainers;
?>
<div class="container module-tiles module-margin-bottom clearfix">

  <p class="module-title">All Trainers</p>

  <div class="programs-box">

    <ul class="programs-content trainers">
    	<?php
    	foreach ($trainers as $key => $value) {
    		//echo "<pre>";
    		//print_r($value);
    		$trainerName = explode(' ', $value->getTname());
    	?>
        <li class="item">
        <a href="/trainer/<?= $value->getKey();?>">
          <img class="img-card-responsive inited" data-src="<?= $value->getTimgage();?>" src="<?= $value->getTimgage();?>">
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
      </ul>
  </div>
</div>