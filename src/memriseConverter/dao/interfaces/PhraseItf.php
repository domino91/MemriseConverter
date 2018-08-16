<?php
namespace memriseConverter\dao\interfaces;

interface PhraseItf
{
    function getTextOrigin(): string;
    function getTextTranslate(): string;
    function setTextOrigin(string $textOrigin);
    function setTextTranslate(string $textTranslate);
}
