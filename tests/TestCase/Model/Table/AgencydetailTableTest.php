<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgencydetailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgencydetailTable Test Case
 */
class AgencydetailTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgencydetailTable
     */
    public $Agencydetail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agencydetail'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Agencydetail') ? [] : ['className' => 'App\Model\Table\AgencydetailTable'];
        $this->Agencydetail = TableRegistry::get('Agencydetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agencydetail);

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
