<?php 


$routes = [];

route('/', function () {
  require_once 'controller/home.php';
});

route('/home', function () {
    require_once 'controller/home.php';
});

route('/about', function () {
 require_once 'controller/about.php';
});


route('/service', function () {
  require_once 'controller/service.php';
});

route('/portifolio', function () {
  require_once 'controller/portifolio.php';
});


route('/career', function () {
  require_once 'controller/career.php';
});

route('/contact', function () {
  require_once 'controller/contact.php';
});
route('/project', function () {
    require_once 'controller/project.php';
  });



route('/404', function () {
 require_once 'controller/404.php';
});

function route(string $path, callable $callback) {
  global $routes;
  $routes[$path] = $callback;
}

run();

function run() {
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  $found = false;
  foreach ($routes as $path => $callback) {
    if ($path !== $uri) continue;

    $found = true;
    $callback();
  }

  if (!$found) {
    $notFoundCallback = $routes['/404'];
    $notFoundCallback();
  }
}

