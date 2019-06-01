<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntitiesTable Test Case
 */
class EntitiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EntitiesTable
     */
    public $Entities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Entities',
        'app.Transactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Entities') ? [] : ['className' => EntitiesTable::class];
        $this->Entities = TableRegistry::getTableLocator()->get('Entities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Entities);

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
