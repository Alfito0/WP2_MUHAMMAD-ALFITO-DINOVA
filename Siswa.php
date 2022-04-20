<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('Forminput');
    }
    public function proses()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tl' => $this->input->post('tl'),
            'Tl' => $this->input->post('Tl'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('Formoutput', $data);
    }
}
