<?php

use I18Next\TranslatorStatic;

/**
 * @param string      $key
 * @param array|null  $parameters
 * @param string|null $context
 * @param string|null $locale
 *
 * @return string
 */
function __(string $key, ?array $parameters = null, ?string $context = null, ?string $locale = null): string
{
    return TranslatorStatic::_($key, $parameters, $context, $locale);
}
