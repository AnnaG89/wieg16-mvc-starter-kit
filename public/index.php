<?php
use App\Controllers\Controller;
use App\Database;
use App\Models\AdminModel;
use App\Models\ArtistModel;

// Sökväg till grundmappen i projektet
$baseDir = __DIR__ . '/..';

// Ladda in Composers autoload-fil
require $baseDir . '/vendor/autoload.php';

// Ladda konfigurationsdata
$config = require $baseDir. '/config/config.php';

// Normalisera url-sökvägar
$path = function($uri) {
    $uri = ($uri == '/') ? $uri : rtrim($uri, '/');
    $uri = explode('?', $uri);
    $uri = array_shift($uri);
	return $uri;
};

$dsn = "mysql:host=".$config['host'].";dbname=".$config['db'].";charset=".$config['charset'];
$pdo = new PDO($dsn, $config['user'], $config['password'], $config['options']);

//$db = new Database($dsn, $config['user'], $config['password'], $config['options']);
$db = new Database($pdo);
$artistModel = new ArtistModel($db);
/*
$newArtist = $artistModel->create([
    'name'=> $_POST['fname'],
    'birthyear'=> $_POST['fbirthyear'],
    'city'=> $_POST['fcity']
]);*/


/*
$artist = $db->getById('Artists', 1);
$artists = $db->getAll('Artists');

$artist = $artistModel->getById(1);
$artists = $artistModel->getAll();
*/

// Routing
$url = ($path($_SERVER['REQUEST_URI']));
switch ($url) {
	case '/':
        $allArtists = $artistModel->getAll();
        require $baseDir.'/views/index.php';
	break;
    case '/create':
        require $baseDir.'/views/create.php';
    break;
    case '/create-artist':
        $artistModel = new ArtistModel($db);
        $newArtist = $artistModel->create([
            'name'=> $_POST['fname'],
            'birthyear'=> $_POST['fbirthyear'],
            'city'=> $_POST['fcity']
        ]);
        header('Location: /?id='.$newArtist);
    break;
	default:
		header('HTTP/1.0 404 Not Found');
		echo 'Page not found';
	break;
}