{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}"/>
		</div>

        <div class="pure-control-group">
			<label for="id_mail">mail: </label>
			<input id="id_mail" type="text" name="email" value="{$form->email}"/>
		</div>

        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" value="{$form->pass}">
		</div>
		<div class="pure-controls">
			<input type="submit" value="login" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
{/block}
