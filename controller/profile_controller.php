<?php

class profile_controller extends app_controller {
    protected $name_controller = 'profile';
    
    public function init() {
        $this->sessionStart();
        $daoRoll = new DaoDb("rolle_user");
        $obj = $daoRoll->selectObj(false, " and id_rolle = " . $_SESSION['id_rolle']);
        
        $daoViewCollborator = new DaoDb("view_user_callborator_problema");
        $objsViewCollaborator = $daoViewCollborator->selectObj(false, " and id_user = " . $_SESSION['id_user']);
        $vars = $_SESSION;
        $vars["name_rolle"] = $obj[0]->get('name_rolle');
        $vars["arrayCollaborator"] = $objsViewCollaborator;
        $this->includeViewController('profile',$vars);
    }
    
    public function userProfile(){
        $this->sessionStart();
        $id_user = $_GET[0];
        $modelUser = new Model("user", $id_user, false);
        $modelRoll = new Model("rolle_user", $modelUser->get("id_rolle"));
        $daoViewCollborator = new DaoDb("view_user_callborator_problema");
        $objsViewCollaborator = $daoViewCollborator->selectObj(false, " and id_user = " . $id_user);
        
        
    }
}
