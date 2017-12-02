<?php
namespace T3IN\T3inWordlink\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Vikram Mandal <vikram@fivee.in>
 */
class WordConfigTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \T3IN\T3inWordlink\Domain\Model\WordConfig
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \T3IN\T3inWordlink\Domain\Model\WordConfig();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getWordsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWords()
        );
    }

    /**
     * @test
     */
    public function setWordsForStringSetsWords()
    {
        $this->subject->setWords('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'words',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getColposReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getColpos()
        );
    }

    /**
     * @test
     */
    public function setColposForStringSetsColpos()
    {
        $this->subject->setColpos('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'colpos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUrlReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUrl()
        );
    }

    /**
     * @test
     */
    public function setUrlForStringSetsUrl()
    {
        $this->subject->setUrl('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'url',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAltReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAlt()
        );
    }

    /**
     * @test
     */
    public function setAltForStringSetsAlt()
    {
        $this->subject->setAlt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'alt',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTargetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTarget()
        );
    }

    /**
     * @test
     */
    public function setTargetForStringSetsTarget()
    {
        $this->subject->setTarget('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'target',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMaxWordReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMaxWord()
        );
    }

    /**
     * @test
     */
    public function setMaxWordForStringSetsMaxWord()
    {
        $this->subject->setMaxWord('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'maxWord',
            $this->subject
        );
    }
}
