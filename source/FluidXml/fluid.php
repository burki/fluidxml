<?php

namespace FluidXml;

define('FLUIDXML_VERSION', '1.20.2');

/* 
 * the following leads to syntax errors in PHP < 5.6 
 *
 *  TODO: adjust to something like
 *   $reflection = new ReflectionClass( 'yourClassName' );
 *   return $reflection->newInstanceArgs( func_get_args() );
 
function fluidxml(...$arguments)
{
        return new \FluidXml\FluidXml(...$arguments);
}

function fluidify(...$arguments)
{
        return \FluidXml\FluidXml::load(...$arguments);
}

function fluidns(...$arguments)
{
        return new \FluidXml\FluidNamespace(...$arguments);
}

*/
