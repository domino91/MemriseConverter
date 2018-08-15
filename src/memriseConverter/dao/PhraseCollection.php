<?php

namespace memriseConverter\dao;

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
