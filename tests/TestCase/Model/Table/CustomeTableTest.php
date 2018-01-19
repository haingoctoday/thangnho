<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomeTable Test Case
 */
class CustomeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomeTable
     */
    public $Custome;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.custome'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Custome') ? [] : ['className' => 'App\Model\Table\CustomeTable'];
        $this->Custome = TableRegistry::get('Custome', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Custome);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
