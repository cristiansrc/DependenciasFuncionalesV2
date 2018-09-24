<div class="page-content">
    <div id="page-user-profile" class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="text-center mbl"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/oliveirasimoes/128.jpg" style="border: 5px solid #fff; box-shadow: 0 2px 3px rgba(0,0,0,0.25);" class="img-circle"></div>
                    </div>
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td width="50%">Usuario</td>
                                <td><?php echo $fname_user?> <?php echo $flast_name_user?></td>
                            </tr>
                            <tr>
                                <td width="50%">Correo</td>
                                <td><?php echo $mail_user?></td>
                            </tr>
                            <tr>
                                <td width="50%">Rol</td>
                                <td><span class="label label-success"><?php echo $name_rolle?></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-9">
                    <ul class="nav nav-tabs ul-edit responsive hidden-xs hidden-sm">
                        <li class="active"><a href="#tab-activity" data-toggle="tab"><i class="fa fa-bolt"></i>&nbsp; Participacion</a></li>
                        <!--li><a href="#tab-edit" data-toggle="tab"><i class="fa fa-edit"></i>&nbsp; Edit Profile</a></li>
                        <li><a href="#tab-messages" data-toggle="tab"><i class="fa fa-envelope-o"></i>&nbsp; Messages</a></li-->
                    </ul>
                    <div id="generalTabContent" class="tab-content">
                        <div id="tab-activity" class="tab-pane fade in active">
                            <ul class="list-activity list-unstyled">
                                <?php 
                                foreach($arrayCollaborator as $collaborator){
                                ?>
                                <li>
                                    <div class="body">
                                        <div class="desc"><strong class="mrs"><?php echo $collaborator->get('name_problem')?></strong>
                                            <br><small class="text-muted"><?php echo $collaborator->get('since_collaboration_problem')?></small></div>
                                        <div class="content">
                                            <p><?php echo $collaborator->get('description_problem')?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php 
                                }
                                ?>
                            </ul>
                        </div>
                        <div id="tab-edit" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="tab-content">
                                        <div id="tab-profile-setting" class="tab-pane fade in active">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">First Name</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" placeholder="first name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Last Name</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" placeholder="last name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Gender</label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="radio-list">
                                                            <label class="radio-inline">
                                                                <div class="iradio_minimal-grey checked" style="position: relative;">
                                                                    <input type="radio" value="0" name="gender" checked="checked" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp; Male
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="iradio_minimal-grey" style="position: relative;">
                                                                    <input type="radio" value="1" name="gender" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>&nbsp; Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Birthday</label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <input type="text" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" class="datepicker-normal form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Marital Status</label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option>Single</option>
                                                                    <option>Married</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Position</label>
                                                    <div class="col-sm-9 controls">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <select class="form-control">
                                                                    <option>CEO</option>
                                                                    <option>Director</option>
                                                                    <option>Manager</option>
                                                                    <option>Staff</option>
                                                                    <option>Office Boy</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">About</label>
                                                    <div class="col-sm-9 controls">
                                                        <textarea rows="3" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group mbn">
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9 controls">
                                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Save
                                                        </button>&nbsp; &nbsp;<a href="#" class="btn btn-default">Cancel</a></div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab-account-setting" class="tab-pane fade">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Email</label>
                                                        <div class="col-sm-9 controls">
                                                            <input type="email" placeholder="email@yourcompany.com" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Username</label>
                                                        <div class="col-sm-9 controls">
                                                            <input type="text" placeholder="username" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Password</label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <input type="password" placeholder="" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Confirm Password</label>
                                                        <div class="col-sm-9 controls">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <input type="password" placeholder="" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mbn">
                                                        <label class="col-sm-3 control-label"></label>
                                                        <div class="col-sm-9 controls">
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Save
                                                            </button>&nbsp; &nbsp;<a href="#" class="btn btn-default">Cancel</a></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="tab-contact-setting" class="tab-pane fade">
                                            <form action="#" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Mobile Phone</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" placeholder="0-123-456-789" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Website</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" placeholder="http://website.com" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Facebook</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Twitter</label>
                                                    <div class="col-sm-9 controls">
                                                        <input type="text" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group mbn">
                                                    <label class="col-sm-3 control-label"></label>
                                                    <div class="col-sm-9 controls">
                                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp; Save
                                                        </button>&nbsp; &nbsp;<a href="#" class="btn btn-default">Cancel</a></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active"><a href="#tab-profile-setting" data-toggle="tab"><i class="fa fa-folder-open"></i>&nbsp;
Profile Setting</a></li>
                                        <li><a href="#tab-account-setting" data-toggle="tab"><i class="fa fa-cogs"></i>&nbsp;
Account Setting</a></li>
                                        <li><a href="#tab-contact-setting" data-toggle="tab"><i class="fa fa-envelope-o"></i>&nbsp;
Contact Setting</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="tab-messages" class="tab-pane fade in">
                            <div class="row mbl">
                                <div class="col-lg-6"><span style="margin-left: 15px"></span>
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" title="Check All" class="checkall-email" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><a href="#" class="btn btn-success btn-sm mlm mrm"><i class="fa fa-send-o"></i>&nbsp;
Write Mail</a><a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash-o"></i>&nbsp;
Delete</a></div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-white">Search</button></span></div>
                                </div>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star text-yellow mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star text-yellow mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur </span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur </span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet,</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur </span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="icheckbox_minimal-grey" style="position: relative;">
                                        <input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet</span><span class="badge">12:10 AM</span><span class="pull-right mrl"><span class="glyphicon glyphicon-paperclip"></span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group responsive visible-xs visible-sm" id="collapse-undefined">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-undefined" href="#collapse-tab-activity"><i class="fa fa-bolt"></i>&nbsp;Activity</a></h4></div>
                            <div id="collapse-tab-activity" class="panel-collapse collapse in">
                                <div class="panel-body"></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-undefined" href="#collapse-tab-edit"><i class="fa fa-edit"></i>&nbsp;Edit Profile</a></h4></div>
                            <div id="collapse-tab-edit" class="panel-collapse collapse">
                                <div class="panel-body"></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#collapse-undefined" href="#collapse-tab-messages"><i class="fa fa-envelope-o"></i>&nbsp;
Messages</a></h4></div>
                            <div id="collapse-tab-messages" class="panel-collapse collapse">
                                <div class="panel-body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>