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

class FormInsertTags
{

    /**
     * Replace the insert tags
     * @param mixed
     * @return mixed
     */
    public function replaceInsertTags($varTag)
    {
        $arrTag = trimsplit('::', $varTag);
        
        if ($arrTag[0] == 'form_rawvalue')
        {
            return is_array($_SESSION['FORM_DATA'][$arrTag[1]]) ? serialize($_SESSION['FORM_DATA'][$arrTag[1]]) : $_SESSION['FORM_DATA'][$arrTag[1]];
        }
        
        if ($arrTag[0] == 'form_rawvalue_get')
        {
						$varValue = str_getcsv(\Input::get($arrTag[1]),",");
						
            return is_array($varValue) ? serialize($varValue) : $varValue;
        }        

        return false;
    }
    
}
