<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Layout 
{
    function show($view, $data)
    {
        // Get current CI Instance
        $CI = & get_instance();
 
        // Load template views
        $CI->load->view('layout/header', $data);
        $CI->load->view($view);
        $CI->load->view('layout/footer');
    }
 
}