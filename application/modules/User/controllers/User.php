<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
        $this->load->library('bcrypt');
        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }

    function list_user()
    {
        $list = $this->User_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $labelnm = '<label id="labelnm_' . $d->user_id . '">' . $d->user_nama . '</label>';
            $labelusr = '<label id="labelusr_' . $d->user_id . '">' . $d->username . '</label>';
            if ($d->level == 1) {
                # code...
                $labellevel = '<label id="labelusr_' . $d->user_id . '">Superadmin</label>';
            } else if ($d->level == 2) {
                $labellevel = '<label id="labelusr_' . $d->user_id . '">Admin</label>';
                # code...
            } else if ($d->level == 3) {
                $labellevel = '<label id="labelusr_' . $d->user_id . '">Karyawan</label>';
                # code...
            } else {
                $labellevel = '<label id="labelusr_' . $d->user_id . '">Belum di setting</label>';
                # code...
            }

            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = '<input class="form-group" id="nama_' . $d->user_id . '" type="hidden" value="' . $d->user_nama . '">' . $labelnm;
            $row[] = '<input class="form-group" id="username_' . $d->user_id . '" type="hidden" value="' . $d->username . '">' . $labelusr;
            $row[] = '<select style="display:none;" class="form-control" id="level_' . $d->user_id . '">
                                <option value="1" >Superadmin</option>
                                <option value="2"  >admin</option>
                                <option value="3" >karyawan</option>
                            </select>' . $labellevel;
            $row[] = '<button class="btn btn-warning btn-xs" id="btn_edit_' . $d->user_id . '" onclick="func_edit(' . $d->user_id . ')"><i class="ace-icon fa fa-edit bigger-60"></i></button>
            <button class="btn btn-danger btn-xs" id="btn_del_' . $d->user_id . '" onclick="func_del(' . $d->user_id . ')"><i class="ace-icon fa fa-trash bigger-60"></i></button>
            <button class="btn btn-primary btn-xs" style="display:none;" id="btn_save_' . $d->user_id . '" onclick="func_save(' . $d->user_id . ')"><i class="ace-icon fa fa-save bigger-60"></i></button>
            <button class="btn btn-default btn-xs" style="display:none;" id="btn_can_' . $d->user_id . '" onclick="func_can(' . $d->user_id . ')"><i class="ace-icon fa fa-times bigger-60"></i></button>
            <span id="spin_load_' . $d->user_id . '"></span>';


            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->User_m->count_all(),
            "recordsFiltered" => $this->User_m->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }

    public function index()
    {
        $data = [
            'tittle' => 'Data User',
            'js' => 'core'
        ];
        $this->template->load('template', 'page/v_user', $data);
    }

    function save()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $level = $this->input->post('level');
        $pass = $this->input->post('password');
        $hash = $this->bcrypt->hash_password($pass);

        $data = array(
            'user_nama' => $nama,
            'username' => $username,
            'user_pass' => $hash,
            'level' =>  $level

        );

        $d = $this->User_m->simpan_user($data);
        echo json_encode($d);
    }
}

/* End of file User.php */