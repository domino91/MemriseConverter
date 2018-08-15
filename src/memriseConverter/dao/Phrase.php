<?php
namespace memriseConverter\dao;

class Phrase implements PhraseItf
{
    /**
     *
     * @var string
     */
    private $textOrigin;
    
    /**
     *
     * @var string
     */
    private $textTranslate;
    
    function getTextOrigin(): string
    {
        return $this->textOrigin;
    }

    function getTextTranslate(): string
    {
        return $this->textTranslate;
    }

    function setTextOrigin(string $textOrigin)
    {
        $this->textOrigin = $textOrigin;
    }

    function setTextTranslate(string $textTranslate)
    {
        $this->textTranslate = $textTranslate;
    }


}
