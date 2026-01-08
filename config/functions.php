
<?php

// url amigável
function url($route = '', $params = []) {
    $url = BASE_URL . $route;
    
    if (!empty($params)) {
        $url .= '?' . http_build_query($params);
    }
    
    return $url;
}

// redirecionamento
 function redirect($route, $code = 302) {
    header('Location: ' . url($route), true, $code);
    exit;
}

// rota atual
function getCurrentRoute() {
    $base_path = dirname($_SERVER['SCRIPT_NAME']);
    $request_uri = $_SERVER['REQUEST_URI'];
    
    if ($base_path !== '/' && strpos($request_uri, $base_path) === 0) {
        $request_uri = substr($request_uri, strlen($base_path));
    }
    
    if (strpos($request_uri, '?') !== false) {
        $request_uri = substr($request_uri, 0, strpos($request_uri, '?'));
    }
    
    return trim($request_uri, '/');
}

// retorna um parâmetro GET
function getParam($key, $default = null) {
    return isset($_GET[$key]) ? htmlspecialchars($_GET[$key]) : $default;
}

?>