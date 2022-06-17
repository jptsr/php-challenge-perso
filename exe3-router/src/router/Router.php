<?php
namespace app\src\router;

class Router
{
    private $url;
    private array $routes = [];

    public function __construct($url)
    {
        $this->url = $url;        
    }
    
    public function get($path, $callable)
    {
        $route = new Route($path,$callable);
        $this->routes['GET'][] = $route;

        return $route;
    }

    public function post($path, $callable)
    {
        $route = new Route($path,$callable);
        $this->routes['POST'][] = $route;

        return $route;
    }

    /**
     * If the request method exists, then for each route in the routes array, if the route matches the
     * url, then call the route.
     * 
     * If the request method does not exist, throw an exception.
     * 
     * If no routes match the url, throw an exception.
     * 
     * @return The return value of the call() method of the Route object.
     */
    public function run()
    {
        if ( !isset( $_SERVER['REQUEST_METHOD'] ) )
        {
            throw new RouterException('REQUEST_METHOD does not exist');
        }

        foreach ( $this->routes[$_SERVER['REQUEST_METHOD']] as $route ) 
        {
            if ( $route->match($this->url) )
            {
                return $route->call();
            }
        }

        throw new RouterException('No matching routes');
    }
}