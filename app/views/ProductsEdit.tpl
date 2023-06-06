{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form action="{$conf->action_root}productSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>New product</legend>
		<div class="pure-control-group">
            <label for="idProduct">idProduct</label>
            <input id="idProduct" type="text" placeholder="idProduct" name="idProduct" value="{$form->idProduct}">
        </div>
		<div class="pure-control-group">
            <label for="manufacturer">manufacturer</label>
            <input id="manufacturer" type="text" placeholder="manufacturer" name="manufacturer" value="{$form->manufacturer}">
        </div>
		<div class="pure-control-group">
            <label for="model">model</label>
            <input id="model" type="text" placeholder="model" name="model" value="{$form->model}">
        </div>
        <div class="pure-control-group">
            <label for="type">type</label>
            <input id="type" type="text" placeholder="type" name="type" value="{$form->type}">
        </div>
        <div class="pure-control-group">
            <label for="price">price</label>
            <input id="price" type="text" placeholder="price" name="price" value="{$form->price}">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Save"/>
			<a class="pure-button button-secondary" href="{$conf->action_root}productList">Back</a>
		</div>
	</fieldset>
</form>	
</div>

{/block}
