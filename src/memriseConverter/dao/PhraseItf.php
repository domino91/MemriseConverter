<?php
namespace memriseConverter\dao;

interface PhraseItf
{
    function getTextOrigin(): string;
    function getTextTranslate(): string;
    function setTextOrigin(string $textOrigin);
    function setTextTranslate(string $textTranslate);
}
