<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewtransferTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewtransferTable Test Case
 */
class NewtransferTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewtransferTable
     */
    public $Newtransfer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.newtransfer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Newtransfer') ? [] : ['className' => 'App\Model\Table\NewtransferTable'];
        $this->Newtransfer = TableRegistry::get('Newtransfer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Newtransfer);

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
