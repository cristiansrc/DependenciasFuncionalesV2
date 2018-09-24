    <div class="clearfix"></div>
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll" style="height: auto;">
               <ul id="side-menu" class="nav">
                   <li class="user-panel">
                       <div class="thumb"><img src="https://scontent.fbog4-1.fna.fbcdn.net/v/t31.0-8/23456269_10210249859505179_3810065334641398327_o.jpg?_nc_cat=105&oh=84aa233385b258c10bec4c5fcda7962f&oe=5C22A3D4" alt="" class="img-circle"></div>
                       <div class="info">
                           <p>Cristhiam Reina</p>
                           <ul class="list-inline list-unstyled">
                               <li><a href="<?php echo _APPLICACION_URL?>profile.html" data-hover="tooltip" title="" data-original-title="Profile"><i class="fa fa-user"></i></a></li>
                               <li><a href="<?php echo _APPLICACION_URL?>login/exitSession.html" data-hover="tooltip" title="" data-original-title="Salir"><i class="fa fa-sign-out"></i></a></li>
                           </ul>
                       </div>
                       <div class="clearfix"></div>
                   </li>
               <li class="<?php echo ($this->name_controller === "home") ? "active": ""?>"><a href="<?php echo _APPLICACION_URL?>"><i class="fa fa-tachometer fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Home</span></a></li>
               
               </ul>
           </div>           
        </nav>  
    
    
      <!--END CHAT FORM--><!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <!--div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title"><?php echo $titulo?></div>
                    
                </div>
                <ol class="breadcrumb page-breadcrumb">
                    <?php 
                    foreach ($breadcrumb as $arr) {    
                        if($arr['url'] !== ''){
                    ?>
                    <li>
                        <a href="<?php echo (_APPLICACION_URL . $arr['url'])?>"><?php echo $arr['label']?></a>&nbsp;&nbsp;
                        <i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                    </li>
                    
                    <?php 
                        }else{
                        ?>
                        <li class="active"><?php echo $arr['label']?></li>
                        <?php
                        }
                    }
                    ?>
                </ol>
                <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i
                        class="fa fa-angle-down"></i><input type="hidden" name="datestart"/><input type="hidden"
                                                                                                   name="endstart"/>
                </div>
                <div class="clearfix"></div>
            </div-->