<?php

namespace Services\Route;

class Router implements RouteMethods
{
    private array $route_list;

    public function enable(bool $switch_mode = true)
    {
        if ($switch_mode === true){
            echo 'Router enabled!';
        }
        else {
            die ('Router disabled!');
        }
    }

    /**
     * $url -- URL site (/url)
     * $page_url -- Path to page (pages/page1.php)
     * $access -- Open/Close page (HTTP Code 403)
     *
     * @param string $url
     * @param string $page_url
     * @param bool $access
     */
    public function route(string $url, string $page_url, bool $access)
    {
        $this->route_list[] = [
            "url" => $url,
            "page_url" => $page_url,
            "access" => $access
        ];
    }
}