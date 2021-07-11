<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Polling extends CI_Model
{
    public function save($data)
    {
        $this->db->insert('polling', $data);
    }

    public function cek_polling()
    {
        return $this->db->select('mac_address')->get('polling')->row();
    }

    public function graph($date_start = null, $date_ended = null)
    {
        $get = null;
        if (!empty($date_start) && !empty($date_ended)) {
            $get = "where tanggal BETWEEN '$date_start 'and '$date_ended' ";
        }
        $data = $this->db->query("SELECT count(polling) as total_pol FROM `polling` $get GROUP BY polling");
        return $data->result();
    }
}
