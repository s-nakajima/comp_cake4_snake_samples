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
namespace CompNcCake4Examples\Controller;

use CompNcCake4Examples\View\AppView;
use Nc4\Controller\PagesAppController as BaseController;

/**
 * CompNcCake4Examples AppController
 */
class AppController extends BaseController
{
    /**
     * Initialize Controller
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->viewBuilder()
            ->setClassName(AppView::class);
    }
}
