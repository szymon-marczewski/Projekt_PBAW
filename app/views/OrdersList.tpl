{extends file="main.tpl"}
{block name=top}
<br>
{/block}
{block name=list}
<b>Your orders:</b>
<table id="tab_products" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>idOrder</th>
		<th>Manufacturer</th>
		<th>Model</th>
		<th>Type</th>
		<th>Price</th>
		<th>Amount</th>
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
		<td>{$o["Manufacturer"]}</td>
		<td>{$o["Model"]}</td>
		<td>{$o["Type"]}</td>
		<td>{$o["Price"]}</td>
		<td>{$o["Amount"]}</td>
		<td>{$o["Date"]}</td>
		<td>{$o["Status"]}</td>
		<td>{$o["Description"]}</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{/block}
