<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Created by IntelliJ IDEA.
 * User: heshammassoud
 * Date: 26/12/2016
 * Time: 12:13
 */


/**
 * Error reporting
 */
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
date_default_timezone_set('Europe/London');

class Success extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('language');
        $this->load->library('session');
        $this->lang->load('register');
        $this->db->simple_query('SET NAMES \'utf-8\'');
    }

    public function index()
    {
        if ($this->session->flashdata('name')) {
            $this->load->view("view_success");
        } else {
            redirect("");
        }
    }

}
