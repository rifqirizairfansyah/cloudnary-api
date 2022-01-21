<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restfull extends CI_Controller {

  function __construct(){
  parent::__construct();
  // Load model M_Pegawai.php yang sebelumnya sudah dibuat
  $this->load->model("M_pegawai");

  header('Access-Control-Allow-Orgin: *');
  header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, oPTIONS');
  header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
  header('Content-Type: application/json');
  }
  //GET ALL DATA PEGAWAI
  public function db_web2_2(){
  // Query from M_pegwai.php
  $pegawai = $this->M_pegawai->getAll();
  if(!empty($pegawai)){
    foreach($pegawai->result_array() as $row){
        // data array dari tabel t_pegawai
        $response[] = array(
            'id_pegawai'     => $row['id_pegawai'], 
            'nip'            => $row['nip'],
            'nama_jabatan'   => $row['nama_jabatan'],
            'nama'           => $row['nama'],
            'agama'          => $row['agama'],
            'telepon'        => $row['telepon'],
            'jenis_kelamin'  => $row['jenis_kelamin'],
            'alamat'         => $row['alamat'],
        );
    }
  }else{
    $response = array();
  }
  $json = [
    'status'   => 200,
    'error'    => null,
    'data'     => $response
  ];
  //Print with json_encode()
  echo json_encode($json);
  }

  public function get_pegawai($id_pegawai=''){
  // Jika variable $id_pegawai tidak kosong
  if(!empty($id_pegawai)){
    // Query get salah satu data dari tabel t_pegawai
    $row = $this->M_pegawai->getById($id_pegawai);
    $response = array(
        'id_pegawai'     => $row->id_pegawai, 
        'nip'            => $row->nip,
        'id_jabatan'     => $row->id_jabatan,
        'nama'           => $row->nama,
        'agama'          => $row->agama,
        'telepon'        => $row->telepon,
        'jenis_kelamin'  => $row->jenis_kelamin,
        'alamat'         => $row->alamat,
      );
  }else{
    $response = array();
  }
  $json = [
    'status'   => 200,
    'error'    => null,
    'data'     => $response
  ];
  //Print with json_encode()
  echo json_encode($json);
  }

  public function add_pegawai(){

  $nip            = $this->input->post('nip');
  $id_jabatan     = $this->input->post('id_jabatan');
  $nama           = $this->input->post('nama');
  $agama          = $this->input->post('agama');
  $telepon        = $this->input->post('telepon');
  $jenis_kelamin  = $this->input->post('jenis_kelamin');
  $alamat         = $this->input->post('alamat');

  if(!empty($nama)){
    $data = array(
        // Field => isi
        'nip'            => $nip,
        'id_jabatan'     => $id_jabatan,
        'nama'           => $nama,
        'agama'          => $agama,
        'telepon'        => $telepon,
        'jenis_kelamin'  => $jenis_kelamin,
        'alamat'         => $alamat,
      );  

      $simpan = $this->M_pegawai->save($data);
      
      if($simpan){
        $json = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'Data Saved'
          ]
        ];
      }else{
        $json = [
          'status'   => 500,
          'error'    => null,
          'messages' => [
              'error' => 'Failed'
          ]
        ];
      }
    
    }
    echo json_encode($json);
  }

  public function edit_pegawai($id){

    $nip            = $this->input->post('nip');
    $id_jabatan     = $this->input->post('id_jabatan');
    $nama           = $this->input->post('nama');
    $agama          = $this->input->post('agama');
    $telepon        = $this->input->post('telepon');
    $jenis_kelamin  = $this->input->post('jenis_kelamin');
    $alamat         = $this->input->post('alamat');

  if(!empty($nama)){
    $data = array(
      // Field => isi
      'nip'            => $nip,
      'id_jabatan'     => $id_jabatan,
      'nama'           => $nama,
      'agama'          => $agama,
      'telepon'        => $telepon,
      'jenis_kelamin'  => $jenis_kelamin,
      'alamat'         => $alamat,
      );  
      // Query ubah di model M_pegawai.php
      $simpan = $this->M_pegawai->update($id, $data);
      if($simpan){
        $json = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'Data Edited'
          ]
        ];
      }else{
        $json = [
          'status'   => 500,
          'error'    => null,
          'messages' => [
              'error' => 'Data Failed'
          ]
        ];
      }
    
    }
    echo json_encode($json);
  }

  public function delete_pegawai($id){

      if(!empty($id)){
        $hapus = $this->M_pegawai->delete($id);
        if($hapus){
          $json = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Deleted'
            ]
          ];
        }else{
          $json = [
            'status'   => 500,
            'error'    => null,
            'messages' => [
                'error' => 'Data Failed'
            ]
          ];
        }
      }
      echo json_encode($json);
  }
}