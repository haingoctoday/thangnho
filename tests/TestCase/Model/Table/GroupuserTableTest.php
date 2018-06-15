<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupuserTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupuserTable Test Case
 */
class GroupuserTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupuserTable
     */
    public $Groupuser;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.groupuser'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Groupuser') ? [] : ['className' => 'App\Model\Table\GroupuserTable'];
        $this->Groupuser = TableRegistry::get('Groupuser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Groupuser);

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
