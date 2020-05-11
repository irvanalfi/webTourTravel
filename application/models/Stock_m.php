<?php defined('BASEPATH') or exit('No direct script access allowed');

class Stock_m extends CI_Model
{
    public function get_stock_in($id = null)
    {
        $this->db->select('t_stock.stock_id, p_item.barcode, p_item.item_id, p_item.name as item_name,
        supplier.name as supplier_name, qty, date, detail');
        $this->db->from('t_stock');
        $this->db->join('p_item', 't_stock.item_id = p_item.item_id');
        $this->db->join('supplier', 't_stock.supplier_id = supplier.supplier_id', 'left');
        $this->db->where('type', 'in');
        // $this->db->order_by('stock_id','desc');
        $query = $this->db->get();
        return $query;
    }

    public function add_stock_in($post)
    {
        $params = [
            'item_id'       => $post['item_id'],
            'type'          => 'in',
            'detail'        => $post['detail'],
            'supplier_id'   => $post['supplier'] == '' ? null : $post['supplier'],
            'qty'           => $post['qty'],
            'date'          => $post['date'],
            'user_id'       => $this->session->userdata('userid')
        ];
        $this->db->insert('t_stock', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['supplier_name'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'description' => empty($post['descript']) ? null : $post['descript'],
            'updated ' => date('Y-m-d  H:i:s')
        ];
        $this->db->where('supplier_id', $post['id']);
        $this->db->update('supplier', $params);
    }

    public function del($id)
    {
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
    }
}
