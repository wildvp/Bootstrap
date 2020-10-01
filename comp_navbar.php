<?php

	include_once "topo.php";

?>


<!-- NAV BAR-->





<div class="container">
        
        <nav class="navbar navbar-light bg-light navbar-expand-lg">
    	<!-- <nav class="navbar expand-lg navbar-light bg-light"> -->
        
        	
            
            	<!--Menu quem sou eu??-->
        
        		<a class="navbar-brand h1 mb-0" href="index.php">
                <img src="images/logowolks.jpg" height="30" width="30" class="d-inline block align-baseline">
                Volksvagen
                </a>
            
           		<!--Adicionando o botão-->
            
            		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#quemSouEu" aria-controls="quemSouEu" aria-expanded="false" aria-label="Navegação Toggle">
            			<span class="navbar-toggler-icon"></span>
            		</button>
            		<!-- Conteúdo do navbar-->
                	<div class="collapse navbar-collapse justify-content-between" id="quemSouEu">
                		<ul class="navbar-nav">
                        	
                            <!--Itens do Menu-->
                        	<li class="nav-item">
                                 	<a href="#" target="_parent" class="nav-link">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                 	<a href="#" target="_parent" class="nav-link">Clientes</a>
                            </li>
                            
                            <li class="nav-item">
                                 	<a href="#" target="_parent" class="nav-link">Portfólio</a>
                            </li>
                            
                            <li class="nav-item">
                                 	<a href="#" target="_parent" class="nav-link">Contato</a>
                            </li>
                            
                            <!-- DROPDOWN-->
                            
                            <li class="nav-item dropdown">
                                 	<a class="nav-link dropdown-toggle" href="#linkDrop" id="linkDrop" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Canais Sociais</a>
                                    
                            </li>
                            
                            <div class="dropdown-menu" aria-labelledby="linkDrop">
                            	<a href="#" class="dropdown-item">You Tube</a>
                                <a href="#" class="dropdown-item">Pagina Facebook</a>
                                <a href="#" class="dropdown-item">Portal</a>                               
                            </div>
                            
                            <!-- FORMULARIO-->
                            
                            <form class="form-inline">
                            	<input class="form-control nr-sm-2" type="text" placeholder="Pesquisar..." aria-label="pesquisar">
                                </input>
                            	<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                            
                        </ul>
                   </div>
                   
                   <!--Fim Menu-->
          </nav>
 
 </div>

<br>
<br>
<?php

	include_once "footer.php";

?>
