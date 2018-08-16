<?php
namespace memriseConverter\dao\interfaces;

interface FileDaoItf
{
    function setFileName(string $fileName);
    function loadPhrases(): PhraseCollectionItf;
}
