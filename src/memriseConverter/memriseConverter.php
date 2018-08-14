<?php

if ($argc != 1) {
    die('Incorrect params');
}

$filename = $argv[1];

$memriseConverter = new MemriseConverterService();