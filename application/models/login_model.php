<?php

class login_model extends CI_model
{


    public function cek_login()
    {
        $this->load->database();


        $uname = $_POST['username'];
        $passwd = $_POST['password'];

        //query tangkap
        $sql1 = "SELECT * FROM admin WHERE username = '$uname'  AND password= '$passwd' ";
        $sql2 = "SELECT * FROM user WHERE username = '$uname'  AND password= '$passwd' ";

        //eksekusi query d atas

        $hasil1 = $this->db->query($sql1);
        $hasil2 = $this->db->query($sql2);
        // echo'<pre>'; print_r($hasil1); echo '</pre>'; die();


        if ($hasil1->num_rows() == 1) {
            //    header("Location: admin/index.php");
            $data = $hasil1->result_array();
            $this->session->set_userdata('data_user', $data);
            redirect('home/admin');
        } elseif ($hasil2->num_rows() == 1) {
            $data = $hasil2->result_array();
            $this->session->set_userdata('data_user', $data);
            redirect('home');
            //    header("Location: index.php");
        } else {
            echo 'User tidak Valid <a href= "login.php">Ulangi Lagi</a>';
        }
    }

    public function tambah_user(){
        $this->load->database();
        $uname = $_POST['username'];
        $passwd = $_POST['password'];
        $nik = $_POST['NIK'];

        $sql = "INSERT INTO user(username, nik, password ) VALUES('$uname', '$nik', '$passwd')";
        $this->db->query($sql);

    }
}
