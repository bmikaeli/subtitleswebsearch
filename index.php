<?php 

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/', function () use ($app){
    return $app['twig']->render('root.twig', array());
});


$app->get('/get', function (Request $request) use ($app) {
var_dump($request->get('filename'));
    $filename = $request->get('filename');
   $test2 = passthru('/usr/local/bin/subliminal > /home/bmikaeli/sdfds.txt', $test);
var_dump($test, $test2);
die;
    exec("touch /home/bmikaeli/sds");
    if (!file_exists('/tmp/subtitle/' . $filename)) {
        $app->abort(404);
    }
    return $app->sendFile('/tmp/subtitle/' . $filename);
});

$app->run();
 ?>