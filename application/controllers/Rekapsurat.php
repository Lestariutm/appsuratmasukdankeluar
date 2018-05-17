<?php 
class Rekapsurat extends CI_Controller{
  function __construct(){
    parent:: __construct();
    $this->load->model("rekapsurat_model");
    }
  
  public function index(){
    $data['content']='page/rekapsurat/rekapsurat_view';
    $this->load->view("template",$data);
  }
  function suratmasuk(){
    $data["query"]= $this->rekapsurat_model->suratmasuk();
    $data['content']='page/rekapsurat/rekapsurat_masuk';
    $this->load->view("template",$data);
  }
  function suratkeluar(){
    $data["query"]=$this->rekapsurat_model->suratkeluar();
    $data['content']='page/rekapsurat/rekapsurat_keluar';
    $this->load->view("template",$data);
  }
}
?>