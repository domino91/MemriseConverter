<?php

namespace memriseConverter\translate;

use memriseConverter\dao\PhraseCollectionItf;

class TranslateProvider
{
    /**
     *
     * @var TranslateAdapterItf
     */
    private $translateAdapter;

    public function setTranslateAdapter(TranslateAdapterItf $translateAdapter)
    {
        $this->translateAdapter = $translateAdapter;
    }

        
    public function translate(PhraseCollectionItf $phraseCollection) {
        
        if ($this->translateAdapter == null) {
            throw new \RuntimeException('Not initialize translateAdapter!');
        }
        
        foreach($phraseCollection->getAll() as $phrase) {
            /* @var $phrase memriseConverter\dao\PhraseItf  */
            
            $translated = $this->translateAdapter->translate($phrase->getTextOrigin());
            $phrase->setTextTranslate($translated);
        }
    }
    
 
}
