<div class="view-instagram-feed">
  <div class="pro-info">
    <div><?php print $profile_pic; ?></div>
    <div>
      <?php print $profile_full_name; ?>
      <br />
      @<?php print $profile_name; ?>
      <br />
      <a href="http://instagram.com/<?php print $profile_name; ?>?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
    </div>
  </div>
  <div id="instagram-feed" class="clearfix"></div>
  <div class="component-instagram-feed__link">
    <a href="http://instagram.com/<?php print $profile_name; ?>" target="_blank">
      <span class="component-instagram-feed__link-text">View Instagram</span>
    </a>
  </div>
</div>
