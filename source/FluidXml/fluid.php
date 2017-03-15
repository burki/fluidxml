<?php

namespace FluidXml;

define('FLUIDXML_VERSION', '1.20.2');

if (version_compare(phpversion(), '5.6.0', '>=')) {
        /* 
          this still leads to syntax errors in older versions 
          
          TODO: adjust to something like
            $reflection = new ReflectionClass( 'yourClassName' );
            return $reflection->newInstanceArgs( func_get_args() );
        */

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

}
