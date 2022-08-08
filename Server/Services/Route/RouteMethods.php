<?php

namespace Services\Route;

interface RouteMethods
{
    public function enable(bool $switch_mode);
    public function route(string $url, string $page_url, bool $access);
}