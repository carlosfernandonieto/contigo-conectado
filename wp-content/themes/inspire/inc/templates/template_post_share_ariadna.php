<?php
	$linkPost = get_permalink($post->ID);
?>

<p style="text-align: center;"><strong>¡Comparte!</strong> Sé un generador de cambio y promueve junto con nosotros el uso responsable y creativo de Internet en tus redes sociales.</p>

<div class="share_social_media_post">
	<div class="block_social_media">
		<a target="_blank" 
			href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $linkPost; ?>" 
			class="fb-xfbml-parse-ignore">
				<img src="https://phpstack-293961-914032.cloudwaysapps.com/wp-content/themes/inspire/images/share_fb.png"/>
		</a>
	</div>	
	<div class="block_social_media">
		<a class=""
				href="https://twitter.com/intent/tweet?url=<?php echo $linkPost; ?>" target="_blank">
			<img src="https://phpstack-293961-914032.cloudwaysapps.com/wp-content/themes/inspire/images/share_tw.png"/>
		</a>
	</div>
	<div class="block_social_media">
		<a title="Compartir en WhatsApp" class="share_whatsapp_home_link" href="https://api.whatsapp.com/send?text=<?php echo $linkPost; ?>" target="_blank">
			<img src="https://phpstack-293961-914032.cloudwaysapps.com/wp-content/themes/inspire/images/share_wa.png"/>
		</a>
	</div>
</div>