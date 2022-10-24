<?php
require_once './vendor/autoload.php';
use DiDom\Document;

$document = new Document('https://sandbox.bookingcore.org/', true);
echo $document;
$posts = $document->find('.post');

foreach($posts as $post) {
echo $post->text(), "\n";
}
