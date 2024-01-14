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

use Espin\FormScrDefaultBundle\Forms\FormSelectMenu;
use Espin\FormScrDefaultBundle\Forms\FormCheckBox;
use Espin\FormScrDefaultBundle\Forms\FormRadioButton;

/**
 * Replace the default SCR.
 */
$GLOBALS['TL_FFL']['select']   = FormSelectMenu::class;
$GLOBALS['TL_FFL']['checkbox'] = FormCheckBox::class;
$GLOBALS['TL_FFL']['radio']    = FormRadioButton::class;
