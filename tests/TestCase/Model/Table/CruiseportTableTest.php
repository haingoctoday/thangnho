<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CruiseportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CruiseportTable Test Case
 */
class CruiseportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CruiseportTable
     */
    public $Cruiseport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cruiseport'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cruiseport') ? [] : ['className' => 'App\Model\Table\CruiseportTable'];
        $this->Cruiseport = TableRegistry::get('Cruiseport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cruiseport);

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
