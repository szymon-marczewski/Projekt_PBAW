{extends file="main.tpl"}

{block name=top}
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}productList">
	<legend>Search</legend>
	<fieldset>
		<input type="text" placeholder="manufacturer" name="sf_Manufacturer" value="{$searchForm->Manufacturer}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=list}
<b>Your orders:</b>
<table id="tab_products" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>idOrder</th>
		<th>Date</th>
		<th>Status</th>
		<th>Description</th>
	</tr>
</thead>
<tbody>
{foreach $ord as $o}
{strip}
	<tr>
		<td>{$o["idOrder"]}</td>
		<td>{$o["Date"]}</td>
		<td>{$o["Status"]}</td>
		<td>{$o["Description"]}</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}