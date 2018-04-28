<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelcategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelcategoryTable Test Case
 */
class HotelcategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelcategoryTable
     */
    public $Hotelcategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hotelcategory'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hotelcategory') ? [] : ['className' => 'App\Model\Table\HotelcategoryTable'];
        $this->Hotelcategory = TableRegistry::get('Hotelcategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hotelcategory);

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
