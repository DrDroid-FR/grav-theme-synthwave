<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;

class Synthwave extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0],
            'onRequestHandlerInit' => ['onRequestHandlerInit', 100],
        ];
    }

    public function onThemeInitialized()
    {
        $version = $this->grav->getVersion();
        
        // Detect GRAV version (2.x or 1.x)
        if (version_compare($version, '2.0.0', '>=')) {
            $this->grav['config']->set('theme.grav_version', '2.x');
        } else {
            $this->grav['config']->set('theme.grav_version', '1.x');
        }
        
        // Mark theme as AJAX-enabled
        $this->grav['config']->set('theme.enable_ajax', true);
    }

    public function onRequestHandlerInit(Event $event)
    {
        $request = $event['request'];
        $query = $request->getQueryParams();
        
        // Detect AJAX request via query param or X-Requested-With header
        $isAjax = !empty($query['ajax']) || 
                  strtolower($request->getHeaderLine('X-Requested-With')) === 'xmlhttprequest';
        
        if ($isAjax) {
            $version = $this->grav->getVersion();
            
            // GRAV 2.0+: Disable debugger for AJAX performance
            if (version_compare($version, '2.0.0', '>=')) {
                if ($this->grav['config']->get('system.debugger.enabled')) {
                    $this->grav['config']->set('system.debugger.enabled', false);
                }
            }
            
            // Set flag for templates
            $this->grav['config']->set('theme.is_ajax', true);
        }
    }
}