<?php

namespace Sawirricardo\Dropbox\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sawirricardo\Dropbox\DropboxServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            DropboxServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('filesystem.dropbox.authorization_token', 'testing');
        config()->set('filesystem.dropbox.case_sensitive', true);
    }
}
