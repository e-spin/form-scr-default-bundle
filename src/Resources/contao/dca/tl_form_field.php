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

use Contao\System;

/**
 * Extend the tl_form_field palettes
 */
// Select
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['select'] =
    \str_replace('accesskey;', 'accesskey,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['select']);
// Checkbox
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox'] =
    \str_replace('class;', 'class,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox']);
// Radiobutton
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio'] =
    \str_replace('class;', 'class,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio']);

$bundles = System::getContainer()->getParameter('kernel.bundles');
if (\array_key_exists('PlentaProtectedSelectBundle', $bundles)) {
    // Protect select
    $GLOBALS['TL_DCA']['tl_form_field']['palettes']['protectedselect'] =
        \str_replace(['accesskey;', 'accesskey,'],
                     'accesskey,value;',
                     $GLOBALS['TL_DCA']['tl_form_field']['palettes']['protectedselect']);
}
