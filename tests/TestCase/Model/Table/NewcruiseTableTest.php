<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewcruiseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewcruiseTable Test Case
 */
class NewcruiseTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewcruiseTable
     */
    public $Newcruise;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.newcruise'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Newcruise') ? [] : ['className' => 'App\Model\Table\NewcruiseTable'];
        $this->Newcruise = TableRegistry::get('Newcruise', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Newcruise);

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
