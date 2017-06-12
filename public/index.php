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
$config = require $baseDir . '/config/config.php';

// Normalisera url-sökvägar
$path = function ($uri) {
    $uri = ($uri == '/') ? $uri : rtrim($uri, '/');
    $uri = explode('?', $uri);
    $uri = array_shift($uri);
    return $uri;
};

$dsn = "mysql:host=" . $config['host'] . ";dbname=" . $config['db'] . ";charset=" . $config['charset'];
$pdo = new PDO($dsn, $config['user'], $config['password'], $config['options']);

$db = new Database($pdo);

// Routing
$url = ($path($_SERVER['REQUEST_URI']));
$artistModel = new ArtistModel($db);
$artworkModel = new \App\Models\ArtworkModel($db);
switch ($url) {

    case '/':
        $artistData = [];
        $allArtists = $artistModel->getAll();
        $artists = $artistModel->getAll();
        foreach ($artists as $artist) {
            $artistData[] = [
                'artist' => $artist,
                'artworks' => $artistModel->getRelatedArtworks($artist['id'])
            ];
        }
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/index.php';
        require $baseDir . '/views/footer.php';
        break;

    case '/create':
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/create_artist.php';
        require $baseDir . '/views/footer.php';
        break;

    case '/create_artist':
        $newArtist = $artistModel->create([
            'name' => $_POST['fname'],
            'birthyear' => $_POST['fbirthyear'],
            'city' => $_POST['fcity'],
            'image_url' => $_POST['fimg']
        ]);
        header('Location: /?id=' . $newArtist);
        break;

    case '/create_artwork':
        $allArtists = $artistModel->getAll();
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/create_artwork.php';
        require $baseDir . '/views/footer.php';
        break;

    case '/add_artwork':
        $newArtwork = $artworkModel->create([
            'artist_id' => $_POST['artist_id'],
            'name' => $_POST['name'],
            'creation_date' => $_POST['creation_date'],
            'artwork_url' => $_POST['artwork_url']
        ]);
        header('Location: /?id=' . $newArtwork);
        break;


    case '/artworks':
        $artworkData = [];
        $artwork = $artworkModel->getAll();
        $artists = $artistModel->getAll();
        foreach ($artists as $artist) {
            $artworks = $artistModel->getRelatedArtworks($artist['id']);
            var_dump($artworks);
            die();
        }
        foreach ($artwork as $item) {
            $artworkData[] = [
                'artwork' => $item,
                'artist' => $artistModel->getById($item['artist_id']),
            ];
        }
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/index.php';
        require $baseDir . '/views/footer.php';
        break;

    case '/update':
        $oneArtist = $artistModel->getById($_GET['id']);
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/update_artist.php';
        require $baseDir . '/views/footer.php';
        break;

    case '/update-artist':
        $updateArtist = $artistModel->update($_POST['id'], [
            'name' => $_POST['uname'],
            'birthyear' => $_POST['ubirthyear'],
            'city' => $_POST['ucity'],
            'image_url' => $_POST['uimg']
        ]);
        header('Location: /?id=' . $updateArtist);
        break;

    case '/update_artwork_view':
        $oneArtwork = $artworkModel->getById($_GET['id']);
        require $baseDir . '/views/header.php';
        require $baseDir . '/views/update_artwork.php';
        require $baseDir . '/views/footer.php';
        break;

    case '/update_artwork':
        $updateArtwork = $artworkModel->update($_POST['id'], [
            'name' => $_POST['name'],
            'creation_date' => $_POST['creation_date'],
            'artwork_url' => $_POST['artwork_url']
        ]);
        header('Location: /?id=' . $updateArtwork);
        break;

    case '/delete':
        $deleteArtist = $artistModel->delete($_GET['id']);
        header('Location: /?id=' . $deleteArtist);
        break;

    case '/delete_artwork':
        $deleteArtwork = $artworkModel->delete($_GET['id']);
        header('Location: /?id=' . $deleteArtwork);
        break;

    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}