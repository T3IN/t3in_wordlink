<?php
namespace T3IN\T3inWordlink\Domain\Model;

/***
 *
 * This file is part of the "Add Url to Words" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Vikram Mandal <vikram@fivee.in>, FiveE Technologies
 *
 ***/

/**
 * Index
 */
class Index extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * pageId
     *
     * @var string
     */
    protected $pageId = '';

    /**
     * colpos
     *
     * @var string
     */
    protected $colpos = '';

    /**
     * word
     *
     * @var string
     */
    protected $word = '';

    /**
     * url
     *
     * @var string
     */
    protected $url = '';

    /**
     * contentId
     *
     * @var string
     */
    protected $contentId = '';

    /**
     * Returns the pageId
     *
     * @return string $pageId
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Sets the pageId
     *
     * @param string $pageId
     * @return void
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;
    }

    /**
     * Returns the colpos
     *
     * @return string $colpos
     */
    public function getColpos()
    {
        return $this->colpos;
    }

    /**
     * Sets the colpos
     *
     * @param string $colpos
     * @return void
     */
    public function setColpos($colpos)
    {
        $this->colpos = $colpos;
    }

    /**
     * Returns the word
     *
     * @return string $word
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Sets the word
     *
     * @param string $word
     * @return void
     */
    public function setWord($word)
    {
        $this->word = $word;
    }

    /**
     * Returns the url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the url
     *
     * @param string $url
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Returns the contentId
     *
     * @return string $contentId
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Sets the contentId
     *
     * @param string $contentId
     * @return void
     */
    public function setContentId($contentId)
    {
        $this->contentId = $contentId;
    }
}
