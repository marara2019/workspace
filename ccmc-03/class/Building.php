<?php
class Building{
    //properties
    protected $name; //建物名
    protected $height;//建物の高さ
    //constructor
    function __construct(string $name, int $height){
        $this->name = $name;
        $this->height= $height;
    }
    //accesor methods
    function getName():string{
        return $this->name;
    }
    function setName(string $name){
        $this->name =$name;
    }
    function getAge():int{
        return $this->height;
    }
    function setAge(int $height){
        $this->height =$height;
    }
    //method
    function getProfile():string{
        $profile ="{$this->name}nの高さは {$this->height} mです。";
        return $profile;
    }
}
?>