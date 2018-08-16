<?php

namespace memriseConverter\dao\interfaces;

interface PhraseCollectionItf
{
    public function add(PhraseItf $phrase);
    /**
     * 
     * @return PhraseItf[]
     */
    public function getAll(): array;
}
