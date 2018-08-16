<?php
namespace memriseConverter\dao;

use memriseConverter\dao\interfaces\PhraseCollectionItf;
use RuntimeException;

class ExportCSVDao
{

    public function export(PhraseCollectionItf $phraseCollection, string $fileName)
    {
        $fopen = fopen($fileName, 'w');
        
        if ($fopen === FALSE) {
            throw new RuntimeException('Not access writeable to file "' . $fileName . '"');
        }
        
        foreach ($phraseCollection->getAll() as $phrase) {
            /* @var $phrase memriseConverter\dao\PhraseItf  */
            fputcsv($fopen, array($phrase->getTextOrigin(), $phrase->getTextTranslate()));
        }

        fclose($fopen);
    }
}
