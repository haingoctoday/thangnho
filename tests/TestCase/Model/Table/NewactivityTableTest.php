<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewactivityTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewactivityTable Test Case
 */
class NewactivityTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewactivityTable
     */
    public $Newactivity;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.newactivity'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Newactivity') ? [] : ['className' => 'App\Model\Table\NewactivityTable'];
        $this->Newactivity = TableRegistry::get('Newactivity', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Newactivity);

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
