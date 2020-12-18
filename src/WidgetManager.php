<?php
namespace Jankx\Widget;

use Jankx\Widget\Widgets\Posts;
use Jankx\Widget\Widgets\Facebook\PagePlugin as FacebookPagePlugin;

class WidgetManager
{
    protected static $instance;

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {
    }

    public function registerWidgets()
    {
        register_widget(Posts::class);
        register_widget(FacebookPagePlugin::class);
    }
}
