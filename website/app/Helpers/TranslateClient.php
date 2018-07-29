<?php

namespace App\Helpers;

use GoogleTranslate\Client;

class TranslateClient extends Client
{
    protected static $instance = null;

    /**
     * Get instance.
     *
     * @return void
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(config('app.google_api_key'));
    }
}
