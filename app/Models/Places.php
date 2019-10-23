<?php

 namespace App\Models\Places;
    use App\Models\Simple\XMLModel;
    class Places extends XMLModel
    {
        protected $origin   =  '/data/xmldata.xml';
        protected  $keyField ='id';
        protected $validationRules="";


        public function findAll()
	{
		return $this->data;
	}
	public function find($id = null)
	{
		if ( ! empty($id) && isset($this->data[$id]))
			return $this->data[$id];
		return null;
	}
    }  
