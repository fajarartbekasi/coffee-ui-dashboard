<?php

namespace Illuminate\Tests\Integration\Database;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase;

class DatabaseMySqlConnectionTest extends TestCase
{
    const TABLE = 'player';
    const FLOAT_COL = 'float_col';
    const JSON_COL = 'json_col';

    const FLOAT_VAL = 0.2;

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('app.debug', 'true');
        $app['config']->set('database.default', 'mysql');
    }

    protected function setUp(): void
    {
        parent::setUp();

        if (! isset($_SERVER['CI']) || windows_os()) {
            $this->markTestSkipped('This test is only executed on CI in Linux.');
        }

        if (! Schema::hasTable(self::TABLE)) {
            Schema::create(self::TABLE, function (Blueprint $table) {
                $table->json(self::JSON_COL)->nullable();
                $table->float(self::FLOAT_COL)->nullable();
            });
        }
    }

    protected function tearDown(): void
    {
        DB::table(self::TABLE)->truncate();

        parent::tearDown();
    }

    /**
     * @dataProvider floatComparisonsDataProvider
     */
    public function testJsonFloatComparison($value, $operator, $shouldMatch)
    {
        DB::table(self::TABLE)->insert([self::JSON_COL => '{"rank":'.self::FLOAT_VAL.'}']);

        $this->assertSame(
            $shouldMatch,
            DB::table(self::TABLE)->where(self::JSON_COL.'->rank', $operator, $value)->exists(),
            self::JSON_COL.'->rank should '.($shouldMatch ? '' : 'not ')."be $operator $value"
        );
    }

    public function floatComparisonsDataProvider()
    {
        return [
            [0.2, '=', true],
            [0.2, '>', false],
            [0.2, '<', false],
            [0.1, '=', false],
            [0.1, '<', false],
            [0.1, '>', true],
            [0.3, '=', false],
            [0.3, '<', true],
            [0.3, '>', false],
        ];
    }

    public function testFloatValueStoredCorrectly()
    {
        DB::table(self::TABLE)->insert([self::FLOAT_COL => self::FLOAT_VAL]);

        $this->assertEquals(self::FLOAT_VAL, DB::table(self::TABLE)->value(self::FLOAT_COL));
    }
}
