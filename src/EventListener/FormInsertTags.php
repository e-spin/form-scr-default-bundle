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

use Contao\Form;
use Contao\Input;
use Contao\StringUtil;
use Symfony\Component\HttpFoundation\RequestStack;

class FormInsertTags
{
    public function __construct(private readonly RequestStack $requestStack)
    {
    }

    /**
     * Replace the insert tags
     *
     * @param mixed $varTag
     *
     * @return mixed
     */
    public function replaceInsertTags(mixed $varTag): mixed
    {
        $arrTag = StringUtil::trimsplit('::', $varTag);

        if ($arrTag[0] === 'form_rawvalue') {
            $formRawValue = $this->requestStack->getCurrentRequest()?->getSession()
                ->get(Form::SESSION_KEY)?->getValue()[$arrTag[1]] ?? '';

            return \is_array($formRawValue) ? \serialize($formRawValue) : $formRawValue;
        }

        if ($arrTag[0] === 'form_rawvalue_get') {
            if (null === ($varValue = Input::get($arrTag[1]))) {
                return '';
            }

            $varValue = \str_getcsv($varValue, ",");

            return \is_array($varValue) ? \serialize($varValue) : $varValue;
        }

        if ($arrTag[0] === 'form_rawvalue_post') {
            if (null === ($varValue = Input::post($arrTag[1]))) {
                return '';
            }

            return \is_array($varValue) ? \serialize($varValue) : $varValue;
        }

        return false;
    }

}
