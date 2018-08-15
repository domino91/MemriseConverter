<?php

namespace memriseConverter\translate;

interface TranslateAdapterItf
{
    /**
     * 
     * @param string $phrase to translate
     * @return string translated phrase
     */
    function translate(string $phrase): string;
}
