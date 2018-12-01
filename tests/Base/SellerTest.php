<?php
namespace MrPrompt\Tests\ShipmentCommon\Base;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use MrPrompt\ShipmentCommon\Base\Person;
use MrPrompt\ShipmentCommon\Base\Seller;
use MrPrompt\Tests\ShipmentCommon\ChangeProtectedAttribute;

/**
 * Seller test case.
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class SellerTest extends TestCase
{
    use ChangeProtectedAttribute;

    /**
     * @var Seller
     */
    private $seller;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        $this->seller = new Seller();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        $this->seller = null;

        parent::tearDown();
    }

    /**
     * @test
     * @covers \MrPrompt\ShipmentCommon\Base\Seller::__construct()
     * @covers \MrPrompt\ShipmentCommon\Base\Seller::getCode()
     */
    public function sellerExtendsPerson()
    {
        $this->assertInstanceOf(Person::class, $this->seller);
    }
}
