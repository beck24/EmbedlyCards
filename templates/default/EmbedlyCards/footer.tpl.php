<?php

$site_url = \Idno\Core\site()->config()->getURL();

// since Embedly doesn't do global settings for cards we'll store our own on a hidden
// div and dynamically clone them for each embedly-card link
$card_controls = \Idno\Core\site()->config()->embedlycards_controls ? 1 : 0;
$chrome = (int) \Idno\Core\site()->config()->embedlycards_chrome;
$theme = \Idno\Core\site()->config()->embedlycards_theme ? 'dark' : 'light';
$analytics = (int) \Idno\Core\site()->config()->embedlycards_analytics;
$width = \Idno\Core\site()->config()->embedlycards_width;

echo '<div id="EmbedlyCards-settings" class="hidden"';
echo ' data-card-controls="' . $card_controls . '"';
echo ' data-card-chrome="' . $chrome . '"';
echo ' data-card-theme="' . $theme . '"';
echo ' data-card-analytics="' . $analytics . '"';
echo ' data-card-width="' . $width . '"';
echo '</div>'
?>

<script type="text/javascript" src="<?= $site_url ?>IdnoPlugins/EmbedlyCards/static/js/EmbedlyCards.js"></script>