<?php

	$embedded = '';
	
	$prefer_default = \Idno\Core\site()->config()->embedlycards_preferdefault;
    
	$output = '';
	if ($prefer_default == 'true') {
		$output = $this->draw('entity/content/embed', true, false); // render the default view without replacements
	}

	if (!trim($output)) {
		
		$body = Idno\Core\site()->triggerEvent('url/expandintext', ['object' => $vars['object']], $vars['object']->body); 

		if (filter_var($body, FILTER_VALIDATE_URL)) {
			$output = '<a class="embedly-card" href="' . $body . '">' . $vars['object']->getTitle() . '</a>';
		}
	}
	
	echo $output;