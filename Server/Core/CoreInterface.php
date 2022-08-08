<?php

namespace Core;

interface CoreInterface
{
    public function start(bool $debug_mode = false);
    public function routed(array $route_href, array $route_page): array;
}