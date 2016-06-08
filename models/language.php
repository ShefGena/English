<?php

class Language extends Model
{
    public function getInfoFrance()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 1";
        return $this->db->query($sql);
    }

    public function getInfoGerman()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 1";
        return $this->db->query($sql);
    }

    public function getInfoSpain()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 1";
        return $this->db->query($sql);
    }

    public function getInfoChildren()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 2";
        return $this->db->query($sql);
    }

    public function getInfoTeen()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 3";
        return $this->db->query($sql);
    }

    public function getInfoAdults()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 4";
        return $this->db->query($sql);
    }

    public function getInfoSpecial()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 8";
        return $this->db->query($sql);
    }

    public function getInfoGrammar()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 6";
        return $this->db->query($sql);
    }

    public function getInfoVideoclub()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 5";
        return $this->db->query($sql);
    }

    public function getInfoSpeaking()
    {
        $sql = "SELECT content, title FROM `module` WHERE id = 7";
        return $this->db->query($sql);
    }


}