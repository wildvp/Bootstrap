<?php

	include_once "topo.php";

?>


	<div class="container">
    
    	<div class="row">
        
        	<div class="col-12">
            
            	<!--FORMULARIO SIMPLES -->
                
                
                        
            	<form>
                
                	<!--ENTRADA DE TEXTO -->
                
                	<div class="form-group row">
                    
                    	<label for="InputEmail_1" class="col-sm-2 col-form-label">Email</label>
                        
                        <div class="col-sm-10">
                        	
                            <input type="email" class="form-control" name="InputEmail_1" name="InputEmail_1" placeholder="Insira seu email">
                            
                            
                        </div>
                        
                        
                       
                        
                                            
                    </div>
                    
                    
                    <!--ENTRADA DE TEXTO  CAMPOS SOMENTE LEITURA-->
                
                	<div class="form-group row">
                    
                    	<label for="InputEmail_2" class="col-sm-2 col-form-label">Somente Leitura</label>
                        
                        <div class="col-sm-10">
                        
                        	<input type="email" class="form-control-plaintext" name="InputEmail_2" name="InputEmail_2" placeholder="Insira seu email" value="meuemail@meudominio.com.br" readonly >
                        
                       </div>
                                            
                    </div>
                    
                    
                    
                    <!--ENTRADA DE SENHA -->
                
                	<div class="form-group row">
                    
                    	<label for="InputSenha_1" class="col-sm-2 col-form-label">Senha</label>
                        
                        <div class="col-sm-10">
                        
                        	<input type="password" class="form-control" name="InputSenha_1" name="InputSenha_1" placeholder="Insira sua senha">
                       
                        </div>
                                            
                    </div>
                    
                    
                    
                    
                    
                
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
    
    
    
    
    
    
    <div class="container">
    
    
    <div class="row">
    
    	<div class="col-12">
        
        	<form>
            
            	<div class="form-row">
                
                	<div class="form-group col-md-6">
                    
                    	<label for="nome" class="col-form-label">Nome:</label>                    
                        <input type="text" class="form-control" id="nome" name"nome" placeholder="Digite seu nome">
                    
                    </div>
                    
                    <div class="form-group col-md-6">
                    
                    	<label for="sobrenome" class="col-form-label">Sobrenome:</label>                    
                        <input type="text" class="form-control" id="sobrenome" name"sobrenome" placeholder="Digite seu sobrenome">
                    
                    </div>
                
                </div>
                
                <div class="form-row">
                
                	<div class="form-group col-md-9">
                
                		<label for="endereco" class="col-form-label">Endereço:</label>                    
                    	<input type="text" class="form-control" id="endereco" name"endereco" placeholder="Digite seu endereco">
                
                	</div>
                    
                    
                    <div class="form-group col-md-3">
                
                		<label for="bairro" class="col-form-label">Bairro:</label>                    
                    	<input type="text" class="form-control" id="bairro" name"bairro" placeholder="Digite seu bairro">
                
                	</div>
                    
                    
                </div>
                
                
                
                <div class="form-row">
                
                	<div class="form-group col-md-6">
                    
                    	<label for="cidade" class="col-form-label">Cidade:</label>                    
                        <input type="text" class="form-control" id="cidade" name"cidade" placeholder="Digite sua cidade">
                    
                    </div>
                    
                    <div class="form-group col-md-4">
                    
                    	<label for="estado" class="col-form-label">Estado:</label>                    
                        <input type="text" class="form-control" id="estado" name"estado" placeholder="Digite seu estado">
                    
                    </div>
                    
                    <div class="form-group col-md-2">
                    
                    	<label for="cep" class="col-form-label">CEP:</label>                    
                        <input type="text" class="form-control" id="cep" name"cep" placeholder="Digite seu CEP">
                    
                    </div>
                
                </div>
                
                <button class="btn btn-primary">Cadastrar</button>
            
            </form>
        
        </div>
        
    </div>
    
    
    </div>
    
    
 
        
  </div>
  
  
  

<?php

	include_once "footer.php";

?>
