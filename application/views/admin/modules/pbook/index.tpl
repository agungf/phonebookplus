<form name='search' action="{$base_url}admin/pbook/index/" method='post'>
<div class="row">
  <div class="col-lg-6 pull-right">
    <div class="input-group">
      <input name="searchTerm" type="text" class="form-control" placeholder="Search for Name">
      <span class="input-group-btn">
        <input type='submit'  name='search' value='Search' class="btn btn-default" type="button">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</form>
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
