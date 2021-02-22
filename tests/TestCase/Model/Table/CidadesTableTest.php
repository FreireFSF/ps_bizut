<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CidadesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CidadesTable Test Case
 */
class CidadesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CidadesTable
     */
    protected $Cidades;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cidades',
        'app.Estados',
        'app.Usuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cidades') ? [] : ['className' => CidadesTable::class];
        $this->Cidades = $this->getTableLocator()->get('Cidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cidades);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
