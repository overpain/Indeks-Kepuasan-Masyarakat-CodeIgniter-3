<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PollingController extends CI_Controller
{
    function GetMAC()
    {
        ob_start();
        system('getmac');
        $Content = ob_get_contents();
        ob_clean();
        return substr($Content, strpos($Content, '\\') - 20, 17);
    }

    public function index($id)
    {
        if ($id != null && $id == 1 || $id == 2 || $id == 3) {
            $ip = getenv('HTTP_CLIENT_IP') ?:
                getenv('HTTP_X_FORWARDED_FOR') ?:
                getenv('HTTP_X_FORWARDED') ?:
                getenv('HTTP_FORWARDED_FOR') ?:
                getenv('HTTP_FORWARDED') ?:
                getenv('REMOTE_ADDR');
            $this->load->model('Polling');

            $data = array(
                'polling' => $id,
                'tanggal' => date('Y-m-d H:i:s'),
                'mac_address' => $this->GetMAC()
            );
            // var_dump($data);
            // die;
            $insert = $this->Polling->save($data);
            if ($insert) {
                $this->load->view('ikm/ikmdone', $data);
            } else {
                $this->load->view('ikm/ikmdone', $data);
            }
        } else {
            echo 'error';
        }
    }
}
