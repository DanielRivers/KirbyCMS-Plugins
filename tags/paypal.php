<?php
kirbytext::$tags['paypal'] = array(
	'attr' => array(
		'image'
	),
	'html' => function($tag) {
		$buttonid = $tag->attr('paypal');
		$image    = $tag->attr('image', 'https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif');

		return '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="text-align: center;">' .
				'<input type="hidden" name="cmd" value="_s-xclick">' .
				'<input type="hidden" name="hosted_button_id" value="' . $buttonid . '">' .
				'<input type="image" src="' . $image . '" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">' .
				'</form>';
	}
);