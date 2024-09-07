<?php
// 默认设置
define('PRESERVE_EMPTY_PROVIDERS', false); // 是否保留空提供者
define('USE_NODES_COUNT', 5000); // 一次轰炸时所用的最大接口节点数量
define('CONCURRENCY', 50); // 轰炸时HTTP最大并发连接数
define('THREAD_POOL_SIZE', 20); // 执行 update-nodes 命令时的线程池大小

// 检查是否已定义API Key
if (!defined('SHODAN_API_KEY')) {
    define('SHODAN_API_KEY', readline("输入Shodan API Key（可选）: "));
}

if (!defined('ZOOMEYE_API_KEY')) {
    define('ZOOMEYE_API_KEY', readline("输入ZoomEye API Key（可选）: "));
}

// 默认设置
define('ZOOMEYE_PAGE_LIMIT', 50); // 更新ZoomEye时限制的页面数量

// 修改代理配置，默认不使用代理
if (!defined('PROXY')) {
    define('PROXY', readline("输入代理配置（留空以不使用代理）: ") ?: null);
}

// 默认设置
define('TIMEOUT', 30); // 所有HTTP连接的超时时间

// 以下内容除非特别需要，不宜更改
define('PROVIDERS_JSON', __DIR__.'/data/providers.json');
define('DEAD_PROVIDERS_JSON', __DIR__.'/data/dead_providers.json');
define('NODES_JSON', __DIR__.'/data/nodes.json');
define('REFINED_NODES_JSON', __DIR__.'/data/refined_nodes.json');
define('TEST_DIR', __DIR__.'/test');
