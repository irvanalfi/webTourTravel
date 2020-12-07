<?php defined('BASEPATH') or exit('No direct script access allowed');

class Contact_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('contact');
        if ($id != null) {
            $this->db->where('contact_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'title'         => $post['title'],
            'image'         => $post['image'],
            'content'       => $post['content'],
            'writer'        => $post['writer']
        ];
        $this->db->insert('contact', $params);
    }

    public function edit($post)
    {
        $params = [
            'title'         => $post['title'],
            'image'         => $post['image'],
            'content'       => $post['content'],
            'writer'        => $post['writer'],
            'updated '      => date('Y-m-d  H:i:s')
        ];
        $this->db->where('contact_id', $post['id']);
        $this->db->update('contact', $params);
    }

    public function del($id)
    {
        $this->db->where('contact_id', $id);
        $this->db->delete('contact');
    }
}
