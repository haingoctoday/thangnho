<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SlideagentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SlideagentTable Test Case
 */
class SlideagentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SlideagentTable
     */
    public $Slideagent;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.slideagent'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Slideagent') ? [] : ['className' => 'App\Model\Table\SlideagentTable'];
        $this->Slideagent = TableRegistry::get('Slideagent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Slideagent);

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
