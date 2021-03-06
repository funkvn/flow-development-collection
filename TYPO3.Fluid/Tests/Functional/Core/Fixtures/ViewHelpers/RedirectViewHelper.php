<?php
namespace TYPO3\Fluid\Tests\Functional\Core\Fixtures\ViewHelpers;

/*
 * This file is part of the TYPO3.Fluid package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Fluid\Core\Widget\AbstractWidgetViewHelper;

/**
 * A view helper for the redirect test widget
 */
class RedirectViewHelper extends AbstractWidgetViewHelper
{
    /**
     * @Flow\Inject
     * @var \TYPO3\Fluid\Tests\Functional\Core\Fixtures\ViewHelpers\Controller\RedirectController
     */
    protected $controller;

    /**
     * The actual render method does nothing more than initiating the sub request
     * which invokes the controller.
     *
     * @return string
     */
    public function render()
    {
        return $this->initiateSubRequest();
    }
}
