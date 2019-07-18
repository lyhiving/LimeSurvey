<div class='menubar surveybar' id="rolemanagementbar">
    <div class='row'>
        <div class="col-md-9">
            <?php if(Permission::model()->hasGlobalPermission('superadmin', 'read')) { ?>
                <button data-href="<?=App()->createUrl("admin/roles/sa/editrolemodal")?>" data-toggle="modal" title="<?php eT('Add a new permission role'); ?>" class="btn btn-default RoleControl--action--openmodal">
                    <i class="fa fa-plus-circle text-success"></i> <?php eT("Add role"); ?>
                </button>
                <button data-href="<?=App()->createUrl("admin/roles/sa/importroles")?>" data-toggle="modal" title="<?php eT('Impot permission role from XML'); ?>" class="btn btn-default RoleControl--action--openmodal">
                    <i class="fa fa-upload text-success"></i> <?php eT("Import (XML)"); ?>
                </button>
                <button  data-href="<?=App()->createUrl("admin/roles/sa/exportusers")?>" data-toggle="modal" title="<?php eT('Export permission roles to XML'); ?>" class="btn btn-default RoleControl--action--openmodal">
                    <i class="fa fa-upload text-success"></i> <?php eT("Export (XML)");?>
                </button>
            <?php } ?>
        </div>
    </div>
</div>