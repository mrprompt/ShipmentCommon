<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use MrPrompt\ShipmentCommon\Base\Document;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;
use Mockery as m;
use PHPUnit\Framework\TestCase;

/**
 * Document test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class DocumentTest extends TestCase
{
    use ChangeProtectedAttribute;

    /**
     * @var Document
     */
    private $document;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->document = new Document();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        parent::tearDown();

        $this->document = null;
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Document::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Document::getType
     */
    public function getTypeMustBeReturnTypeAttribute()
    {
        $this->modifyAttribute($this->document, 'type', 2);

        $this->assertEquals(2, $this->document->getType());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Document::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Document::setType
     */
    public function setTypeOnlyAcceptPreDefinedTypes()
    {
        $types = [Document::CNPJ, Document::CPF];
        $type = $types[ array_rand($types) ];

        $result = $this->document->setType($type);

        $this->assertNull($result);
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Document::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Document::setType
     * @expectedException \TypeError
     */
    public function setTypeThrowsExceptionWhenInvalidtype()
    {
        $this->document->setType('PASSPORT');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Document::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Document::setType
     * @expectedException \TypeError
     */
    public function setTypeThrowsExceptionWhenEmptyValue()
    {
        $this->document->setType('');
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Document::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Document::getNumber
     */
    public function getNumberMustBeReturnNumberAttribute()
    {
        $this->modifyAttribute($this->document, 'number', 2);

        $this->assertEquals(2, $this->document->getNumber());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Document::__construct
     * @covers \MrPrompt\ShipmentCommon\Base\Document::setNumber
     */
    public function setNumberMustBeReturnNull()
    {
        $result = $this->document->setNumber('11122233344');

        $this->assertNull($result);
    }
}
