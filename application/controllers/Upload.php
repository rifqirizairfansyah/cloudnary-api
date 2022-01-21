<?php if(!defined('BASEPATH'))exit('No direct script access allowed');

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;
class Upload extends CI_Controller {

      
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data['content'] = 'v_upload';

        $this->load->view('v_utama', $data);
    }

    public function upload_image () {
        
        
        Configuration::instance([
            'cloud' => [
              'cloud_name' => 'dfexqsxvh', 
              'api_key' => '671778718739459', 
              'api_secret' => '_R8-5uEnB7euHeO71XrWBUN5CnM'],
            'url' => [
              'secure' => true]]);
            $image = UploadedFile::getInstanceByName('file');
            (new UploadApi())->upload($image->tempName);
    }

}