<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelphongTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelphongTable Test Case
 */
class HotelphongTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelphongTable
     */
    public $Hotelphong;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hotelphong'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hotelphong') ? [] : ['className' => 'App\Model\Table\HotelphongTable'];
        $this->Hotelphong = TableRegistry::get('Hotelphong', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hotelphong);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
