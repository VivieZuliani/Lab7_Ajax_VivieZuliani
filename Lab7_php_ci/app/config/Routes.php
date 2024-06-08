$routes->get('/artikel/(:any)', 'artikel::view/$1');

$routes->group('admin', function($routes) {
    $routes->get('artikel', 'artikel::admin_index');
    $routes->get('artikel/add', 'artikel::add');
    $routes->get('artikel/edit/(:any)', 'artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'artikel::delete/$1');
});