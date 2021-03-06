<?php

declare(strict_types=1);

namespace I18Next\Locale\Processor;

use I18Next\Locale\Translations;

/**
 * @internal
 */
abstract class AbstractProcessor
{
    /** @var Translations */
    protected $translations;

    /**
     * AbstractProcessor constructor.
     *
     * @param Translations $translations
     */
    public function __construct(Translations $translations)
    {
        $this->translations = $translations;
    }
}
