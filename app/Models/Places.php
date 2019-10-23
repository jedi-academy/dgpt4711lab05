<?php
namespace App\Models;

class Places extends Simple\CSVModel{
         protected $origin = WRITEPATH . 'data/Place.csv';
         protected $keyField = 'id'; 
         protected $validationRules = [];
    
}