<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Sequence;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;

/**
 * Sequence test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class SequenceTest extends TestCase
{
    /**
     * @see \Centercob\Common\Util\ChangeProtectedAttribute
     */
    use ChangeProtectedAttribute;

    /**
     * @var Sequence
     */
    private $sequence;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->sequence = new Sequence();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->sequence = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Sequence::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Sequence::getValue()
     */
    public function getValueReturnValueAttribute()
    {
        $this->modifyAttribute($this->sequence, 'value', 1);

        $this->assertEquals(1, $this->sequence->getValue());
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Sequence::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Sequence::setValue()
     * @covers \MrPrompt\ShipmentCommon\Base\Sequence::getValue()
     */
    public function setValueModifyValueAttribute()
    {
        $this->sequence->setValue(1);

        $this->assertEquals(1, $this->sequence->getValue());
    }
}
