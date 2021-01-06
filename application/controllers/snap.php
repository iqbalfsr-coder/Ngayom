<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-apjF26jrs42Y3gUpbJhL0e-O', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function checkout()
	{
		$this->load->view('checkout/index');
	}
	public function account()
	{
		$this->load->view('home/account');
	}

	public function token()
	{
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$total_h = $this->input->post('total_h');
		$qty_p =  $this->input->post('qty_p');
		$email =  $this->input->post('email');
		$nama_p =  $this->input->post('nama_p');
		$sub_totall = $this->input->post('sub_totall');
		$ong = $this->input->post('ong');

		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $total_h // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $sub_totall,
			'quantity' => $qty_p,
			'name' => "$nama_p"
		);

		// Optional
		$item2_details = array(
			'id' => 'a2',
			'price' => $ong,
			'quantity' => 1,
			'name' => "Ongkir"
		);

		// Optional
		$item_details = array($item1_details, $item2_details);

		// Optional
		$billing_address = array(
			'first_name'    => "$nama",
			'address'       => "$alamat",
			'phone'         => "$no_hp ",
			'country_code'  => 'IDN'
		);

		// Optional
		$shipping_address = array(
			'first_name'    => "$nama",
			'address'       => "$alamat",
			'phone'         => "$no_hp ",
			'country_code'  => 'IDN'
		);

		// Optional
		$customer_details = array(
			'first_name'    => "$nama",
			'email'         => "$email",
			'phone'         => "$no_hp ",
			'billing_address'  => $billing_address,
			'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'minute',
			'duration'  => 2
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'), true);
		$data = [
			'id_order' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]['bank'],
			'va_number' => $result['va_numbers'][0]['va_number'],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'id_member' => $this->input->post('id_member')
		];

		$save = $this->db->insert('transaksi', $data);
		if ($save) {
			echo 'Sukses';
			redirect('home/account');
		} else {
			echo 'Gagal';
		}
	}
}
