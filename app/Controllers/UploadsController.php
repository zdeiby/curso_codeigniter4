<?php 

namespace App\Controllers;

class UploadsController extends BaseController
{
    public function show($filename)
    {
        $path = WRITEPATH . 'uploads/' . $filename;

        if (file_exists($path)) {
            return $this->response->download($path, null);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('File not found: ' . $filename);
        }
    }
}
