<?php
namespace memriseConverter;

use memriseConverter\translate\GoogleTranslateAdapter;
use memriseConverter\translate\TranslateProvider;

// Initialize
if ($_SERVER['argc'] != 3) {
    die('Incorrect params');
}

$fileSourceName = $_SERVER['argv'][1];
$fileDestinationName = $_SERVER['argv'][2];

try {
// Read txt
    $fileTxtDao = new dao\FileTxtDao();
    $fileTxtDao->setFileName($fileSourceName);
    $phraseCollection = $fileTxtDao->loadPhrases();

// Translate
    $translateProvider = new TranslateProvider();
    $translateProvider->setTranslateAdapter(new GoogleTranslateAdapter());

    $translateProvider->translate($phraseCollection);

// Save to CSV

    $exportCSVDao = new dao\ExportCSVDao();
    $exportCSVDao->export($phraseCollection, $fileDestinationName);
} catch (\RuntimeException $ex) {
    echo var_dump($ex);
}