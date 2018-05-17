<?php 
class Suratmasuk extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model("suratmasuk_model");
		}
	
	public function index(){
		$data["query"]=$this->suratmasuk_model->getAllData();
		$data['content']='page/suratmasuk/suratmasuk_view';
		$this->load->view("template",$data);
		}
	function tambah(){
		$data['content']='page/suratmasuk/suratmasuk_tambah';
		$this->load->view('template',$data);
	}
		function tambah_proses(){
		$no_agenda = $this->input->post("no_agenda");
		$no_surat = $this->input->post("no_surat");
		$pengirim = $this->input->post("pengirim");
		$tgl_surat = $this->input->post("tgl_surat");
		$tgl_diterima = $this->input->post("tgl_diterima");
		$perihal = $this->input->post("perihal");
		

		$data=array(
		"no_agenda" => $no_agenda,
		"no_surat" => $no_surat,
		"pengirim" => $pengirim,
		"tgl_surat" => $tgl_surat,
		"tgl_diterima" => $tgl_diterima,
		"perihal" => $perihal
		);
		
		$insert = $this->db->insert("suratmasuk",$data);
		if ($insert){
			echo "
				<script>
				alert('Data Berhasil disimpan');
				window.location = '".base_url('suratmasuk')."';
				</script>
				";
			}else{
				echo "
					<script>
						alert('Data gagal disimpan');
						window.location = '".base_url('suratmasuk/tambah')."';
					</script>
				";
			}
		}
	function edit($id){
        $data['query'] = $this->db->get_where('suratmasuk', ['suratmasuk_id' => $id])->row();   
        $data['content']='page/suratmasuk/suratmasuk_edit';
		$this->load->view('template',$data);
       }
     function update(){
     		$id=$this->input->post("id");
			$no_agenda =$this->input->post("no_agenda");
			$no_surat = $this->input->post("no_surat");
			$pengirim=$this->input->post("pengirim");
			$tgl_surat=$this->input->post("tgl_surat");
			$tgl_diterima=$this->input->post("tgl_diterima");
			$perihal=$this->input->post("perihal");
			

			$data=array(
		"suratmasuk_id" => $id,
		"no_agenda" => $no_agenda,
		"no_surat" => $no_surat,
		"pengirim" => $pengirim,
		"tgl_surat" => $tgl_surat,
		"tgl_diterima" => $tgl_diterima,
		"perihal" => $perihal,
		
				);
			$this->db->where('no_agenda',$no_agenda);
			$this->db->update('suratmasuk',$data);
			redirect('suratmasuk');	
	}
	function hapus($id){
		if($this->db->delete('suratmasuk',['suratmasuk_id'=>$id])){
			?>
			<script type="text/javascript">
				alert("Data Berhasil di hapus");
				window.location="<?php echo base_url('suratmasuk'); ?>";
			</script>
			<?php
		}

	}
}
	?>