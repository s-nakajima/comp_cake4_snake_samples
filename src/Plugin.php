<?php
declare(strict_types=1);

/**
 * NC4 Framework (https://github.com/NC-4/NC4)
 * © NC4 Project.
 *
 * Licensed under The FreeBSD License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author     一般社団法人 教育のための科学研究所
 * @link       https://www.s4e.jp/
 * @author     国立研究開発法人 科学技術振興機構
 * @link       https://www.jst.go.jp/
 * @author     リーディング・スキル・テスト株式会社
 * @link       https://www.rstest.co.jp/
 * @copyright  NC4 Project
 * @since      4.0.0
 * @license    https://opensource.org/licenses/BSD-2-Clause FreeBSD License
 */
namespace CompNcCake4Examples;

use Cake\Console\CommandCollection;
use Cake\Core\BasePlugin;
use Cake\Core\ContainerInterface;
use Cake\Core\PluginApplicationInterface;
use Cake\Http\MiddlewareQueue;
use Cake\Routing\RouteBuilder;

/**
 * Plugin for CompNcCake4Examples
 */
class Plugin extends BasePlugin
{
    /**
     * Load all the plugin configuration and bootstrap logic.
     *
     * The host application is provided as an argument. This allows you to load
     * additional plugin dependencies, or attach events.
     *
     * @param \Cake\Core\PluginApplicationInterface $app The host application
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
    }

    /**
     * Add routes for the plugin.
     *
     * If your plugin has many routes and you would like to isolate them into a separate file,
     * you can create `$plugin/config/routes.php` and delete this method.
     *
     * @param \Cake\Routing\RouteBuilder $routes The route builder to update.
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function routes(RouteBuilder $routes): void
    {
    }

    /**
     * Add middleware for the plugin.
     *
     * @param \Cake\Http\MiddlewareQueue $middlewareQueue The middleware queue to update.
     * @return \Cake\Http\MiddlewareQueue
     */
    public function middleware(MiddlewareQueue $middlewareQueue): MiddlewareQueue
    {
        // Add your middlewares here

        return $middlewareQueue;
    }

    /**
     * Add commands for the plugin.
     *
     * @param \Cake\Console\CommandCollection $commands The command collection to update.
     * @return \Cake\Console\CommandCollection
     */
    public function console(CommandCollection $commands): CommandCollection
    {
        // Add your commands here

        $commands = parent::console($commands);

        return $commands;
    }

    /**
     * Register application container services.
     *
     * @param \Cake\Core\ContainerInterface $container The Container to update.
     * @return void
     * @link https://book.cakephp.org/4/ja/development/dependency-injection.html#dependency-injection
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function services(ContainerInterface $container): void
    {
        // Add your services here
    }
}
