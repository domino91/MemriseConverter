<?php
namespace memriseConverter\translate;

use Stichoza\GoogleTranslate\TranslateClient;

class GoogleTranslateAdapter implements TranslateAdapterItf
{

    /**
     *
     * @var TranslateClient
     */
    private $translateClient;

    public function __construct()
    {
        $this->translateClient = new TranslateClient('en', 'pl');
    }

    public function translate(string $phrase): string
    {
        return $this->translateClient->translate($phrase);
    }
}
