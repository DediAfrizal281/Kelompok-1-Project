<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Project extends CI_Controller{
   public function index()
   {
       $this->load->view('header_awal');
       $this->load->view('view_index');
       $this->load->view('fuuter');
       $this->load->view('akhir');
   }

   public function about()
   {
       $this->load->view('heder');
       $this->load->view('view_about');
       $this->load->view('akhir');
   }

   public function contact()
   {
       $this->load->view('heder');
       $this->load->view('view_contact');
       $this->load->view('akhir');
   }

   public function destinasi()
   {
       $this->load->view('heder');
       $this->load->view('view_destinasi');
       $this->load->view('akhir');
   }

   public function review()
   {
       $this->load->view('heder');
       $this->load->view('view_review');
       $this->load->view('akhir');
   }
}
?>