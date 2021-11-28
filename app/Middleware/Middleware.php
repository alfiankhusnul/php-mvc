<?php

namespace AlfianKhusnul\PHP\MVC\Middleware;

interface Middleware
{
    function before(): void;
}