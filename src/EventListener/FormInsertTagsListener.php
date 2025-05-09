<?php

/**
 * This file is part of e-spin/form-scr-default-bundle.
 *
 * Copyright (c) 2020-2025 e-spin
 *
 * @package   e-spin/form-scr-default-bundle
 * @author    Ingolf Steinhardt <info@e-spin.de>
 * @author    Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @copyright 2020-2025 e-spin
 * @license   LGPL-3.0-or-later
 */

declare(strict_types=1);

namespace Espin\FormScrDefaultBundle\EventListener;

use Contao\Input;
use Contao\StringUtil;
use Espin\FormScrDefaultBundle\EventListener\PrepareFormDataListener;
use Symfony\Component\HttpFoundation\RequestStack;

class FormInsertTagsListener
{
    public function __construct(private readonly RequestStack $requestStack)
    {
    }

    /**
     * Replace the insert tags
     *
     * @param string $tag
     *
     * @return string|false
     */
    public function __invoke(string $tag): string|false
    {
        // Extract tag.
        $elements = \explode('::', \explode('|', $tag)[0]);
        $key      = \strtolower($elements[0]);

        // Session value.
        if ('form_rawvalue' === $key) {
            $formRawValue = $this->requestStack->getCurrentRequest()?->getSession()
                ->get(PrepareFormDataListener::SESSION_KEY)[$elements[1]] ?? '';

            return \is_array($formRawValue) ? \serialize($formRawValue) : $formRawValue;
        }

        // Get value.
        if ('form_rawvalue_get' === $key) {
            if (null === ($varValue = Input::get($elements[1]))) {
                return '';
            }

            $varValue = \str_getcsv($varValue, ",");

            return \is_array($varValue) ? \serialize($varValue) : $varValue;
        }

        // Post value.
        if ('form_rawvalue_post' === $key) {
            if (null === ($varValue = Input::post($elements[1]))) {
                return '';
            }

            return \is_array($varValue) ? \serialize($varValue) : $varValue;
        }

        return false;
    }
}
