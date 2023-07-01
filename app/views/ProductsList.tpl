{extends file="main.tpl"}

{block name=top}
<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}productList">
	<legend>Search</legend>
	<fieldset>
		<input type="text" placeholder="manufacturer" name="sf_Manufacturer" value="{$searchForm->Manufacturer}" />
		<button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=list}
<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}productNew">+ New product</a>
</div>	
<br>
<b>Available products:</b>
<table id="tab_products" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>idProduct</th>
		<th>Manufacturer</th>
		<th>Model</th>
		<th>Type</th>
		<th>Price</th>
		<th>Description</th>
		<th>Options</th>
	</tr>
</thead>
<tbody>
{foreach $prod as $p}
{strip}
	<tr>
		<td>{$p["idProduct"]}</td>
		<td>{$p["Manufacturer"]}</td>
		<td>{$p["Model"]}</td>
		<td>{$p["Type"]}</td>
		<td>{$p["Price"]}</td>
		<td>{$p["Description"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}productEdit/{$p['idProduct']}">Edit  </a>
			
			<a class="button-small pure-button button-warning" href="{$conf->action_url}productDelete/{$p['idProduct']}">Delete  </a>
			
			<a class="button-small pure-button button-warning" href="{$conf->action_url}productBuy/{$p['idProduct']}">Buy</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
