
<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../.env';

$mongoUri = getenv('MONGO_URI');

try {
    $client = new MongoDB\Client($mongoUri);
    $db = $client->selectDatabase('i_mongoDB'); // Database
    $usersCollection = $db->users; // Collection
} catch (Exception $e) {
    die("MongoDB Connection Failed: " . $e->getMessage());
}
?>