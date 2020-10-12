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

/**
 * Extend the tl_form_field palettes
 */
// Select
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['select'] =
    str_replace('tabindex;', 'tabindex,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['select']);
// Checkbox
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox'] =
    str_replace('class;', 'class,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox']);
// Radiobutton
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio'] =
    str_replace('class;', 'class,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio']);
