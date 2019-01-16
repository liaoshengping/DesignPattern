<?php

namespace app\learn\DependencyInjectionContainer_test;

// use Closure;

class Container
{
	public $binds;

    public $instances;

    public function __construct()
    {

    }

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof \Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        // array_unshift($parameters, $this);
        echo '<pre>';
        print_r( $this->binds[$abstract] );
        print_r( $parameters );
        exit('</pre>');
        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}