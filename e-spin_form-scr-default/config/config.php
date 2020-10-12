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
 * Replace the default select menu
 */
$GLOBALS['TL_FFL']['select'] = 'FormScrDefault\FormSelectMenu';


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('FormScrDefault\FormInsertTags', 'replaceInsertTags');
