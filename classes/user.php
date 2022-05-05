<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author mohamed
 */
session_start();
include_once '../Queries/userQueries.php';
include_once 'userType.php';
class user {
    public $fname;
    public $lname;
    public $username;
    public $password;
    public $id;
    public $user_type;
    public $userQueries;
        function __construct($id) {
            $this->userQueries=new userQueries();
            if ($id !=''){
                $data=  $this->userQueries->select_user($id);
                $this->fname=$data['FName'];
                $this->lname=$data['LName'];
                $this->username=$data['username'];
                $this->password=$data['password'];
                $this->id=$data['Id'];
                $this->user_type=new userType($data['user_Type_id']);
        }
    }
    public function login($username,$password){
        $data=  $this->userQueries->login($username, $password);
        if(count($data)>0){
            $_session['id']=$data['id'];
            $_session['fname']=$data['fname'];
            
            
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
