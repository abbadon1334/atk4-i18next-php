<?php

declare(strict_types=1);

namespace I18Next\atk4;

use atk4\core\Exception;
use I18Next\TranslatorInterface;

trait TranslatorI18NextTrait
{
    /** @var TranslatorInterface */
    protected $translator;

    /**
     * @param TranslatorInterface $translator
     *
     * @return TranslatorInterface
     */
    public function setTranslator(TranslatorInterface $translator)
    {
        return $this->translator = $translator;
    }

    /**
     * Translates the given message.
     *
     * @param string      $message    The message to be translated
     * @param array|null  $parameters Array of parameters used to translate message
     * @param string|null $domain     The domain for the message or null to use the default
     * @param string|null $locale     The locale or null to use the default
     *
     * @throws Exception
     * @return string    The translated string
     */
    public function _(
        string $message,
        ?array $parameters = null,
        ?string $domain = null,
        ?string $locale = null
    ): string {
        if (null === $this->translator) {
            throw new Exception('Translator for TranslatorI18NextTrait must be defined with setTranslator');
        }

        return $this->translator->_($message, $parameters, $domain, $locale);
    }
}
