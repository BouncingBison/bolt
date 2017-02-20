<?php

namespace Bolt\Tests\Provider;

use Bolt\Storage\Database\Schema;
use Bolt\Provider\DatabaseSchemaServiceProvider;
use Bolt\Tests\BoltUnitTest;

/**
 * Class to test src/Provider/DatabaseSchemaServiceProvider.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 */
class DatabaseSchemaServiceProviderTest extends BoltUnitTest
{
    public function testProvider()
    {
        $app = $this->getApp();
        $provider = new DatabaseSchemaServiceProvider($app);
        $app->register($provider);
        $this->assertInstanceOf(Schema\Manager::class, $app['schema']);
        $app->boot();
    }
}
