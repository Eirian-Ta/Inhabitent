<!-- This file is used to markup the public-facing widget. -->

	<p  class="email"><i class="fas fa-envelope"></i><a class="email"><?php echo '  '. $email; ?> </a></p>
	<p class="telephone"><i class="fas fa-phone"></i><a class="tel"><?php echo '  '. $tel; ?> </a></p>
	<p class="loc"><i class="fas fa-map-marker-alt"></i><?php echo '  '. $loc; ?></p>
	<p class="social-media">
	  	<span><a class="fb" href=<?php echo 'http://'. $fb ?> target="_blank"><i class="fab fa-facebook-square"></i></a></span>
	  	<span><a class="insta" href=<?php echo 'http://'. $insta ?> target="_blank"><i class="fab fa-twitter-square"></i></a></span>
	  	<span><a class="gg" href=<?php echo 'http://'. $gg ?> target="_blank"><i class="fab fa-google-plus-square"></i></a></span>
	</p>
			