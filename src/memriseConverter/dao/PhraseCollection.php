<?php

namespace memriseConverter\dao;

use memriseConverter\dao\interfaces\PhraseCollectionItf;
use memriseConverter\dao\interfaces\PhraseItf;

class PhraseCollection implements PhraseCollectionItf
{
    private $phraseArray = array();
    
    public function add(PhraseItf $phrase)
    {
        $this->phraseArray[] = $phrase;
    }

    public function getAll(): array
    {
        return $this->phraseArray;
    }
}
