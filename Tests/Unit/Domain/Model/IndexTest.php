<?php
namespace T3IN\T3inWordlink\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Vikram Mandal <vikram@fivee.in>
 */
class IndexTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \T3IN\T3inWordlink\Domain\Model\Index
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \T3IN\T3inWordlink\Domain\Model\Index();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPageIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPageId()
        );
    }

    /**
     * @test
     */
    public function setPageIdForStringSetsPageId()
    {
        $this->subject->setPageId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'pageId',
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
    public function getWordReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getWord()
        );
    }

    /**
     * @test
     */
    public function setWordForStringSetsWord()
    {
        $this->subject->setWord('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'word',
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
    public function getContentIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getContentId()
        );
    }

    /**
     * @test
     */
    public function setContentIdForStringSetsContentId()
    {
        $this->subject->setContentId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'contentId',
            $this->subject
        );
    }
}
