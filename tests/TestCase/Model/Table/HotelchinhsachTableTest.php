<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelchinhsachTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelchinhsachTable Test Case
 */
class HotelchinhsachTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelchinhsachTable
     */
    public $Hotelchinhsach;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hotelchinhsach'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hotelchinhsach') ? [] : ['className' => 'App\Model\Table\HotelchinhsachTable'];
        $this->Hotelchinhsach = TableRegistry::get('Hotelchinhsach', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hotelchinhsach);

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
