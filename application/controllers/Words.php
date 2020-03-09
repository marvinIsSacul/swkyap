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
    public function index() {
        $this->load->view('layouts/header');
        $this->load->view('layouts/footer');
    }
}
