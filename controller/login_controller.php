<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author crist
 */

class login_controller extends Controller {
    //put your code here
    protected $name_controller = 'login';
    
    public function init() {
        $this->login();
    }
    
    public function login(){
        if(defined('_TEMPLATE_SCRIPTS') === FALSE){
            define('_TEMPLATE_SCRIPTS', _APPLICACION_URL . 'template/app/');
        }
        $this->includeView('form');
    }
    
    public function initSession(){
        die("llegue");
        $dao = new DaoDb('user', true);
        $objs = $dao->selectObj(true, ' and mail_user = "' . $_POST['mail_user'] . '" and pass_user = "' . $_POST['pass_user'] . '"');
        $array = array();
        $array["respuesta"] = "Si";
        
        if(count($objs) > 0){
            $obj = $objs[0];
            $array["respuesta"] = "Si";
            $_SESSION['id_user']         = $obj->get('id_user');
            $_SESSION['fname_user']     = $obj->get('fname_user');
            $_SESSION['sname_user']      = $obj->get('sname_user');
            $_SESSION['flast_name_user']      = $obj->get('flast_name_user');
            $_SESSION['mail_user']    = $obj->get('mail_user');
            $_SESSION['pass_user']    = $obj->get('pass_user');
            $_SESSION['id_rolle']    = $obj->get('id_rolle');
            $_SESSION['slast_name']     = $obj->get('slast_name');
            $_SESSION['id_sucursal']        = $obj->get('id_sucursal');

        }else{
            $array["respuesta"] = "No";
        }
        
        echo json_encode($array);
    }
    
    public function exitSession(){
        session_destroy();
        redirectInter();
    }
}