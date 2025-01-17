<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

/**
 * Ini配置测试
 * @author    7IN0SAN9 <me@7in0.me>
 */

namespace think\config\driver;

use think\app;
use think\config;

class iniTest extends \PHPUnit_Framework_TestCase
{
    public function testParse()
    {
        App::run(Config::get());
        Config::parse('inistring=1', 'ini');
        $this->assertEquals(1, Config::get('inistring'));
        Config::reset();
        Config::parse('tests/framework/application/test.ini');
        $this->assertTrue(Config::has('inifile'));
        $this->assertEquals(1, Config::get('inifile'));
        Config::reset();
    }
}
