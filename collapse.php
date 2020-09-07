<?php

	include_once "topo.php";

?>






	<div class="container">
    
    	<div class="row">
        
        	<div class="col-12">
                        
            	<!--COLLAPSE -->
                <p>
                
                	<!-- DISPARADOR DO COLLAPSE-->
                	<!-- via link -->
                	<a href="#ItemColapso1" class="btn btn-primary" data-toggle="collapse" aria-expanded="false" aria-controls="ItemColapso1">Disparador Collapse 1</a>
                
                	<!--via botão -->
                	<button class="btn btn-primary" data-toggle="collapse" type="button" data-target="#ItemColapso1" aria-expanded="false" aria-controls="ItemColapso1"> Botão Collapse 1</button>
                
                </p>
                
                <!-- CONTEÚDO COLLAPSE-->
                <div class="collapse" id="ItemColapso1">
                	
                    <div class="card card-body">
                    
                    	<h4>Texto Collapso 1</h4>
                    
                    	Desfrute de todos os recursos oferecidos por este portal seja você meu aluno, ex-aluno, amigo ou um internauta. Fique a vontade para entrar em contato sempre quando quiser pois respondo a todos as mensagens. Procuro manter sempre o material gratuito, essa é a minha idéia!!! Portanto, para que eu possa continuar, não deixe de se inscrever no canal do you tube e curtir a minha página no facebook. Espero que possa ajudar a encontrar o que procura!!! Tenho como objetivo dividir um pouco do meu conhecimento com você, seja ou não aluno dos cursos ou instituições que leciono. Espero que goste do conteúdo e que volte sempre!!! Ahh!!! E não esqueça de conferir os cursos em vídeos em videoaulas!!! 
                    
                    </div>
                
                </div>
                
                
                
                
                <!--COLLAPSE -->
                <p>
                
                	<!-- DISPARADOR DO COLLAPSE-->
                	<!-- via link -->
                	<a href="#ItemColapso2" class="btn btn-secondary" data-toggle="collapse" aria-expanded="false" aria-controls="ItemColapso1">Disparador Collapse 2</a>
                
                	<!--via botão -->
                	<button class="btn btn-secondary" data-toggle="collapse" type="button" data-target="#ItemColapso1" aria-expanded="false" aria-controls="ItemColapso2"> Botão Collapse 2</button>
                
                </p>
                
                <!-- CONTEÚDO COLLAPSE-->
                <div class="collapse" id="ItemColapso2">
                	
                    <div class="card card-body">
                    
                    	<h4>Texto Collapso 2</h4>
                    
                    	Desfrute de todos os recursos oferecidos por este portal seja você meu aluno, ex-aluno, amigo ou um internauta. Fique a vontade para entrar em contato sempre quando quiser pois respondo a todos as mensagens. Procuro manter sempre o material gratuito, essa é a minha idéia!!! Portanto, para que eu possa continuar, não deixe de se inscrever no canal do you tube e curtir a minha página no facebook. Espero que possa ajudar a encontrar o que procura!!! Tenho como objetivo dividir um pouco do meu conhecimento com você, seja ou não aluno dos cursos ou instituições que leciono. Espero que goste do conteúdo e que volte sempre!!! Ahh!!! E não esqueça de conferir os cursos em vídeos em videoaulas!!! 
                    
                    </div>
                
                </div>
                
                
                
                
                
                
                <!--COLLAPSE CLICA EM UM, FECHA O OUTRO -->
                
                <!-- DISPARADOR DO COLLAPSE-->
                <!-- via link -->
                
                <div id="accordion" role="tablist">
                
                	<div class="card-header" role="tab" id="header1">
                    
                    	<h5 class="mb-0">
                        
                        	<a href="#colapso1" data-toggle="collapse" aria-expanded="true" aria-controls="colapso1">
                            	Link para Colapso #1
                            </a>
                        
                        </h5>
                    
                    </div>
                
                	<!-- TEXTO DO COLLAPSE-->
                
                	<div id="colapso1" class="collapse show" role="tabpanel" aria-labelledby="header1" data-parent="#accordion">
                    
                    	<div class="card-body">
                        
                        <h5>Texto de exemplo</h5>
                        
                        Segue abaixo, um vídeo de abertura para agradecer a sua visita. Se adquiriu um novo computador, assista-o e tomará conhecimento de muitos benefícios que as pessoas normalmente desconhecem. Acredite, ATÉ MESMO PESSOAS DA ÁREA DE TI. Decidi colocar o vídeo abaixo na abertura para que tenha uma pequena amostra do portal. Normalmente, quando me chamam para fazer a formatação de um computador, depois que o mesmo esta pronto, recebo muitas perguntas de meus cliente. Sempre as respondo, mas acredito que, quando vou embora, surgem outras dúvidas. Por isso, recomendo que assista a esse vídeo inicial e, se for completamente leigo no assunto (ou quiser enriquecer seu conhecimento, comece pelo curso de windows10 em videoaulas 
                        
                        </div>
                    	
                        
                    </div>
                    
                    
                    
                    <div class="card-header" role="tab" id="header1">
                    
                    	<h5 class="mb-0">
                        
                        	<a href="#colapso2" data-toggle="collapse" aria-expanded="false" aria-controls="colapso2">
                            	Link para Colapso #2
                            </a>
                        
                        </h5>
                    
                    </div>
                
                	<!-- TEXTO DO COLLAPSE-->
                
                	<div id="colapso2" class="collapse" role="tabpanel" aria-labelledby="header2" data-parent="#accordion">
                    
                    	<div class="card-body">
                        
                        <h5>Texto de exemplo</h5>
                        
                        Segue abaixo, um vídeo de abertura para agradecer a sua visita. Se adquiriu um novo computador, assista-o e tomará conhecimento de muitos benefícios que as pessoas normalmente desconhecem. Acredite, ATÉ MESMO PESSOAS DA ÁREA DE TI. Decidi colocar o vídeo abaixo na abertura para que tenha uma pequena amostra do portal. Normalmente, quando me chamam para fazer a formatação de um computador, depois que o mesmo esta pronto, recebo muitas perguntas de meus cliente. Sempre as respondo, mas acredito que, quando vou embora, surgem outras dúvidas. Por isso, recomendo que assista a esse vídeo inicial e, se for completamente leigo no assunto (ou quiser enriquecer seu conhecimento, comece pelo curso de windows10 em videoaulas 
                        
                        </div>
                    	
                        
                    </div>
                    
                    
                    
                    <div class="card-header" role="tab" id="header3">
                    
                    	<h5 class="mb-0">
                        
                        	<a href="#colapso3" data-toggle="collapse" aria-expanded="false" aria-controls="colapso3">
                            	Link para Colapso #3
                            </a>
                        
                        </h5>
                    
                    </div>
                
                	<!-- TEXTO DO COLLAPSE-->
                
                	<div id="colapso3" class="collapse" role="tabpanel" aria-labelledby="header3" data-parent="#accordion">
                    
                    	<div class="card-body">
                        
                        <h5>Texto de exemplo</h5>
                        
                        Segue abaixo, um vídeo de abertura para agradecer a sua visita. Se adquiriu um novo computador, assista-o e tomará conhecimento de muitos benefícios que as pessoas normalmente desconhecem. Acredite, ATÉ MESMO PESSOAS DA ÁREA DE TI. Decidi colocar o vídeo abaixo na abertura para que tenha uma pequena amostra do portal. Normalmente, quando me chamam para fazer a formatação de um computador, depois que o mesmo esta pronto, recebo muitas perguntas de meus cliente. Sempre as respondo, mas acredito que, quando vou embora, surgem outras dúvidas. Por isso, recomendo que assista a esse vídeo inicial e, se for completamente leigo no assunto (ou quiser enriquecer seu conhecimento, comece pelo curso de windows10 em videoaulas 
                        
                        </div>
                    	
                        
                    </div>
                
                </div>
                
                
             </div>
        
        </div>
    
    </div>

<?php

	include_once "footer.php";

?>
