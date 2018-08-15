<?php
namespace memriseConverter\dao;

interface FileDaoInterface
{
    function setFileName(string $fileName);
    function loadPhrases(): PhraseCollectionItf;
}
