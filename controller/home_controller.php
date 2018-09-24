<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class home_controller extends app_controller {
    protected $name_controller = 'home';
    
    public function init() {
        $this->scriptsValidateForms();
        
        
        $vars['problems'] = '';
        
        $this->includeViewController('home', $vars);
    }
    
    public function addProblem(){
        $this->sessionStart();
        $form = $this->instanceForm('', 'problem', 'Add problem', 'blue', 'home/saveProblem.html');
        
        $franchise_helper = new HelperDb("franchise");
        $franchises = $franchise_helper->selectObj();

        $form->input('Name', 'name_problem', Form::$valid_required);
        $form->textArea('Description', 'description_problem', Form::$valid_required);
        $form->hidden('place_problem', $_POST['latLng']);
        $form->hidden('id_user', $_SESSION['id_user']);
        $form->input("Card Number", 'cardnumber', Form::$valid_number . Form::$valid_required);
        $form->input("Expiration month of the card", 'expiration_moth', Form::$valid_number . Form::$valid_required, "", 2, 2);
        $form->input("Expiration date of the card", 'expiration_year',  Form::$valid_number . Form::$valid_required);
        $form->select("Franquicia", "id_franchise", "name_franchise", $franchises, Form::$valid_required);
        $form->input('Money contributed problem', 'money_contributed_problem', Form::$valid_number . Form::$valid_required);
        
        $vars['form'] = $form;
        $vars['titulo'] = "Problema";
        $this->includeView('formulario', $vars);
    }
    
    public function saveProblem(){
        $this->sessionStart();
        $this->save();
    }
}