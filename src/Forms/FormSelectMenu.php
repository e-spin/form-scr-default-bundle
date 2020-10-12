<?php

/**
 * This file is part of e-spin/form-scr-default-bundle.
 *
 * Copyright (c) 2020 e-spin
 *
 * @package   e-spin/form-scr-default-bundle
 * @author    Ingolf Steinhardt <info@e-spin.de>
 * @author    Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @copyright 2020 e-spin
 * @license   LGPL-3.0-or-later
 */

declare(strict_types=1);

namespace Espin\FormScrDefaultBundle\Forms;

class FormSelectMenu extends \Contao\FormSelectMenu
{
    /**
     * Add specific attributes
     *
     * @param string
     * @param mixed
     */
    public function __set($strKey, $varValue)
    {
        if ($strKey == 'value') {
            $varValue = $this->replaceInsertTags($varValue);
        }

        parent::__set($strKey, $varValue);
    }
}
