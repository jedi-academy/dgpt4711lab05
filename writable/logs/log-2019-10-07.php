<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-07 19:41:34 --> Class 'App\Controllers\App\Models\Places' not found
#0 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->index()
#1 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#5 {main}
CRITICAL - 2019-10-07 19:42:11 --> Class 'App\Controllers\App\Models\Places' not found
#0 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->index()
#1 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#5 {main}
CRITICAL - 2019-10-07 19:42:34 --> Class 'App\Controllers\App\Models\Places' not found
#0 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->index()
#1 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#5 {main}
CRITICAL - 2019-10-07 19:44:34 --> Class 'App\Controllers\Config\Services' not found
#0 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->index()
#1 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#5 {main}
CRITICAL - 2019-10-07 19:44:54 --> Class 'App\Controllers\Config\Services' not found
#0 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->index()
#1 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#5 {main}
CRITICAL - 2019-10-07 19:56:20 --> Argument 1 passed to CodeIgniter\View\Parser::setData() must be of the type array, null given, called in /pub7/htdocs/dgpt4711lab04/app/Controllers/Travel.php on line 30
#0 /pub7/htdocs/dgpt4711lab04/app/Controllers/Travel.php(30): CodeIgniter\View\Parser->setData(NULL)
#1 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->showme('5')
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#3 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#6 {main}
CRITICAL - 2019-10-07 19:58:46 --> Undefined variable: data
#0 /pub7/htdocs/dgpt4711lab04/app/Models/Places.php(58): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/pub7/htdocs/dg...', 58, Array)
#1 /pub7/htdocs/dgpt4711lab04/app/Controllers/Travel.php(26): App\Models\Places->find('5')
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->showme('5')
#3 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#7 {main}
CRITICAL - 2019-10-07 19:59:09 --> Undefined variable: data
#0 /pub7/htdocs/dgpt4711lab04/app/Models/Places.php(58): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/pub7/htdocs/dg...', 58, Array)
#1 /pub7/htdocs/dgpt4711lab04/app/Controllers/Travel.php(26): App\Models\Places->find('5')
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->showme('5')
#3 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#7 {main}
CRITICAL - 2019-10-07 19:59:12 --> Undefined variable: data
#0 /pub7/htdocs/dgpt4711lab04/app/Models/Places.php(58): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', '/pub7/htdocs/dg...', 58, Array)
#1 /pub7/htdocs/dgpt4711lab04/app/Controllers/Travel.php(26): App\Models\Places->find('5')
#2 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(844): App\Controllers\Travel->showme('5')
#3 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 /pub7/htdocs/dgpt4711lab04/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 /pub7/htdocs/dgpt4711lab04/vendor/codeigniter4/framework/system/Commands/Server/rewrite.php(34): require_once('/pub7/htdocs/dg...')
#7 {main}
CRITICAL - 2019-10-07 21:11:39 --> Namespace declaration statement has to be the very first statement or after any declare call in the script
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
