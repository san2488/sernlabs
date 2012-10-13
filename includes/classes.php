<?php

class Page {
    private $Title;
    private $Link;
    
    public function get_Title(){
        return $this->Title;
    }
    
    public function set_Title($val){
        $this->Title = $val;
    }
    
    public function get_Link(){
        return $this->Link;
    }
    
    public function set_Link($val){
        $this->Link = $val;
    }
    
    public function __construct($xmlFilePath){
        $page = simplexml_load_file($xmlFilePath);
        
        $this->Title = $page->title;
        $this->Link = $page->attributes()->url;
    }
}

?>
