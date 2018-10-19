<?php
class Request {
    public static function uri() {
        $uri = str_replace(static::getFolderName(), "", static::redirect_url());
        return trim($uri, '/');
    }

    private static function redirect_url() {
        if( isset($_SERVER['REDIRECT_URL']) )
            return $_SERVER['REDIRECT_URL'];
        return explode("?", $_SERVER['REQUEST_URI'] )[0];
    }

    private static function getFolderName() {
        $folder_name = str_replace("/index.php", "", $_SERVER['PHP_SELF']);
        return $folder_name;
    }
}

class Router {
    private $routes = [
        "^([a-zA-Z0-9-_]+)\/?$",
        "^([a-zA-Z0-9-_]+)\/([a-zA-Z0-9-_]+)\/?$",
        "^([a-zA-Z0-9-_]+)\/([a-zA-Z0-9-_]+)\/([\w|\W]+)\/?$",
        "^([a-zA-Z0-9-_]+)\/([a-zA-Z0-9-_]+)\/([\w|\W]+)\/([\w|\W]+)\/?$"
    ];

    private $parameters = [];

    public function __construct($url) {
        foreach ($this->routes as $route) {
            if (!preg_match("/" . $route . "/", $url, $matches))
                continue;

            $this->parameters = array_slice($matches, 1);
        }
    }

    public function getParameter($index) {
        if (isset($this->parameters[($index-1)])) {
            return $this->parameters[($index-1)];
        } else {
            return "";
        }
    }

    public function hasParameter() {
        return strlen($this->url);
    }
}
?>
