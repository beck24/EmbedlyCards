<?php

    namespace IdnoPlugins\EmbedlyCards {

        class Main extends \Idno\Common\Plugin {
            function registerPages() {
				// Administration page
                \Idno\Core\site()->addPageHandler('admin/embedlycards','\IdnoPlugins\EmbedlyCards\Pages\Admin');
				
                \Idno\Core\site()->template()->extendTemplate('shell/footer','EmbedlyCards/footer');
				\Idno\Core\site()->template()->replaceTemplate('entity/content/embed', 'EmbedlyCards/embed');
				\Idno\Core\site()->template()->extendTemplate('admin/menu/items','admin/embedlycards/menu');
            }
        }

    }