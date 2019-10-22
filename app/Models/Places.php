<?php

 namespace App\Models\Places;
    use App\Models\Simple\XMLModel;
    class Places extends XMLModel
    {
        protected $data   = [
            
        ];
        
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
