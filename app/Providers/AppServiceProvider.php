<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;

use League\Flysystem\WebDAV\WebDAVAdapter;
use Sabre\DAV\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //register nextcloud file system driver (webdav)
        Storage::extend('nextcloud', function ($app, $config) {
            $client = new Client([
                'baseUri' => rtrim($config['webdav_url'], '/') . '/',
                'userName' => $config['webdav_user'],
                'password' => $config['webdav_password'],
                'authType' => \Sabre\DAV\Client::AUTH_BASIC,  // Force Basic Auth
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($config['webdav_user'] . ':' . $config['webdav_password']),
                ]
            ]);

            $adapter = new WebDAVAdapter($client, $config['webdav_path'] ?? '/');

            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }
}
