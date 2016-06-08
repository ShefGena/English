<?php

class About extends Model
{
    public function getInfo()
        {
            $sql = "SELECT content, title FROM `module` WHERE id = 1";
            return $this->db->query($sql);
        }
}