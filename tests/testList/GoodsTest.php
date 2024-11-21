<?php
namespace tests;

use PHPUnit\Framework\TestCase;

class GoodsTest extends BaseTest
{

    public function testIndexPage(): void
    {
        $url = $this->baseUrl.'/?s=goods/index/id/25.html'; // 替换为实际页面地址

        $httpCode = $this->putUrl($url);

        // 断言状态码为 200
        $this->assertSame(200, $httpCode, "Failed on $url");
    }
    
}