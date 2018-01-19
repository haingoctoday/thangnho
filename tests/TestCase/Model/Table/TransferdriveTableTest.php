<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransferdriveTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransferdriveTable Test Case
 */
class TransferdriveTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransferdriveTable
     */
    public $Transferdrive;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transferdrive'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Transferdrive') ? [] : ['className' => 'App\Model\Table\TransferdriveTable'];
        $this->Transferdrive = TableRegistry::get('Transferdrive', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Transferdrive);

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
