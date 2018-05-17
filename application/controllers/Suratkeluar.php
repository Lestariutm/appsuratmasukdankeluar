<?php 
class Suratkeluar extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model("suratkeluar_model");
		}
	
	public function index(){
		$data["query"]=$this->suratkeluar_model->getAllData();
		$data['content']='page/suratkeluar/suratkeluar_view';
		$this->load->view("template",$data);
		}
	function tambah(){
		$data['content']='page/suratkeluar/suratkeluar_tambah';
		$this->load->view('template',$data);
	}
		function tambah_proses(){
		$no_agenda = $this->input->post("no_agenda");
		$no_surat = $this->input->post("no_surat");
		$tgl_surat = $this->input->post("tgl_surat");
		$perihal = $this->input->post("perihal");
		$ditujukan = $this->input->post("ditujukan");
		

		$data=array(
		"no_agenda" => $no_agenda,
		"no_surat" => $no_surat,
		"tgl_surat" => $tgl_surat,
		"perihal" => $perihal,
		"ditujukan" => $ditujukan
		);
		
		$insert = $this->db->insert("suratkeluar",$data);
		if ($insert){
			echo "
				<script>
				alert('Data Berhasil disimpan');
				window.location = '".base_url('suratkeluar')."';
				</script>
				";
			}else{
				echo "
					<script>
						alert('Data gagal disimpan');
						window.location = '".base_url('suratkeluar/tambah')."';
					</script>
				";
			}
		}
	function edit($id){
        $data['query'] = $this->db->get_where('suratkeluar', ['suratkeluar_id' => $id])->row();   
        $data['content']='page/suratkeluar/suratkeluar_edit';
		$this->load->view('template',$data);
       }
     function update(){
 
			$no_agenda =$this->input->post("no_agenda");
			$no_surat = $this->input->post("no_surat");
			$tgl_surat=$this->input->post("tgl_surat");
			$perihal=$this->input->post("perihal");
			$ditujukan=$this->input->post("ditujukan");
			

			$data=array(
		"no_agenda" => $no_agenda,
		"no_surat" => $no_surat,
		"tgl_surat" => $tgl_surat,
		"perihal" => $perihal,
		"ditujukan" => $ditujukan
		
				);
			$this->db->where('suratkeluar_id',$id);
			$this->db->update('suratkeluar',$data);
			redirect('suratkeluar');	
	}
	function hapus($id){
		if($this->db->delete('suratkeluar',['suratkeluar_id'=>$id])){
			?>
			<script type="text/javascript">
				alert("Data Berhasil di hapus");
				window.location="<?php echo base_url('suratkeluar'); ?>";
			</script>
			<?php
		}

	}
}
	?>