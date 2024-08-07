<?php
class order extends CI_model{

function __construct(){

    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
}

public function pertamax_order(){
    $this->load->database();

    $jumlah = $this->input->post('jumlah');
    $user = $this->session->userdata['data_user'][0]['id_user'];

    $sql = "INSERT INTO keranjang(user_id, nama_barang, jumlah, harga_satuan) VALUES ($user, 'Pertamax', '$jumlah', 12000)";
    $sql2 = "INSERT INTO transaksi_detail (user_id, nama_produk, jumlah, harga ) VALUES ($user, 'Pertamax', '$jumlah', 12000)";
    $this->db->query($sql);
    $this->db->query($sql2);
    return;
}

public function mt_order(){
    $this->load->database();

    $jumlah = $this->input->post('jumlah');
    $user = $this->session->userdata['data_user'][0]['id_user'];

    $sql = "INSERT INTO keranjang(user_id, nama_barang, jumlah, harga_satuan) VALUES ($user, 'Minyak_tanah', '$jumlah', 7000)";
    $sql2 = "INSERT INTO transaksi_detail (user_id, nama_produk, jumlah, harga ) VALUES ($user, 'Minyak_tanah', '$jumlah', 7000)";
    $this->db->query($sql);
    $this->db->query($sql2);

    return;
}

public function pertalite_order(){
    $this->load->database();

    $jumlah = $this->input->post('jumlah');
    $user = $this->session->userdata['data_user'][0]['id_user'];

    $sql = "INSERT INTO keranjang(user_id, nama_barang, jumlah, harga_satuan) VALUES ($user, 'Pertalite', '$jumlah', 9000)";
    $sql2 = "INSERT INTO transaksi_detail (user_id, nama_produk, jumlah, harga ) VALUES ($user, 'Pertalite', '$jumlah', 9000)";
    $this->db->query($sql2);
    $this->db->query($sql);
    return;
}

public function dexlite_order(){
    $this->load->database();

    $jumlah = $this->input->post('jumlah');
    $user = $this->session->userdata['data_user'][0]['id_user'];

    $sql = "INSERT INTO keranjang(user_id, nama_barang, jumlah, harga_satuan) VALUES ($user, 'Dexlite', '$jumlah', 10000)";
    $sql2 = "INSERT INTO transaksi_detail (user_id, nama_produk, jumlah, harga ) VALUES ($user, 'Dexlite', '$jumlah', 10000)";
    $this->db->query($sql);
    $this->db->query($sql2);

    return;
}

public function premium_order(){
    $this->load->database();

    $jumlah = $this->input->post('jumlah');
    $user = $this->session->userdata['data_user'][0]['id_user'];

    $sql = "INSERT INTO keranjang(user_id, nama_barang, jumlah, harga_satuan) VALUES ($user, 'Premium', '$jumlah', 8000)";
    $sql2 = "INSERT INTO transaksi_detail (user_id, nama_produk, jumlah, harga ) VALUES ($user, 'Premium', '$jumlah', 8000)";
    $this->db->query($sql);
    $this->db->query($sql2);

    return;
}

public function solar_order(){
    $this->load->database();

    $jumlah = $this->input->post('jumlah');
    $user = $this->session->userdata['data_user'][0]['id_user'];

    $sql = "INSERT INTO keranjang(user_id, nama_barang, jumlah, harga_satuan) VALUES ($user, 'Solar', '$jumlah', 7000)";
    $sql2 = "INSERT INTO transaksi_detail (user_id, nama_produk, jumlah, harga ) VALUES ($user, 'Solar', '$jumlah', 7000)";
    $this->db->query($sql);
    $this->db->query($sql2);

    return;
}

public function getdatabbm(){
    $this->load->database();

    $sql = "SELECT * FROM keranjang";
    $hasil = $this->db->query($sql);
    $data = $hasil->result_array();

    return $data;
}

public function getCart($id){
    $lht = "SELECT user_id, nama_barang, jumlah, harga_satuan FROM keranjang WHERE user_id=$id";
    $dataraw = $this->db->query($lht);
    $data = $dataraw->result_array();
    return $data;
}

public function ok(){
    $this->load->database();
    $user = $this->session->userdata['data_user'][0]['id_user'];
    $totalfixbanget = $this->session->userdata['data_user'][0]['total'];
    $foto = $this->input->post('bukti');
    $nama_gambar = $_FILES['bukti']['name'];
    $this->load->helper('form');
    //konfig upload:
    $config['upload_path'] = './images/bukti';
    $config['allowed_types'] = '.gif|jpg|png';
    //masukkan config ke library
    $this->load->library('upload', $config);
    //upload gambar
    $this->upload->do_upload('bukti');
    $sql = "INSERT INTO transaksi (username, jumlah ,bukti) 
    VALUES ('$user','$totalfixbanget' ,'$nama_gambar')"; 
    $sql2 = "DELETE FROM keranjang WHERE user_id = '$user' ";
    $this->db->query($sql);
    $this->db->query($sql2);

}

public function transaksi(){
    $this->load->database();

    //buat query
    $sql = "SELECT * FROM transaksi";

    //eksekusi query
    $hasil = $this->db->query($sql);
    //jabarkan hasil query
    $data = $hasil->result_array();
    

    //echo '<pre>'; print_r($data); echo '</pre>';die();
    return $data;
}

public function detail(){
    $this->load->database();

    //buat query
    $sql = "SELECT * FROM transaksi_detail";

    //eksekusi query
    $hasil = $this->db->query($sql);
    //jabarkan hasil query
    $data = $hasil->result_array();
    

    //echo '<pre>'; print_r($data); echo '</pre>';die();
    return $data;
}

public function aksi_hapus(){
    $this->load->database();
    $user = $this->session->userdata['data_user'][0]['id_user'];
    $sql = "DELETE FROM keranjang WHERE user_id = '$user' ";
    $sql2 = "DELETE FROM  transaksi_detail WHERE user_id = '$user'";
    $this->db->query($sql);
    $this->db->query($sql);
}




}
