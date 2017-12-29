<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NewhotelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NewhotelTable Test Case
 */
class NewhotelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NewhotelTable
     */
    public $Newhotel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.newhotel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Newhotel') ? [] : ['className' => 'App\Model\Table\NewhotelTable'];
        $this->Newhotel = TableRegistry::get('Newhotel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Newhotel);

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
