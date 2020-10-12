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

namespace FormScrDefault;

class FormSelectMenu extends \Contao\FormSelectMenu
{

	/**
	 * Add specific attributes
	 * @param string
	 * @param mixed
	 */
	public function __set($strKey, $varValue)
	{
		if ($strKey == 'value')
		{
		    $varValue = $this->replaceInsertTags($varValue);
		}
		
		parent::__set($strKey, $varValue);
  }
}
