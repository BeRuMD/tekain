<?php
Class Cat {
  public $name;
  public $sex;
public $age;
public $color = 'Blue';
public function age_check() {
  if($this->age<1){
    return $answer='негоден';
  }else {
    return $answer = 'годен';
  } 
}
