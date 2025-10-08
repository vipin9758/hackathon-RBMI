<?php
require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$apiKey = $_ENV['GEMINI_API_KEY'] ?? null;

if (!$apiKey) {
    die("❌ API key not found. Please set GEMINI_API_KEY in .env file.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseJson = $_POST['course_json'];
// print_r($courseJson);
// die();
$client = Gemini::client($apiKey);

$result = $client
    ->generativeModel(model: 'gemini-2.0-flash')    
    ->generateContent($courseJson);
         $v = $result->text();
//  echo "<h3>Original:</h3><p>$dis</p>";
    echo "<h3>AI Version:</h3><p> $v</p><hr>";
}  
?>

