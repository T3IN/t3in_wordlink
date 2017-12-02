<?php
namespace T3IN\T3inWordlink\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;

class WordLinkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * WordConfigRepository
	 * @var T3IN\T3inWordlink\Domain\Repository\WordConfigRepository
	 * @inject
	 */
	protected $WordConfigRepository;	
	
	/**
	 * IndexRepository
	 * @var T3IN\T3inWordlink\Domain\Repository\IndexRepository
	 * @inject
	 */
	protected $IndexRepository;	

	/**
   * Backend Template Container - CSS etc for BE 
   *
   * @var string
   */
  protected $defaultViewObjectName = \TYPO3\CMS\Backend\View\BackendTemplateView::class;


	/**
	 * action start
	 * @return void
	 */
	public function startAction() {
	
		$wordConfs = $this->WordConfigRepository->findAll();
		if($wordConfs->count()==0) {
			$this->addFlashMessage('Make sure you have set constant value: module.tx_t3inwordlink_link.persistence.storagePid');  
			$this->addFlashMessage('Make sure you have created Word Config records');  
		}
		//\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($wordConfs->count());

	 $assignedValues = [
	 	'wordConfsCount' => $wordConfs->count(),
	 ];
	 $this->view->assignMultiple($assignedValues);			
	
	
	}	


}