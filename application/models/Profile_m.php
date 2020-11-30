<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->from('profile_web');
        if ($id != null) {
            $this->db->where('profile_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['web_name']     = $post['webname'];
        $params['status_name']  = $post['statusname'];
        $params['about']        = $post['about'];
        $params['address1']     = $post['address1'];
        $params['address2']     = $post['address2'];
        $params['email1']       = $post['email1'];
        $params['email2']       = $post['email2'];
        $params['facebook']     = $post['facebook'];
        $params['instagram']    = $post['instagram'];
        $params['twitter']      = $post['twitter'];
        $params['youtube']      = $post['youtube'];
        $params['phone']        = $post['phone'];
        $params['whatsapp']     = $post['whatsapp'];
        $params['logo']         = $post['logo'];
        // $params['bannerutama'] = $post['bannerutama'];
        // $params['bannerumum']  = $post['bannerumum'];
        $params['web_version']  = $post['webversion'];
        $this->db->where('profile_id', $post['profile_id']);
        $this->db->update('profile_web', $params);
    }
}
