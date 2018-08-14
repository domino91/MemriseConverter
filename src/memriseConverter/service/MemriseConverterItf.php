<?php

interface MemriseConverterItf
{
   function loadPhrases(string $filename);
   function convert();
}
