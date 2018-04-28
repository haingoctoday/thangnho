<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CruisedriveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CruisedriveTable Test Case
 */
class CruisedriveTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CruisedriveTable
     */
    public $Cruisedrive;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cruisedrive'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cruisedrive') ? [] : ['className' => 'App\Model\Table\CruisedriveTable'];
        $this->Cruisedrive = TableRegistry::get('Cruisedrive', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cruisedrive);

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
