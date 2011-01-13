<form action="<?=$this->url?>/user/keep" id="formKeep"  method="post">
	
	<?=$this->formHidden( 'id' , $this->data->id )?>
	<?=$this->formHidden( 'user' , $this->data->user )?>
	<label>Nome:</label>
	<input type="text" id="name" name="name" value="<?=$this->data->name?>" />
		
	<label>Senha:</label>
	<input type="password" id="pass" name="pass" />
	
	<label>Repita a senha:</label>
	<input type="password" id="rpass"/>
	
	<br /><br />
	
	<input id="submitContent" type="submit" value="Salvar" />
	
</form>
<script>
	var validate = new Validate();
	
	validate.addValidate( "name" , validate.isnull , "Campo obrigatório" , false );
	
	validate.addValidate( "name" , validate.maxlength , "Limite de caracteres exedido" , 255 );
	
	validate.addValidate( "pass" , validate.equals , "Senhas não conferem" , "rpass" );
			
	YAHOO.util.Event.on( "formKeep" , "submit" , function( ev ){
		if( !validate.verify( $( 'formKeep' ) ) )
			YAHOO.util.Event.stopEvent( ev );	
	});
</script>
