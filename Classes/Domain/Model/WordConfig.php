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
 * WordConfig
 */
class WordConfig extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * words
     *
     * @var string
     */
    protected $words = '';

    /**
     * colpos
     *
     * @var string
     */
    protected $colpos = '';

    /**
     * url
     *
     * @var string
     */
    protected $url = '';

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * alt
     *
     * @var string
     */
    protected $alt = '';

    /**
     * target
     *
     * @var string
     */
    protected $target = '';

    /**
     * maxWord
     *
     * @var string
     */
    protected $maxWord = '';

    /**
     * Returns the words
     *
     * @return string $words
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Sets the words
     *
     * @param string $words
     * @return void
     */
    public function setWords($words)
    {
        $this->words = $words;
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
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the alt
     *
     * @return string $alt
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Sets the alt
     *
     * @param string $alt
     * @return void
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
    }

    /**
     * Returns the target
     *
     * @return string $target
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets the target
     *
     * @param string $target
     * @return void
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * Returns the maxWord
     *
     * @return string $maxWord
     */
    public function getMaxWord()
    {
        return $this->maxWord;
    }

    /**
     * Sets the maxWord
     *
     * @param string $maxWord
     * @return void
     */
    public function setMaxWord($maxWord)
    {
        $this->maxWord = $maxWord;
    }
}
