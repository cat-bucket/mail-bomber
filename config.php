<?php
// 用户输入是否保留空提供者
define('PRESERVE_EMPTY_PROVIDERS', filter_var(readline("是否保留空提供者（true/false）: "), FILTER_VALIDATE_BOOLEAN));

// 用户输入一次轰炸时所用的最大接口节点数量
define('USE_NODES_COUNT', (int)readline("一次轰炸时所用的最大接口节点数量（设置为0表示不限制）: "));

// 用户输入轰炸时HTTP最大并发连接数
define('CONCURRENCY', (int)readline("轰炸时HTTP最大并发连接数: "));

// 用户输入执行 update-nodes 命令时的线程池大小
define('THREAD_POOL_SIZE', (int)readline("执行 update-nodes 命令时的线程池大小: "));

// 用户输入Shodan API Key
define('SHODAN_API_KEY', readline("输入Shodan API Key（可选）: "));

// 用户输入ZoomEye API Key
define('ZOOMEYE_API_KEY', readline("输入ZoomEye API Key（可选）: "));

// 用户输入更新ZoomEye时限制的页面数量
define('ZOOMEYE_PAGE_LIMIT', (int)readline("更新ZoomEye时限制的页面数量: "));

// 用户输入代理配置
define('PROXY', readline("输入代理配置（例如：127.0.0.1:7890 或 socks5h://127.0.0.1:10808）: "));

// 用户输入所有HTTP连接的超时时间
define('TIMEOUT', (int)readline("输入所有HTTP连接的超时时间（秒）: "));

// 以下内容除非特别需要，不宜更改
define('PROVIDERS_JSON', __DIR__.'/data/providers.json');
define('DEAD_PROVIDERS_JSON', __DIR__.'/data/dead_providers.json');
define('NODES_JSON', __DIR__.'/data/nodes.json');
define('REFINED_NODES_JSON', __DIR__.'/data/refined_nodes.json');
define('TEST_DIR', __DIR__.'/test');
