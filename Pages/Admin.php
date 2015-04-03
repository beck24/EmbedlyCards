<?php

    /**
     * EmbedlyCards administration
     */

    namespace IdnoPlugins\EmbedlyCards\Pages {

        /**
         * Default class to serve Facebook settings in administration
         */
        class Admin extends \Idno\Common\Page
        {

            function getContent()
            {
                $this->adminGatekeeper(); // Admins only
                $t = \Idno\Core\site()->template();
                $body = $t->draw('admin/embedlycards');
                $t->__(array('title' => 'Embedly Cards', 'body' => $body))->drawPage();
            }

            function postContent() {
                $this->adminGatekeeper(); // Admins only
                $override = $this->getInput('embedlycards_preferdefault');
                \Idno\Core\site()->config->config['embedlycards_preferdefault'] = $override;
                \Idno\Core\site()->config()->save();
                \Idno\Core\site()->session()->addMessage('Your Embedly Cards settings have been saved');
                $this->forward(\Idno\Core\site()->config()->getDisplayURL() . 'admin/embedlycards/');
            }

        }

    }