<?php
namespace App\Models;

class Places extends Simple\CSVModel{
         protected $origin = WRITEPATH . 'data/Place.csv';
         protected $keyField = 'id'; 
         protected $validationRules = [
             'name' => 'required|alpha_space',
             'description' => 'required|max_length[100]',
             'link' => 'required|valid_url'
         ];
    
}