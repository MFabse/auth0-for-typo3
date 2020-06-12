<?php

/*
 * This file is part of the "Auth0" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace Bitmotion\Auth0\Controller;

use Bitmotion\Auth0\Domain\Model\Application;
use Bitmotion\Auth0\Domain\Transfer\EmAuth0Configuration;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Mvc\Exception\StopActionException;

class ApplicationController extends BackendController
{
    public function listAction(): void
    {
        $pid = $this->configurationManager->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK, 'auth0')['persistence']['storagePid']
            ?? (new EmAuth0Configuration())->getUserStoragePage();

        $this->view->assignMultiple([
            'applications' => $this->applicationRepository->findAll(),
            'pid' => $pid,
            'directory' => BackendUtility::getRecord('pages', $pid),
            'returnUrl' => $this->getModuleUrl(false),
        ]);
    }

    /**
     * @param Application $application
     *
     * @throws StopActionException
     */
    public function deleteApplicationAction(Application $application): void
    {
        $this->applicationRepository->remove($application);
        $this->addFlashMessage($this->getTranslation('message.application.deleted.text'), $this->getTranslation('message.application.deleted.title'));
        $this->redirect('list');
    }
}
