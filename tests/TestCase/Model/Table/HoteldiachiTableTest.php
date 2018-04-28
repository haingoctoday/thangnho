<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HoteldiachiTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HoteldiachiTable Test Case
 */
class HoteldiachiTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HoteldiachiTable
     */
    public $Hoteldiachi;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hoteldiachi'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hoteldiachi') ? [] : ['className' => 'App\Model\Table\HoteldiachiTable'];
        $this->Hoteldiachi = TableRegistry::get('Hoteldiachi', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hoteldiachi);

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
