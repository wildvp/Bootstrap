<?php

	include_once "topo.php";

?>


	<div class="container">
    
    	<div class="row">
        
        	<div class="col-12">
            
            	<!--FORMULARIO SIMPLES -->
                
                
                        
            	<form>
                
                	<!--ENTRADA DE TEXTO -->
                
                	<div class="form-group">
                    
                    	<label for="InputEmail_1">Email</label>
                        <input type="email" class="form-control" name="InputEmail_1" name="InputEmail_1" placeholder="Insira seu email"aria-describedby="emailHelp">
                        <!-- INSTRUÇÕES PARA PREENCHIMENTO-->
                        <small id="emailHelp" class="form-text text-muted">Ex.: seuemail@seudominio.com.br</small>
                                            
                    </div>
                    
                    
                    <!--ENTRADA DE TEXTO  CAMPOS SOMENTE LEITURA-->
                
                	<div class="form-group">
                    
                    	<label for="InputEmail_2">Somente Leitura</label>
                        <input type="email" class="form-control" name="InputEmail_2" name="InputEmail_2" placeholder="Insira seu email"aria-describedby="emailHelp" readonly>
                        <!-- INSTRUÇÕES PARA PREENCHIMENTO-->
                        <small id="emailHelp" class="form-text text-muted">Ex.: seuemail@seudominio.com.br</small>
                                            
                    </div>
                    
                    
                    
                    <!--ENTRADA DE SENHA -->
                
                	<div class="form-group">
                    
                    	<label for="InputSenha_1">Senha</label>
                        <input type="password" class="form-control" name="InputSenha_1" name="InputSenha_1" placeholder="Insira sua senha">
                        <!-- INSTRUÇÕES PARA PREENCHIMENTO-->
                        <small>Ex.: sua senha</small>
                                            
                    </div>
                    
                    
                    
                    <!--CHECKBOX -->
                
                	<div class="form-check">
                    
                    	<label class="form-check-label">
                        	<input type="checkbox" class="form-check-input">
                            Manter conectado
                        </label>
                        
                                            
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Entrar</button>
                    
                
                </form>
                
                
                                               
             </div>
        
        </div>
    
   
    
    
    
    <!--TAMANHOS DO INPUT-->
    
    
      
    
    	
        
        <div class="row">
        
        	<div class="col-6">
            
            	<input type="text" class="form-control form-control-lg">
                <input type="text" class="form-control">
                <input type="text" class="form-control form-control-sm">
            
            </div>
        
        </div>
        
    
    </div>
    
    
    
    
 
        
  </div>

<?php

	include_once "footer.php";

?>
