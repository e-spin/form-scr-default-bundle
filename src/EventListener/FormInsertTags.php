<?php

/**
 * This file is part of e-spin/form-scr-default-bundle.
 *
 * Copyright (c) 2020-2024 e-spin
 *
 * @package   e-spin/form-scr-default-bundle
 * @author    Ingolf Steinhardt <info@e-spin.de>
 * @author    Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @copyright 2020-2024 e-spin
 * @license   LGPL-3.0-or-later
 */

declare(strict_types=1);

namespace Espin\FormScrDefaultBundle\EventListener;

use Contao\Input;
use Contao\StringUtil;

class FormInsertTags
{
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
            return \is_array($_SESSION['FORM_DATA'][$arrTag[1]])
                ? \serialize($_SESSION['FORM_DATA'][$arrTag[1]])
                : $_SESSION['FORM_DATA'][$arrTag[1]];
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
