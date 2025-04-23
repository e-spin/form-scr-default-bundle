<?php

/**
 * This file is part of e-spin/form-scr-default-bundle.
 *
 * Copyright (c) 2025 e-spin
 *
 * @package   e-spin/form-scr-default-bundle
 * @author    Ingolf Steinhardt <info@e-spin.de>
 * @copyright 2025 e-spin
 * @license   LGPL-3.0-or-later
 */

namespace Espin\FormScrDefaultBundle\EventListener;

use Contao\Form;
use Symfony\Component\HttpFoundation\RequestStack;

class PrepareFormDataListener
{
    public const SESSION_KEY = 'contao.form.data.scr_default';

    public function __construct(private readonly RequestStack $requestStack)
    {
    }
    
    public function __invoke(
        array &$submittedData,
        array $labels,
        array $fields,
        Form $form,
        array &$files
    ): void
    {
        $this->requestStack->getCurrentRequest()?->getSession()->set(self::SESSION_KEY, $submittedData);
    }
}
