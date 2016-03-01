

    <ul class="hero-slider hero-carousel"><!-- style="width: auto; position: relative;"-->
        <?php while($this->block("content")->loop()) { ?>
        <li class="slide">
          <?= $this->image("myImage", [
                  "title" => "Hero Image",
                  "thumbnail" => "contentimages"
          ]); ?>
          <div class="hero-box">
            <div class="text-box container">
              <div class="text-wrap">            
                <p class="title-line-1"><?= $this->input("title-line-1", ["placeholder" => "Title 1"]); ?></p>
                <p class="title-line-2"><?= $this->input("title-line-2", ["placeholder" => "Title 2"]); ?></p>
                <p class="description">
                  <span class="desktop-description"><?= $this->textarea("desktop-description", ["width" => 300, "height" => 50, "placeholder" => "Desktop-Description"]) ?></span>
                  <span class="mobile-description"><?= $this->textarea("mobile-description", ["width" => 300, "height" => 50, "placeholder" => "Mobile-Description"]) ?></span>
                </p>
                <a class="read-more" href="javascript:void( 0 )"></a>          
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>
      <!-- <img class="coming-soon" src="/wp-content/themes/ripple/img/hero/coming-soon.png" width=400 style="display: none;" /> -->
  <!-- <div class="coming-soon coming-soon-preview" style="display: none;">
      <div class="coming-soon-label">PREVIEW NOW</div>
  </div> -->


