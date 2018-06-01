<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserreviewTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserreviewTable Test Case
 */
class UserreviewTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserreviewTable
     */
    public $Userreview;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.userreview'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Userreview') ? [] : ['className' => 'App\Model\Table\UserreviewTable'];
        $this->Userreview = TableRegistry::get('Userreview', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Userreview);

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
