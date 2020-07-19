<?php

class Product_model extends CI_Model
{

    public $tableName = "products";

    public function __construct()
    {
        parent::__construct();

    }

    public function getData($rowno,$rowperpage,$search="") {

        $this->db->select('*');
        $this->db->from('products');

        if($search != ''){
            $this->db->like('title', $search);
            $this->db->or_like('description', $search);
        }

        $this->db->limit($rowperpage, $rowno);
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getrecordCount($search = '') {

        $this->db->select('count(*) as allcount');
        $this->db->from('products');

        if($search != ''){
            $this->db->like('title', $search);
            $this->db->or_like('description', $search);
        }

        $query = $this->db->get();
        $result = $query->result_array();

        return $result[0]['allcount'];
    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    public function get_all($where = array(), $order = "id ASC", $limit = null)
    {
        return $this->db->where($where)->order_by($order)->limit($limit)->get($this->tableName)->result();
    }

    public function get_records($limit, $start)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->tableName);

        return $query->result();
    }

    public function get_count()
    {
        return $this->db->count_all($this->tableName);
    }

    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }

}
