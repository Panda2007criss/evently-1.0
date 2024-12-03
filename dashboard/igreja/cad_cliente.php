<?php  include_once('data/conexao.php'); ?>
<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Cliente</h2>
		</div>


	</div>
	                            <form action="?page=insere_cliente-adm" method="post" enctype="multipart/form-data">
		<!-- 1ª LINHA -->	
                                        <!-- Form -->
                                    <div class="row">    
                                        <div class="form-group col-md-8">
                                            <label for="">Nome Completo</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="nome_completo" class="form-control" placeholder="Nome Completo" >
                                            </div>  
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="">data Nascimento</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="date" name="dt_nasc" class="form-control" placeholder="Digite seu e-mail" >
                                            </div>  
                                        </div>
                                    </div>   
                                    <div class="row">     
                                        <div class="form-group col-md-4">
                                                <label for="sexo">Sexo</label>
                                                <select class="form-control" name="sexo">
                                                    <option> --------- </option>
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Feminino</option>
                                                </select>
                                        </div>    
                                        <div class="form-group col-md-4">    
                                            <label for="">Função</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="funcao_membro" class="form-control"  >
                                            </div> 
                                        </div>    <div class="form-group col-md-4">
                                            <label for="">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="email" class="form-control" placeholder="Digite seu e-mail" >
                                            </div>  
                                        </div> 
                                        
    
                                           <div class="form-group col-md-4">
                                                <label for="">RG</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"></span>
                                                    <input type="text" name="rg" class="form-control rg-inputmask" id="rg-mask" >
                                                </div>
                                            </div>      
                                            <div class="form-group col-md-4">    
                                                <label for="">CPF</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"></span>
                                                    <input type="text" name="cpf" class="form-control cpf-inputmask" id="cpf-mask"  >
                                                </div> 
                                           </div>    
                                    </div>
                                        <h1 class="mb-0 h3">Agora Digite os dados da igreja.</h1>
                                    <div class="row"> 
                                        <div class="form-group col-md-6">
                                            <label for="">Nome da igreja</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="nome_igreja" class="form-control" placeholder="Nome da Igreja" >
                                            </div>  
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Descrição</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="descricao" class="form-control" placeholder="Descrição" >
                                            </div>  
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Denominação</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="denominacao" class="form-control" >
                                            </div>
                                        </div>     
                                        <div class="form-group col-md-3">
                                            <label for="">Telefone</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="telefone"  class="form-control phone-inputmask" id="phone-mask"  >
                                            </div> 
                                        </div>
                                        <div class="form-group col-md-4" name="tipo_assinatura">
                                            <label for="perfil">Assinatura</label>
                                            <select class="form-control" name="tipo_assinatura">
                                                <option selected name="tipo_assinatura" value="1">Período de Teste Grátis</option>
                                                <option name="tipo_assinatura" value="2">Assinatura Mensal</option>
                                            </select>
                                                </div>

                                        </div>
                                        <div class="form-groupcol-md-2">
                                            <label for="">Capacidade</label>
                                            <div class="input-group">
                                                <span class="input-group-text"></span>
                                                <input type="text" name="capacidade" class="form-control" >
                                            </div> 

                                        </div>
                                    </div>
	
                                <hr />
                                <div id="actions" class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        <a href="?page=lista_igreja" class="btn btn-danger">Cancelar</a>
                                    </div>
                                </div>
                            </form> 
</div>
