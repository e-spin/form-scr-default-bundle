<?php

/**
 * e-spin_form-scr-default extension for Contao Open Source CMS
 *
 * Copyright (C) 2014 e-spin
 *
 * @package e-spin_form-scr-default
 * @author  e-spin <http://e-spin.de>
 * @author  Ingolf Steinhardt <contao@e-spin.de> 
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license CC by-nc-sa
 */


/**
 * Extend the tl_form_field palettes
 */
// Select
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['select'] = str_replace('tabindex;', 'tabindex,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['select']);
// Checkbox
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox'] = str_replace('class;', 'class,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['checkbox']);
// Radiobutton
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio'] = str_replace('class;', 'class,value;', $GLOBALS['TL_DCA']['tl_form_field']['palettes']['radio']);
