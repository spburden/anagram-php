<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    session_start();

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("home.html.twig");
    });


    $app->get("/results", function() use ($app) {
        $new_anagram = new Anagram;
        $results = $new_anagram->multipleWords($_GET['input1'], $_GET['input2']);
        return $app['twig']->render("results.html.twig", array('results' => $results));
    });


    return $app;
?>
