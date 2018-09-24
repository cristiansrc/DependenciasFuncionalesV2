<?php

class userProfile_controller extends app_controller {
    protected $name_controller = 'userProfile';

    
    public function init(){
        $this->sessionStart();
        $id_user = $_GET[0];
        $modelUser = new Model("user", $id_user, false);
        $modelRoll = new Model("rolle_user", $modelUser->get("id_rolle"));
        $daoViewCollborator = new DaoDb("view_user_callborator_problema");
        $objsViewCollaborator = $daoViewCollborator->selectObj(false, " and id_user = " . $id_user);
        
        $vars = [];
        $vars["flast_name_user"] = $modelUser->get("flast_name_user");
        $vars["fname_user"] = $modelUser->get("fname_user");
        $vars["id_rolle"] = $modelUser->get("id_rolle");
        $vars["id_user"] = $modelUser->get("id_user");
        $vars["mail_user"] = $modelUser->get("mail_user");
        $vars["slast_name"] = $modelUser->get("slast_name");
        $vars["sname_user"] = $modelUser->get("sname_user");
        $vars["name_rolle"] = $modelUser->get("name_rolle");
        $vars["arrayCollaborator"] = $objsViewCollaborator;
        
        $this->includeViewController('profile',$vars);

    }
}
