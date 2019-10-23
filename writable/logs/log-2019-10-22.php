<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-22 20:47:33 --> Undefined property: App\Models\Places::$keyfield
#0 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(46): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined prope...', 'D:\\xampp\\htdocs...', 46, Array)
#1 D:\xampp\htdocs\dgpt4711lab05\app\Models\Simple\CSVModel.php(21): App\Models\Simple\CSVModel->load()
#2 D:\xampp\htdocs\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\CSVModel->__construct()
#3 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#4 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#5 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 D:\xampp\htdocs\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 D:\xampp\htdocs\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('D:\\xampp\\htdocs...')
#8 {main}
