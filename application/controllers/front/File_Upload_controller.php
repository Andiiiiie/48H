<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_Upload_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function load_upload_area(){
        $this->load->view('front/upload/test_upload');
    }
    public function upload_image()
    {
        // eto path anasina anle file
        $config['upload_path'] = 'E:\ITUNIVERSITY\S4'; // Specify the upload directory
        $config['allowed_types'] = 'gif|jpg|png'; // Allowed file types
        $config['max_size'] = 2048; // Maximum file size in kilobytes

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            // If the upload fails, display an error message
            $error = $this->upload->display_errors();
            echo $error;
        } else {
            // If the upload is successful, retrieve the uploaded file data
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            // Process the uploaded file as needed (e.g., store the file name in the database)

            // Redirect to a success page or load a view to display the uploaded image
            redirect('front/file_upload_controller/load_upload_area');
        }
    }

    public function success()
    {
        // Display a success message or load a view to show the uploaded image
        echo 'Image uploaded successfully!';
    }

}
?>
