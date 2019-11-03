<?php
namespace App\Controllers;

class Travel extends BaseController
{
    public function index()
    {
     /*
        // connect to the model
    $places = new \App\Models\Places();
        // retrieve all the records
    $records = $places->findAll();
    
        // get a template parser
    $parser = \Config\Services::parser();
        // tell it about the substitions
    return $parser->setData(['records' => $records])
        // and have it render the template with those
    ->render('placelist'); 
     */
     
     $view = \Config\Services::renderer();
     $output = $view->render('top') .
     $view->render('content') .
     $view->render('bottom');
     
     $model = new \App\Models\Places();
     $headings = $model->fields;
     $data = $model->findAll();
     
     $table = new \CodeIgniter\View\Table();
     unset($headings[count($headings)-1]);
     $table->setHeading($headings);
     
     foreach($data as $record){	
        $table->addRow($record->id, $record->name, $record->description,$record->link);
     }
     echo $content = $table->generate();
       
     return $output;
    }
    public function showme($id)
    {
        /*
        // connect to the model
      $places = new \App\Models\Places();
        // retrieve all the records
      $record = $places->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
      return $parser->setData($record)
      // and have it render the template with those
      ->render('oneplace');  
        */
      echo form_open();
      echo form_button('name','content');
      
      echo form_close();
    }
}