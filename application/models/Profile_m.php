<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('profil');
        if ($id != null) {
            $this->db->where('profil_id', $id);
        }
        $query = $this->db->where('status', 'Y')->get();
        return $query;
    }

    public function add($post)
    {
        $params['web_name']     = $post['webName'];
        $params['status_name']  = $post['statusName'];
        $params['about']        = $post['about'];
        $params['address1']     = $post['address1'];
        $params['address2']     = $post['address2'];
        $params['email1']       = $post['email1'];
        $params['email2']       = $post['email2'];
        $params['facebook']     = $post['facebook'];
        $params['instagram']    = $post['instagram'];
        $params['twitter']      = $post['twitter'];
        $params['phone']        = $post['phone'];
        $params['whatsapp']     = $post['whatsapp'];
        $params['logo']         = $post['logo'];
        $params['banner_utama'] = $post['banner_utama'];
        $params['banner_umum']  = $post['banner_umum'];
        $this->db->insert('profil', $params);
    }

    public function edit($post)
    {
        $params['web_name']     = $post['webName'];
        $params['status_name']  = $post['statusName'];
        $params['about']        = $post['about'];
        $params['address1']     = $post['address1'];
        $params['address2']     = $post['address2'];
        $params['email1']       = $post['email1'];
        $params['email2']       = $post['email2'];
        $params['facebook']     = $post['facebook'];
        $params['instagram']    = $post['instagram'];
        $params['twitter']      = $post['twitter'];
        $params['phone']        = $post['phone'];
        $params['whatsapp']     = $post['whatsapp'];
        $params['logo']         = $post['logo'];
        $params['banner_utama'] = $post['banner_utama'];
        $params['banner_umum']  = $post['banner_umum'];
        $this->db->where('profil_id', $post['profil_id']);
        $this->db->update('profil', $params);
    }
}
