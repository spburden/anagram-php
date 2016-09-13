<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/template.php";

    session_start();

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));


    $app->get("/", function() use ($app) {
        $new_anagram = new Anagram;
        $result = $new_anagram->anagramTest($_GET['word1'], $_GET['word2']);
        return $app['twig']->render("home.html.twig", array('result' => $result));
    });


    return $app;
?>
