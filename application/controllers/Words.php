<?php

/**
 * @author Marvin Kagiso
 * @since 09:24 2020/03/08
 */


defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * The Word 
 */
class Words extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('languages_model');
    }

    public function index() {
        $headerData = [
            'title' => 'Words',
            'languages' => $this->languages_model->getAllLanguages()
        ];
        $data = [

        ];

        $this->load->view('layouts/header', $headerData);
        $this->load->view('words/index', $data);
        $this->load->view('layouts/footer');
    }

    public function view($offset, $limit) {
        $headerData = [
            'title' => 'View Word',
            'languages' => $this->languages_model->getAllLanguages()
        ];
        $data = [

        ];

        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/view', $data);
        $this->load->view('layouts/footer');
    }
}
