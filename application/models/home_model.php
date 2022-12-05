<?php

class home_model extends CI_Model
{

    public function get_all_featured_product()
    {
        $this->db->select('*,products.pStatus');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pStatus', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();
    }
    public function get_all_new_product(){
        $this->db->select('*,products.pStatus');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pStatus', 1);
        $this->db->limit(4);
        $info = $this->db->get();
        return $info->result();

    }
    public function get_all_product()
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pStatus', 1);
        $info = $this->db->get();
        return $info->result();
    }
    public function get_single_product($id)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pId', $id);
        $info = $this->db->get();
        return $info->result();
    }
    public function get_all_category()
    {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('cStatus', 1);
        $info = $this->db->get();
        return $info->result();
    }
    public function get_all_product_by_cat($id)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pStatus', 1);
        $this->db->where('categories.cId', $id);
        $info = $this->db->get();
        return $info->result();
    }
    public function get_product_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pStatus', 1);
        $this->db->where('products.pId', $id);
        $info = $this->db->get();
        return $info->row();
    }
    public function get_all_search_product($search)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pStatus', 1);
        $this->db->like('products.pName', $search, 'both');
        $this->db->or_like('products.pCompany', $search, 'both');
        $this->db->or_like('categories.cName', $search, 'both');
        $info = $this->db->get();
        return $info->result();
    }
    public function get_all_product_pagi($limit,$offset)
    {
        $this->db->select('*');
        $this->db->from('products');
        $this->db->join('categories', 'categories.cId=products.categoryId');
        // $this->db->join('models', 'models.productId=products.pId');
        $this->db->order_by('products.pId', 'DESC');
        $this->db->where('products.pStatus', 1);
        $this->db->limit($limit,$offset);
        $info = $this->db->get();
        return $info->result();
    }
}