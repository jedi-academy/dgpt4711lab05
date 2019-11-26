<?php
namespace App\Controllers;
helper('form');

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
    ->render('placeslist'); 
     */
     
     $model = new \App\Models\Places();
     $headings = $model->fields;
     $data = $model->findAll();
     
     $table = new \CodeIgniter\View\Table();
     unset($headings[count($headings)-1]);
     $table->setHeading($headings);
     
     //echo '<img src="../../image/hongkong.jpg"/>';
     //echo '<img src="../../image/macau.jpg"/>';
     //echo '<img src="../../image/thailand.jpg"/>';
     //echo '<img src="../../image/japan.jpg"/>';
     //echo '<img src="../../image/vietnam.jpg"/>';
       
     foreach($data as $record){
        $linkedThing = anchor("travel/showme/$record->id","{$record->id}");
        $table->addRow($linkedThing, $record->name, $record->description,$record->link); 
     }
     
     $parser = \Config\Services::parser();     
     $view = \Config\Services::renderer();
     $output = $view->render('top').
     //$parser->setData(['records' => $data])->render('content') .
     $table->generate().
     $view->render('bottom');
     
     //$content = $table->generate();
     
     //echo form_submit($data="#");
     
     return $output;
     
    }
    public function showme($id)
    { 
      //$reuslt = form_open("aa","bb");
      //$result = form_submit("aaa","bbb");
      
      
       
      
                // connect to the model
               $places = new \App\Models\Places();
                // retrieve all the records
               $record = $places->find($id);
      
     //$result .= form_close("aa","bb");
     // return $result;
       /*
                // get a template parser
                $parser = \Config\Services::parser();
                // tell it about the substitions
                return $parser->setData($record)
                // and have it render the template with those
                ->render('oneplace');  
        
        */
                helper('form');
		$form = form_open('/travel/update/'.$id);
		$form .= form_fieldset('ID') .
				$record['id'] . form_fieldset_close();
		$form .= form_fieldset('Name') .
				'Destination name: ' .
				form_input('name', $record['name']) . form_fieldset_close();
		$form .= form_fieldset('Description') .
				'Destination description: ' .
				form_textarea('description', $record['description']) . form_fieldset_close();
		$form .= form_fieldset('Link') .
				'Official tourism site: ' .
				form_input('link', $record['link']) . form_fieldset_close();
                $form .= form_submit('Submit','please update me');
		// don't include any buttons yet
		$form .= form_close();

		//get a template parser
		$parser = \Config\Services::parser();
		// tell it about the substitions
		return $parser->setData(['form' => $form], 'raw')
						// and have it render the template with those
						->render('oneplace');
    }
    public function update($id) {
        $places = new \App\Models\Places();
        $record = $places->find($id);
        //perform validation with proper rules
         if (! $this->validate($places->validationRules))
                {
             //else,redisplay with error messages
                    echo $this->validator->listErrors();
                    $this->showme($id);
                }
                else
                {
                    //if success, update the model
                        $record = array_merge($record, $this->request->getVar());
                        $record->update($id);
                        $this->index();
                }
    }

    public function signup() {
        return view("Signup");
    }
    public function handle() {
        helper(['form', 'url']);
        
     //   echo var_dump($this->request->getVar());

            $rules = [
              'username' => 'required',
                'password'=> 'required|min_length[5]',
                'email' => 'required|valid_email'
            ];
                if (! $this->validate($rules))
                {
                    echo $this->validator->listErrors();
                        echo view('Signup', [
                                'validation' => $this->validator
                        ]);
                }
                else
                {
                        echo view('Success');
                }
    }
}