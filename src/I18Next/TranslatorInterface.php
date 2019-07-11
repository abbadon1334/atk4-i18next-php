<?php

declare(strict_types=1);

namespace I18Next;

interface TranslatorInterface
{
    /**
     * Translates the given message.
     *
     * @param string      $key
     * @param array|null  $parameters Array of parameters used to translate message
     * @param string|null $context    The context of the request
     * @param string|null $locale     The locale or null to use the default
     *
     * @return string The translated string
     */
    public function _(string $key, ?array $parameters = null, ?string $context = null, ?string $locale = null): string;
}
