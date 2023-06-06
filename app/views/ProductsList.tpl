{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}productList">
	<legend>Search</legend>
	<fieldset>
		<input type="text" placeholder="manufacturer" name="sf_manufacturer" value="{$searchForm->manufacturer}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Search</button>
	</fieldset>
</form>
</div>	

{/block}

{block name=list}

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}productNew">+ New product</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>idProduct</th>
		<th>manufacturer</th>
		<th>model</th>
		<th>type</th>
		<th>price</th>
	</tr>
</thead>
<tbody>
{foreach $products as $p}
{strip}
	<tr>
		<td>{$p["idProduct"]}</td>
		<td>{$p["manufacturer"]}</td>
		<td>{$p["model"]}</td>
		<td>{$p["type"]}</td>
		<td>{$p["price"]}</td>
		<td>
			<a class="button-small pure-button button-secondary" href="{$conf->action_url}productEdit/{$p['idProduct']}">Edit</a>
			&nbsp;
			<a class="button-small pure-button button-warning" href="{$conf->action_url}productDelete/{$p['idProduct']}">Delete</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
