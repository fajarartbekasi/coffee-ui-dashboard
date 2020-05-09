<?php

namespace FajarArtBekasi\CoffeeUiPreset;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class CoffeeUiPreset extends Preset
{
    const STUBSPATH = __DIR__.'/coffee-ui-stubs/';

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateAssets();
        static::updateDashboardPage();

        static::updateWelcomePage();
        static::updateAuthViews();
        static::updateLayoutViews();

        static::addAlerts();

        static::addUserManagement();

        // static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return $packages;
    }

    /**
     * Update the assets
     *
     * @return void
     */
    protected static function updateAssets()
    {
        static::copyDirectory('resources/assets', public_path());
    }

    /**
     * Update the default welcome page file.
     *
     * @return void
     */
    protected static function updateWelcomePage()
    {
        // remove default welcome page
        static::deleteResource(('views/welcome.blade.php'));

        // copy new one from your stubs folder
        static::copyFile('resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }
    /**
     * Update the default dashboard page file.
     *
     * @return void
     */
    protected static function updateDashboardPage()
    {
        // remove default welcome page
        static::deleteResource(('views/home.blade.php'));

        // copy new one from your stubs folder
        static::copyFile('resources/views/home.blade.php', resource_path('views/home.blade.php'));
    }
    /**
     * Update the default layout files
     *
     * @return void
     */
    protected static function updateLayoutViews()
    {
        // copy new one from your stubs folder
        static::copyDirectory('resources/views/layouts', resource_path('views/layouts'));
        static::copyDirectory('resources/views/pages', resource_path('views/pages'));
    }

    /**
     * Copy Auth view templates.
     *
     * @return void
     */
    protected static function updateAuthViews()
    {
        static::copyFile('app/Http/Controllers/HomeController.php', app_path('Http/Controllers/HomeController.php'));
        static::copyFile('app/Http/Controllers/PageController.php', app_path('Http/Controllers/PageController.php'));

        // Add Auth routes in 'routes/web.php'
        file_put_contents(
            './routes/web.php',
            "Auth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n",
            FILE_APPEND
        );

        // Copy now-ui auth views from the stubs folder

        static::copyDirectory('resources/views/auth', resource_path('views/auth'));
    }
    public static function addAlerts()
    {
        static::copyDirectory('resources/views/alerts', resource_path('views/alerts'));
    }
    public static function addUserManagement()
    {
        // copy Controllers to app_path
        static::copyFile('app/Http/Controllers/AnalitycController.php', app_path('Http/Controllers/AnalitycController.php'));
        static::copyFile('app/Http/Controllers/MailController.php', app_path('Http/Controllers/MailController.php'));
        static::copyFile('app/Http/Controllers/ChatController.php', app_path('Http/Controllers/ChatController.php'));

        // Add routes
        file_put_contents(
            './routes/web.php',
            "Route::group(['middleware' => 'auth'], function () {
                \n\tRoute::get('analityc', 'AnalitycController@index')->name('analityc');
                \n\tRoute::get('mail', 'MailController@index')->name('mail');
                \n\tRoute::get('chats', 'ChatController@index')->name('chats');

                \n});
            \n\n",
            FILE_APPEND
        );
    }

    /**
     * Delete a resource
     *
     * @param string $resource
     * @return void
     */
    private static function deleteResource($resource)
    {
        (new Filesystem)->delete(resource_path($resource));
    }

    /**
     * Copy a directory
     *
     * @param string $file
     * @param string $destination
     * @return void
     */
    private static function copyFile($file, $destination)
    {
        (new Filesystem)->copy(static::STUBSPATH.$file, $destination);
    }

    /**
     * Copy a directory
     *
     * @param string $directory
     * @param string $destination
     * @return void
     */
    private static function copyDirectory($directory, $destination)
    {
        (new Filesystem)->copyDirectory(static::STUBSPATH.$directory, $destination);
    }
}
