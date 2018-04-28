<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersmTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersmTable Test Case
 */
class UsersmTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersmTable
     */
    public $Usersm;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usersm'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Usersm') ? [] : ['className' => 'App\Model\Table\UsersmTable'];
        $this->Usersm = TableRegistry::get('Usersm', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usersm);

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
