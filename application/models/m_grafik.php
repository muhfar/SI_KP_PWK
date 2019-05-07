<?php
    class M_grafik extends CI_Model{
        public function GetProvinsi(){
            $query=$this->db->query("select * from provinsi;");
            return $query;
        }
    }
?>