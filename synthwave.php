<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Synthwave extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0],
        ];
    }

    public function onThemeInitialized()
    {
        // Enable AJAX for persistent music playback across page navigation
        $this->grav['config']->set('pages.ajax', true);
    }
}
