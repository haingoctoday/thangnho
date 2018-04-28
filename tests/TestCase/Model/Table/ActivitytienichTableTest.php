<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitytienichTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitytienichTable Test Case
 */
class ActivitytienichTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitytienichTable
     */
    public $Activitytienich;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.activitytienich'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Activitytienich') ? [] : ['className' => 'App\Model\Table\ActivitytienichTable'];
        $this->Activitytienich = TableRegistry::get('Activitytienich', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Activitytienich);

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
