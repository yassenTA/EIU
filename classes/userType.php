<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userType
 *
 * @author mohamed
 */
include_once '../Queries/UserTypeQueries.php';
class userType {
    private $id;
    public $title;
    private $userTypeQueries;
    public function __construct($id) {
        $this->userTypeQueries=new UserTypeQueries();
        if($id !=''){
           $data=  $this->userTypeQueries->select_type($id);
           $this->title=$data['title'];
           $this->id=$data['id'];
           
       } 
    }
    
}
