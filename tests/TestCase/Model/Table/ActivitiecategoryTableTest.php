<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitiecategoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitiecategoryTable Test Case
 */
class ActivitiecategoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitiecategoryTable
     */
    public $Activitiecategory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.activitiecategory'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Activitiecategory') ? [] : ['className' => 'App\Model\Table\ActivitiecategoryTable'];
        $this->Activitiecategory = TableRegistry::get('Activitiecategory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Activitiecategory);

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
