    <?php
    namespace App\Controllers;

    class Media extends BaseController
    {
        public function image($filename)
        {
            readfile(WRITEPATH . 'data/' . $filename);
        }
    }