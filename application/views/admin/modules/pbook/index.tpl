<form action="{$base_url}admin/pbook/delete" method="POST">
    <table cellspacing="0" cellpadding="4" border="0" class="table">
        <thead>
            <tr>
                <th> <input type="checkbox" value=""/> </th>
                <th> Id </th>
                <th> Name </th>
                <th> Email </th>
                <th> Phone </th>
                <th> Note </th>
                <th> Date </th>
            </tr>
        </thead>
        <tbody>

            {foreach from=$messages item=message name="outer"}
                <tr>
                    <td> <input type="checkbox" name="id[]" value="{$message->getId()}"/> </td>
                    <td> {$message->getId()} </td>
                    <td> {$message->getName()} </td>
                    <td> {$message->getEmail()} </td>
                    <td> {$message->getPhone()} </td>
                    <td> {$message->getNote()|truncate:80} </td>
                    <td> {$message->getTime()|date_format} </td>
                    <td> <a href="{$base_url}admin/pbook/edit/{$message->getId()}">View/Edit</a> </td>
                </tr>
            {/foreach}

        </tbody>
    </table>       
<br />
<div class="clear">
    <ul class="pagination">
        {$pagination_helper->create_links()}&nbsp;
    <ul>
</div>
<input type="submit" name="delete" value="Delete selected" class="btn btn-danger" />
<a href="{$base_url}admin/pbook/add" class="btn btn-success">Ad New</a>
</div>
</form> 