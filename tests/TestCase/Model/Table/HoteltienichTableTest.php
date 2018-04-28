<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HoteltienichTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HoteltienichTable Test Case
 */
class HoteltienichTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HoteltienichTable
     */
    public $Hoteltienich;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hoteltienich'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hoteltienich') ? [] : ['className' => 'App\Model\Table\HoteltienichTable'];
        $this->Hoteltienich = TableRegistry::get('Hoteltienich', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hoteltienich);

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
