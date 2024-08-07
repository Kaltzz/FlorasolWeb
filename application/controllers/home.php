<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
// class home dapat menggunakan method/function dari class CI_Controller

    function __construct(){
	
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');						
	}
    
    
    public function index(){
        $this->load->view('home');

    }
    

    public function order(){
        $this->load->model('order');
        $id = $this->session->userdata['data_user'][0]['id_user'];
        $data['cart'] = $this->order->getCart($id);
        $this->load->view('order', $data);
    }


    public function form(){
        $this->load->model('order');
        $id = $this->session->userdata['data_user'][0]['id_user'];
        $data['cart'] = $this->order->getCart($id);
        $this->load->view('form', $data);

    }

    public function beli(){
        $this->load->model('order');
        $this->order->ok();
        redirect('/home/order');
    }
    
    public function abs(){
        $this->load->view('abs');
    }


    // Menggunakan Konsep Enkapsulasi dengan acces modifier public
    public function pertamax(){
        $this->load->model('order');
        $this->order->pertamax_order();
        redirect('/home/order');
    }



    public function keranjang()
	{	
		
		//panggil modelS
		$this->load->model('order');
		$data['mhs'] = $this->order->getdatabbm();
		$data['title'] = 'dashboard';

		//panggil tampilan
		$this->load->view('order', $data);
	}

    public function admin(){
        $this->load->model('order');
		$abc = $this->order->transaksi();
        $data['apx'] = $abc;
        $this->load->view('admin/admin', $data);
        $this->load->view('component/stylebd');

    }

    public function hapus(){
        $this->load->model('order');
        $this->order->aksi_hapus();
        redirect('/home/order');

    }

    public function detail(){
        $this->load->model('order');
        $bcd = $this->order->detail();
        $data['apc'] = $bcd;

        $this->load->view('admin/admin2', $data);
        $this->load->view('component/stylebd');
    }


    public function mt(){
        $this->load->model('order');
        $this->order->mt_order();
        redirect('/home/order');
    }

    public function pertalite(){
        $this->load->model('order');
        $this->order->pertalite_order();
        redirect('/home/order');     
    }

    public function dexlite(){
        $this->load->model('order');
        $this->order->dexlite_order();
        redirect('/home/order');     
    }

    public function premium(){
        $this->load->model('order');
        $this->order->premium_order();
        redirect('/home/order');     
    }

    public function solar(){
        $this->load->model('order');
        $this->order->solar_order();
        redirect('/home/order');     
    }

    





}

?>
