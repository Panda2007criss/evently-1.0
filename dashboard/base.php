<?php
    if(isset($_GET['page'])){

        switch ($_GET['page']) {

            
             // ---- HOME ----///
            case 'home1':
                include 'home1.php';
                break;
            case 'home2':
                include 'home2.php';
                break;
            case 'home3':
                include 'home3.php';
                break;
            case 'home4':
                include 'home4.php';
                break;     


            case 'dashboard':
                include 'home.php';
                break; 
            case 'modelo':
                include 'modelo.php';
                break;    
            // ---- administrador----///
            case 'lista_adm':
                include "administrador/lista_adm.php";
                break;

            case 'cad_adm':
                include "administrador/cad_adm.php";
                break;

            case 'insere_adm':
                include "administrador/insere_adm.php";
                break;

            case 'edita_adm':
                include "administrador/edita_adm.php";
                break;
                
            case 'atualiza_adm':
                include "administrador/atualiza_adm.php";
                break; 
            case 'view_adm':
                include "administrador/view_adm.php";
                break;      

            case 'excluir_adm':
                include "administrador/excluir_adm.php";
                break;


             // ---- assinatura----///
            case 'lista_assinatura':
                include "assinatura/lista_assinatura.php";
                break;

            case 'lista_pagamento':
                include "assinatura/lista_pagamento.php";
                break;

            case 'insere_assinatura':
                include "assinatura/insere_assinatura.php";
                break;

            case 'marcar_pagto':
                include "assinatura/marcar_pagto.php";
                break;
                
            case 'atualiza_assinatura':
                include "assinatura/atualiza_assinatura.php";
                break; 
            case 'view_assinatura':
                include "assinatura/view_assinatura.php";
                break;      

            case 'excluir_assinatura':
                include "assinatura/excluir_assinatura.php";
                break;

            case 'lista_assinatura_c':
                    include "assinatura/lista_assinatura_c.php";
                    break;


                    // --- PAGTO ---///
            case 'efetuar_pagto':
                    include "assinatura/efetuar_pagto.php";
                    break;

            case 'pagar_assinatura':
                    include "assinatura/pagar_assinatura.php";
                    break;         

            
            // ---- PERFIL ----///
            case 'listar_perfil':
                include 'perfil/perfil.php';
                break;
                
            case 'listar_senha':
                include 'perfil/senha.php';
                break;   

            case 'atualiza_perfil':
                include 'perfil/atualiza_perfil.php';
                break;
            case 'atualiza_senha':
                include 'perfil/atualiza_senha.php';
                break; 

            case 'atualiza_foto':
                include 'perfil/atualiza_foto.php';
                break;
            case 'atualiza_foto-membro':
                include 'perfil/atualiza_foto-membro.php';
                break;
                    
            case 'atualiza_foto-igreja':
                include 'perfil/atualiza_foto-igreja.php';
                break;
            
            case 'atualiza_foto-perfil':
                include 'perfil/atualiza_foto-perfil.php';
                break;     
                
            // ---- igreja----///
            
            case 'lista_cadastro-cliente':
                include "igreja/lista_cadastro-cliente.php";
                break;

            case 'lista_equip-cliente':
                include "igreja/lista_equip-cliente.php";
                break;

                
            case 'lista_igreja':
                include "igreja/lista_igreja.php";
                break;
                

            case 'cad_cliente':
                include "igreja/cad_cliente.php";
                break;

            case 'cad_igreja':
                 include "igreja/cad_igreja.php";
                 break;

            case 'insere_igreja':
                 include "igreja/insere_igreja.php";
                 break;
            
            case 'insere_cliente-adm':
                include "cliente/insere_cliente-adm.php";
                break;
                 

            case 'edita_igreja':
                 include "igreja/edita_igreja.php";
                 break;
                
            case 'atualiza_igreja':
                 include "igreja/atualiza_igreja.php";
                 break; 

            case 'view_igreja':
                include "igreja/view_igreja.php";
                break;      

            case 'excluir_igreja':
                 include "igreja/excluir_igreja.php";
                 break;  

            case 'lista_igreja-my':
                include "igreja/lista_igreja-my.php";
                break;
                 
            case 'edita_igreja-my':
                include "igreja/edita_igreja-my.php";
                break;
               
           case 'atualiza_igreja-my':
                include "igreja/atualiza_igreja-my.php";
                break; 

           case 'view_igreja-my':
               include "igreja/view_igreja-my.php";
               break; 
    
                
            // ---- cadastro-geral----///
            case 'lista_cadastro-geral':
                include "cadastro-geral/lista_cadastro-geral.php";
                break;


            case 'cad_cadastro-geral':
                 include "cadastro-geral/cad_cadastro-geral.php";
                 break;

            case 'insere_cadastro-geral':
                 include "cadastro-geral/insere_cadastro-geral.php";
                 break;

            case 'edita_cadastro-geral':
                 include "cadastro-geral/edita_cadastro-geral.php";
                 break;
                
            case 'atualiza_cadastro-geral':
                 include "cadastro-geral/atualiza_cadastro-geral.php";
                 break; 
            case 'view_cadastro-geral':
                include "cadastro-geral/view_cadastro-geral.php";
                break;      

            case 'view_cadastro-gerall':
                include "cadastro-geral/view_cadastro-gerall.php";
                break; 

            case 'excluir_cadastro-geral':
                 include "cadastro-geral/excluir_cadastro-geral.php";
                 break;  

            // ---- voluntario ----///
            case 'lista_voluntario':
                include "voluntario/lista_voluntario.php";
                break;
            
            case 'cad_voluntario':
                include "voluntario/cad_voluntario.php";
                break;
            
            case 'insere_voluntario':
                include "voluntario/insere_voluntario.php";
                break;
            
            case 'edita_voluntario':
                include "voluntario/edita_voluntario.php";
                break;
                
            case 'atualiza_voluntario':
                include "voluntario/atualiza_voluntario.php";
                break; 
            
            case 'excluir_voluntario':
                include "voluntario/excluir_voluntario.php";
                break;    




            // ---- funcao ----///
            case 'lista_funcao':
                include "funcao/lista_funcao.php";
                break;

            case 'cad_funcao':
                include "funcao/cad_funcao.php";
                break;

            case 'insere_funcao':
                include "funcao/insere_funcao.php";
                break;

            case 'edita_funcao':
                include "funcao/edita_funcao.php";
                break;
                
            case 'atualiza_funcao':
                include "funcao/atualiza_funcao.php";
                break; 

            case 'excluir_funcao':
                include "funcao/excluir_funcao.php";
                break;  


            // ---- evento ----///
            case 'lista_evento':
                    include 'evento/lista_evento.php';
                    break; 
            case 'lista_evento_vlt':
                    include 'evento/lista_evento_vlt.php';
                    break;         

            case 'cad_evento':
                    include 'evento/cad_evento.php';
                    break;  

            case 'insere_evento':
                    include "evento/insere_evento.php";
                    break;

            case 'edita_evento':
                    include "evento/edita_evento.php";
                    break;
                        
            case 'atualiza_evento':
                    include "evento/atualiza_evento.php";
                    break; 
                    
            case 'excluir_evento':
                    include "evento/excluir_evento.php";
                    break;    
                    
             case 'atualiza_flyer':
                    include "evento/atualiza_flyer.php";
                    break;  

             case 'view_evento':
                    include "evento/view_evento.php";
                    break;          
                    
            // ---- escala ----///
            case 'lista_escala':
                include "escala/lista_escala.php";
                break;
            case 'lista_minhas-escalas':
                include "escala/lista_minhas-escalas.php";
                break;
                
            case 'cad_escala':
                include "escala/cad_escala.php";
                break;

            case 'view_escala':
                include "escala/view_escala.php";
                break;    

            case 'insere_escala':
                include "escala/insere_escala.php";
                break;

            case 'edita_escala':
                include "escala/edita_escala.php";
                break;
                
            case 'atualiza_escala':
                include "escala/atualiza_escala.php";
                break; 

            case 'excluir_escala':
                include "escala/excluir_escala.php";
                break;  
            
            case 'cancelar_funcao':
                include "evento/cancelar_funcao.php";
                break;  

            case 'cadastrar_escala-funcao':
                include "evento/cadastrar_escala-funcao.php";
                break;

            case 'inserir_na-escala':
                include "evento/inserir_na-escala.php";
                break;
                
                
            // ---- equipamento ----///
            case 'lista_equipamento':
                include "equipamento/lista_equipamento.php";
                break;

            case 'cad_equipamento':
                include "equipamento/cad_equipamento.php";
                break;   

            case 'insere_equipamento':
                include "equipamento/insere_equipamento.php";
                break;

            case 'edita_equipamento':
                include "equipamento/edita_equipamento.php";
                break;
                
            case 'atualiza_equipamento':
                include "equipamento/atualiza_equipamento.php";
                break; 
            case 'incluiralu_equipamento':
                include "equipamento/incluiralu_equipamento.php";
                break;
            case 'insere_aluno_equipamento':
                include "equipamento/insere_aluno_equipamento.php";
                break;     

            case 'excluir_equipamento':
                include "equipamento/excluir_equipamento.php";
                break;



        // --- quadro disponibilidade ---//
        case 'lista_quadro-disponibilidade':
            include "quadro-disponibilidade/lista_quadro-disponibilidade.php";
            break;
        
        case 'minhas_equipamentos':
                include "quadro-disponibilidade/lista_minhas_equipamentos.php";
                break;
        
        case 'meus_alunos':
                include "quadro-disponibilidade/lista_meus_alunos.php";
                break; 

      

            // ---- RELATORIOS ----///
            case 'lista_relatorio':
                include 'relatorio/relatorio.php';
                break;

             case 'lista_relatorio-adm':
                include 'relatorio/relatorio-adm.php';
                break;    

            case 'relatorio-escala':
                include 'relatorio/relatorio_evento.php';
                break;

            case 'relatorio_igreja':
                include 'relatorio/relatorio_igreja.php';
                break;        
        
            default:
                include "base/home.php";
                break;
        }
    }
?>