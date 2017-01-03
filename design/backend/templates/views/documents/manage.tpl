{capture name="mainbox"}

    {assign var="r_url" value=$config.current_url|escape:url}

<form action="{""|fn_url}" method="post" name="manage_documents_form" id="manage_documents_form">
    <input type="hidden" name="return_url" value="{$config.current_url}">
    <div class="items-container" id="documents_list">
        {if $documents}
            <table width="100%" class="table table-middle table-objects">
                <thead>
                <tr>
                    <th class="left" width="1%">
                        {include file="common/check_items.tpl"}
                    </th>
                    <th width="60%">{__("name")}</th>
                    <th width="30%">{__("code")}</th>
                    <th width="5%">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                {foreach from=$documents item="document"}
                    <tr class="cm-row-item">
                        <td class="left">
                            <input type="checkbox" name="document_id[]" value="{$document->getId()}" class="checkbox cm-item" />
                        </td>
                        <td>
                            <div class="object-group-link-wrap">
                                <a href="{"documents.update?document_id=`$document->getId()`"|fn_url}">{$document->getName()}</a>
                            </div>
                        </td>
                        <td>
                            <span class="block">{$document->getType()}.{$document->getCode()}</span>
                        </td>
                        <td class="nowrap">
                            <div class="hidden-tools">
                                {capture name="tools_list"}
                                    <li>{btn type="list" text=__("edit") href="documents.update?document_id=`$document->getId()`"}</li>
                                    <li>{btn type="text" text=__("export") href="documents.export?document_id=`$document->getId()`" method="POST"}</li>
                                {/capture}
                                {dropdown content=$smarty.capture.tools_list}
                            </div>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}
    <!--documents_list--></div>
</form>
{/capture}

{capture name="import_form"}
    <div class="install-addon">
        <form action="{""|fn_url}" method="post" class="form-horizontal form-edit" name="import_documents" enctype="multipart/form-data">
            <div class="install-addon-wrapper">
                <img class="install-addon-banner" src="{$images_dir}/addon_box.png" width="151" height="141" />
                {include file="common/fileuploader.tpl" var_name="filename[]" allowed_ext="xml"}
            </div>
            <div class="buttons-container">
                {include file="buttons/save_cancel.tpl" but_text=__("import") but_name="dispatch[documents.import]" cancel_action="close"}
            </div>
        </form>
    </div>
{/capture}
{include file="common/popupbox.tpl" text=__("import") content=$smarty.capture.import_form id="import_form"}

{capture name="buttons"}
    {capture name="tools_items"}
        <li>{btn type="list" text=__("export_selected") dispatch="dispatch[documents.export]" form="manage_documents_form"}</li>
        <li>{include file="common/popupbox.tpl" id="import_form" link_text=__("import") act="link" link_class="cm-dialog-auto-size" content="" general_class="action-btn"}</li>
    {/capture}

    {dropdown content=$smarty.capture.tools_items}
{/capture}

{include file="common/mainbox.tpl" title=__("documents") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons sidebar=$smarty.capture.sidebar}
