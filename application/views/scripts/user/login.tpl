<div class="login">
	<div><?=$this->msg?></div>
	<form action="<?=$this->url?>/user/login" method="post">
	
		<label><?=$this->translate( "user" )?>:</label>
		<?=$this->formText( "username" )?>
		
		<label><?=$this->translate( "password" )?>:</label>
		<?=$this->formPassword( "password" )?>
		
		<br /><br />
		
		<?=$this->formSubmit( "userSubmit" , $this->translate( "singin" ) )?>
	</form>
</div>