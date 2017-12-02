<?php
namespace T3IN\T3inWordlink\Command;

/*
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\CommandController;
use TYPO3\CMS\Extbase\SignalSlot\Dispatcher;

/**
 * Language command controller updates translation packages
 */
class WordCommandController extends CommandController {

    /**
     * Testing cmd
     *
     * @param string $text some test text
     */
    public function testCommand($text = '') {
    	echo __FUNCTION__;
    }


}