<?php
namespace memriseConverter\dao;

use memriseConverter\dao\interfaces\PhraseCollectionItf;
use RuntimeException;

class ExportCSVDao
{

    public function export(PhraseCollectionItf $phraseCollection, string $fileName)
    {
        $fp = fopen($fileName, 'w');
        
        if ($fp === FALSE) {
            throw new RuntimeException('Not access writeable to file "' . $fileName . '"');
        }
        
        foreach ($phraseCollection->getAll() as $phrase) {
            /* @var $phrase memriseConverter\dao\PhraseItf  */
            fputcsv($fp, array($phrase->getTextOrigin(), $phrase->getTextTranslate()));
        }

        fclose($fp);
    }
}
