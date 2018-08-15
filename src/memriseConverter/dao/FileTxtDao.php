<?php
namespace memriseConverter\dao;

class FileTxtDao implements FileDaoInterface
{

    private $fileName;

    public function loadPhrases(): PhraseCollectionItf
    {
        if (!file_exists($this->fileName)) {
            throw new \RuntimeException('File ' . $this->fileName . ' not found');
        }
        
        $phraseCollection = new PhraseCollection();
        
        foreach (file($this->fileName) as $row) {
            $phrase = new Phrase();
            $phrase->setTextOrigin($row);
            
            $phraseCollection->add($phrase);
        }
        
        return $phraseCollection;
    }

    public function setFileName(string $fileName)
    {
        $this->fileName = $fileName;
    }
}
