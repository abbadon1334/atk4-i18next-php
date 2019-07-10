<?php

declare(strict_types=1);

namespace I18Next\Locale\Processor;

use I18Next\Locale\Translations;

abstract class AbstractProcessor
{
    /** @var Translations */
    protected $translations;

    public function __construct(Translations $translations)
    {
        $this->translations = $translations;
    }
}
