<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductModel extends Model
{

    public function all()
    {
        return $this->db->table('products')
                        ->order_by('created_at', 'DESC')
                        ->get_all();
    }


    public function find($id)
    {
        return $this->db->table('products')
                        ->where('id', $id)
                        ->get();
    }


    public function create($data)
    {
        return $this->db->table('products')
                        ->insert($data);
    }


    public function update($id, $data)
    {
        return $this->db->table('products')
                        ->where('id', $id)
                        ->update($data);
    }


    public function delete($id)
    {
        return $this->db->table('products')
                        ->where('id', $id)
                        ->delete();
    }

}