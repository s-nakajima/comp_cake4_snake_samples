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

/**
 * Test suite bootstrap for CompNcCake4Examples.
 *
 * This function is used to find the location of CakePHP whether CakePHP
 * has been installed as a dependency of the plugin, or the plugin is itself
 * installed as a dependency of an application.
 */
$findRoot = function ($root) {
    do {
        $lastRoot = $root;
        $root = dirname($root);
        if (is_dir($root . '/vendor/cakephp/cakephp')) {
            return $root;
        }
    } while ($root !== $lastRoot);

    throw new Exception('Cannot find the root of the application, unable to run tests');
};
$root = $findRoot(__FILE__);
unset($findRoot);

chdir($root);

require_once $root . '/vendor/autoload.php';

/**
 * Define fallback values for required constants and configuration.
 * To customize constants and configuration remove this require
 * and define the data required by your plugin here.
 */
require_once $root . '/vendor/cakephp/cakephp/tests/bootstrap.php';

if (file_exists($root . '/config/bootstrap.php')) {
    require $root . '/config/bootstrap.php';

    return;
}

/**
 * Load schema from a SQL dump file.
 *
 * If your plugin does not use database fixtures you can
 * safely delete this.
 *
 * If you want to support multiple databases, consider
 * using migrations to provide schema for your plugin,
 * and using \Migrations\TestSuite\Migrator to load schema.
 */
use Cake\TestSuite\Fixture\SchemaLoader;

// Load a schema dump file.
(new SchemaLoader())->loadSqlFiles($root . '/tests/schema.sql', 'test');
