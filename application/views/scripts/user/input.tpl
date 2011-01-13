<form action="<?=$this->url?>/user/keep" id="formKeep"  method="post">
	
	<?=$this->formHidden( 'id' , $this->data->id )?>
	
	<label>CPF:</label>
	<input type="text" id="cpf" name="cpf"  />
	
	<label>Nome:</label>
	<input type="text" id="name" name="name"  />
	
	<label>Usuário:</label>
	<input type="text" id="user" name="user" />
	
	<label>Senha:</label>
	<input type="password" id="pass" name="pass" />
	
	<label>Repita a senha:</label>
	<input type="password" id="rpass"/>
	
	<br /><br />
	
	<input id="submitContent" type="submit" value="Salvar" />
	
</form>
<script>
	var validate = new Validate();
	
	validate.addValidate( "cpf"  , validate.isnull , "Campo obrigatório" , false );
	validate.addValidate( "name" , validate.isnull , "Campo obrigatório" , false );
	validate.addValidate( "user" , validate.isnull , "Campo obrigatório" , false );
	
	validate.addValidate( "cpf"  , validate.cpf 	  , "CPF inválido" );
	validate.addValidate( "name" , validate.maxlength , "Limite de caracteres exedido" , 255 );
	validate.addValidate( "user" , validate.maxlength , "Limite de caracteres exedido" , 255 );
	
	validate.addValidate( "pass" , validate.equals , "Senhas não conferem" , "rpass" );
	
	var mask = new Mask();
	mask.init( "cpf" , mask , "000.000.000-00" );
		
	YAHOO.util.Event.on( "formKeep" , "submit" , function( ev ){
		if( !validate.verify( $( 'formKeep' ) ) )
			YAHOO.util.Event.stopEvent( ev );	
	});
</script>
