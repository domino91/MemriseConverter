<?php

namespace memriseConverter\dao;

interface PhraseCollectionItf
{
    public function add(PhraseItf $phrase);
    /**
     * 
     * @return PhraseItf[]
     */
    public function getAll(): array;
}
