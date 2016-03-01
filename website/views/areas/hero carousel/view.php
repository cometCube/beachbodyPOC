<style type="text/css">
    .hero-img {
        max-width: 1200;
    }
</style>

<?php while($this->block("contentblock")->loop()) { ?>
    <li class="slide">
    	<?= $this->image("myImage", [
    					"title" => "Drag your image here",
    					/*"width" => 200,
    					"height" => 200,*/
    					"thumbnail" => "contentimages"
    	]); ?>
    </li>
<?php } ?>
                    
  
                 