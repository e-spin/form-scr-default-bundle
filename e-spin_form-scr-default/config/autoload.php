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
 * Register the namespace
 */
ClassLoader::addNamespace('FormScrDefault');


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'FormScrDefault\FormInsertTags' => 'system/modules/e-spin_form-scr-default/classes/FormInsertTags.php',
    'FormScrDefault\FormSelectMenu' => 'system/modules/e-spin_form-scr-default/forms/FormSelectMenu.php',
    'FormScrDefault\FormCheckBox' => 'system/modules/e-spin_form-scr-default/forms/FormCheckBox.php',
    'FormScrDefault\FormRadioButton' => 'system/modules/e-spin_form-scr-default/forms/FormRadioButton.php',
));
