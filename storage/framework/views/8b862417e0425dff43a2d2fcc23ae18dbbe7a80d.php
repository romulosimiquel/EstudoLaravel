<!doctype html>
<html>
    
<head>
    <title>Central de Processos Digitais</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="js/jqueryconfirm/jquery-confirm.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="framework/materialize/css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->

    <link rel="shortcut icon" href="imagens/Logo CPD ic.ico"> 
</head>

<body>
    <main>
        <div class="navbar-fixed">
            <nav class="white">
                <div class="nav-wrapper">

                    <div class="row ">
                        <div class="col s2 m4 l4">
                            
                            <ul id="slide-out" class="side-nav">
                               
                               <li>
                                    <div class="background">
                                        <img class="imgnav" src="imagens/navMenu.png">
                                    </div>
                               </li>
                                   
                                <li><a href="#home" class="scroll">Pagina Inicial</a></li>
                                <li><a href="#comoFunciona" class="scroll">Como funciona</a></li>
                                <li><a href="#formaDePagamento" class="scroll">Forma de pagamento</a></li>
                                <li><a href="#Solicitacao" class="scroll">Solicitar</a></li>
                                <li><a href="#faleConosco" class="scroll">Fale conosco</a></li>
                            </ul>
                           
                           
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
                            
                        </div>
                        <div class="col s2 m4 l4">
                            <div id="divlogo" class="center">
                                <img id="logonav" src="imagens/logomaisnome.png">
                            </div>
                        </div>
                        <div class="col s2 m4 l4">
                
                        </div>
                        <div class="col s2">
                
                        </div>
                        <div class="col s2">
                
                        </div>
                    </div>


                </div>
            </nav>
        </div>

        <div class="row box no_margin" id="home">
            <div class="col s12" id="homeimg">
                <div id="divletras">
                    <div>
                        <h5 class="section center-align white-text" id="size4">Seja bem-vindo ao CPD!</h5>
                    </div>
                    <div>
                        <h5 class="section center-align white-text" id="size3">Diligências em processos eletrônicos em todo Brasil</h5>
                    </div>
                    <div>
                        <h5 class="section center-align white-text" id="size3">por apenas R$24,00</h5>
                    </div>
                    <div class="btnhomeMinn" id="espaco">
                        <a href="#Solicitacao" class="section waves-effect center-align btn-large btnhome btnhomeCel btnhomeMin scroll"><span class="btntamanho ">Solicitar agora</span></a>
                    </div>
                </div>
            </div>
        

        
           
            <div class="col s12 hide-on-med-and-down" id="divDosistemas">
                <div class="col s4 m2 l1"></div>
                <div class="section center col s4 m2 l2">
                    <img id="esaj" src="imagens/esaj.png">
                </div>
                <div class="section col s4 m2 l2 center">
                    <img id="pje" src="imagens/pje.png">
                </div>
                <div class="col s4 m2 l2 center">
                    <img id="eproc" src="imagens/eproc.png">
                </div>
                <div class="col s4 m2 l2 center">
                    <img id="projudi" src="imagens/projudilogo.png">
                </div>
                <div class="col s4 m2 l2 center">
                    <h5 id="size5">e muito mais...</h5>
                </div>
                <div class="col s4 m2 l1"></div>
            </div>
        </div>

        <div class="row no_margin" id="comoFunciona">
            <div class="col s12 m12 l6 fundoInfo">

                <div id="fundoLogoInfo"></div>
                <div id="postion">
                    <span id="textInfo" class="section white-text">
                      <h3 id="tituloCel"><b>Como funciona?</b></h3><br>
                       Preencha o formulário abaixo<br><br>
                       Vamos receber um e-mail com o seu pedido<br><br>
                       Enviaremos uma confirmação de realização<br><br>
                       Logo após a finalização enviaremos<br>
                       os arquivos para o mesmo e-mail
                   </span>
                    <div>
                        <a href="#Solicitacao" class="section btn-large waves-effect btnhome btnsolicitar btnMin scroll"><span class="btntamanho">Solicitar agora</span></a>
                    </div>
                </div>
            </div>
            <div class="col l6 hide-on-med-and-down no_margin" id="fundonote">

            </div>
        </div>

        <div class="row no_margin fundoPagamento" id="formaDePagamento">
            
            <div class="row">
                <div class="col l6">

                </div>
                <div class="col s12 m12 l6 fundoPagamentoColor">
                    <span id="textInfo" class="section">
                      <h3 id="tituloCel"><b>E o pagamento?</b></h3><br>
                        Após enviar o final da diligência eletronica<br><br>
                        Vamos enviar o e-mail de débito com
                        valor e conta bancária de depósito<br><br>
                        O pagamento deverá ser realizado<br><br>
                        E o comprovante enviado para nosso
                        e-mail
                   </span>
                    <div>
                        <a href="#Solicitacao" class="section btn-large waves-effect btnhome btnsolicitar btnMin scroll"><span class="btntamanho">Solicitar agora</span></a>
                    </div>
                </div>
            </div>  
        </div>

        <div class="row no_margin" id="Solicitacao">
            <form class="col s12 espacamentoform fundoSolicitacao postion" id="servicoFrom" enctype="multipart/form-data">
                <div class="row">
                    <div class="col s12">
                        <span id="textSolicitacao" class="section">
                        <h3><b>Solicitar agora!</b></h3>
                        Funcionamento das 09:00 às 18:00<br><br>
                       </span>
                    </div>

                    <div class="col s12 m12 l12">
                        <div class="input-field col s12 m6 l6">
                            <select name="tipo_servico" id="tipo_servico">
                              <option value="" >selecione...</option>
                              <option value="Cópia">Cópia</option>
                              <option value="Protocolo">Protocolo</option>
                              <option value="Distribuição">Distribuição</option>
                            </select>
                            <label>Tipo de Serviço *</label>
                        </div>
                    </div>

                    <div class="col s12 m12 l12">
                        <div class="input-field col s12 m6 l6">
                            <input id="email_servico" name="email_servico" type="email">
                            <label for="email_servico">Seu e-mail *</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="telefone_servico" type="text" name="telefone_servico">
                            <label for="telefone_servico">Seu telefone *</label>
                        </div>
                    </div>

                    <div class="col s12 m12 l12">
                        <div class="input-field col s12 m6 l6">
                            <input id="whatapp_servico" name="whatapp_servico" type="text">
                            <label for="whatapp_servico">Seu WhatApp</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="outras_servico" name="outras_servico" type="text">
                            <label for="outras_servico">Outras formas de contato</label>
                        </div>
                    </div>

                    <div class="section col s12 m12 l12">
                        <div class="input-field col s12 m6 l6">
                            <input id="processo_servico" name="processo_servico" type="text">
                            <label for="processo_servico">N° do processo</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="tramitacao_servico" name="tramitacao_servico" type="text">
                            <label for="tramitacao_servico">Tramitação (Primeiro ou Segundo Grau)</label>
                        </div>
                    </div>

                    <div class="section col s12 m12 l12">
                        <div class="input-field col s12 m6 l6">
                            <input id="autor_servico" name="autor_servico" type="text">
                            <label for="autor_servico">Autor</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="reu_servico" name="reu_servico" type="text">
                            <label for="reu_servico">Réu</label>
                        </div>
                    </div>
                    
                    <div class="col s12 m12 l12">
                        <div class="input-field col s12 m12 l12">
                            <textarea id="mensagem_servico" name="mensagem_servico" class="materialize-textarea"></textarea>
                            <label for="mensagem_servico">Explique detalhadamente o que você precisa *</label>
                        </div>  
                    </div>
                    
                    <div class="col s12 m12 l12">
                        <div class="file-field input-field ">
                            <div class="btn">
                                <span>Selecionar</span>
                                <input type="file" name="arquivo" multiple id="arquivo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Envie a documentação (você pode selecionar vários arquivos)">
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l12 limete">
                        <span>
                            Tamanho máximo dos arquivos: 25MB
                        </span>
                    </div>
                    
                    <div class="right-align btnMinFale">
                        <a class="section btnEniva center-align waves-effect btn-large btnhome btnSolcitarMin" onclick='From2()'>
                            <span class="btntamanho">Enviar seu pedido</span>
                        </a>
                    </div>
                    
                    <div class="col s12" id="load">
                           
                    </div>
                    
                    
                </div>
            </form>
        </div>
        
        
        
        
        <div class="row no_margin fundoFaleComAGente" id="faleConosco">

            <div class="row box no_margin">
                <div class="col m12 l6 fundoFaleComAGenteColor">
                    <form class="col m12 s12 espacamentoform2" method="POST" id="faleConoscoFrom">

                        <div class="col s12">
                            <span id="textSolicitacao" class="section">
                                <h3 id="tituloCel"><b>Fale com a gente!</b></h3>
                                Funcionamento das 09:00 às 18:00<br>
                            </span>
                            <span class="limete">
                                Campos obrigatórios *
                            </span><br><br>
                        </div>


                        <div class="input-field col s12 l12">
                            <input id="email_fale" type="email" name="email_fale">
                            <label for="email_fale">Seu e-mail *</label>
                        </div>
                        <div class="input-field col s12 l12">
                            <input id="telefone_fale" type="text" name="telefone_fale">
                            <label for="telefone_fale">Seu telefone</label>
                        </div>
                        <div class="input-field col s12 l12">
                            <input id="whatapp_fale" type="text" name="whatapp_fale">
                            <label for="whatapp_fale">Seu WhatApp</label>
                        </div>
                        <div class="input-field col s12 l12">
                            <input id="nome_fale" type="text" name="nome_fale">
                            <label for="nome_fale">Seu nome *</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="mensagem_fale" class="materialize-textarea" name="mensagem_fale"></textarea>
                            <label for="mensagem_fale">Sua mensagem *</label>
                        </div>
                        
                        <div class="right-align btnMinFale">
                            <button class="section btnEniva waves-effect btn-large btnhome btnFale btnMin" type="submit">
                                <span class="btntamanho">Enviar mensagem</span>
                            </button>
                        </div>
                        
                        <div class="col s12" id="resultado">
                            
                        </div>
                    </form>
                </div>
                <div class="col l6">

                </div>

            </div>

        </div>
            
        
    </main>
    
    <footer class="fundofooter">
                  
           <div class="row no_margin">
               
                <div class="col s12 footer01 hide-on-small-only">
                   <div class="row">
                        <div class="col s3 m4 l3 center footer03">
                            <p>Ligue agora: (32) 1234-1234</p>
                            <p>Skype: centralprocessosdigitais</p>
                        </div>
                        <div class="col s6 m4 l6">
                            
                        </div>
                        <div class="col s3 m4 l3 center footer03">
                            <p>Email: contato@cpd.com.br4</p>
                            <p>Whatsapp: (32) 9 1234-1234</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 footer02 hide-on-small-only">
                    <div class="row no_margin">
                        <div class="col s3 m4 l3 center footer03">
                            <p>Centralize todos seus</p>
                            <p>processos eletrônicos</p>
                            <p>em um único lugar.</p>
                        </div>
                        <div class="col s6 m4 l6">
                            
                        </div>
                        <div class="col s3 m4 l3 center footer03">
                            <p>Chega de dor de cabeça</p>
                            <p>em várias plataformas,</p>
                            <p>deixe com a gente...</p>
                        </div>
                    </div>
                </div>
                <!--                                            -->
                <div class="col s12 footer01 hide-on-med-and-up">
                   <div class="row">
                        <div class="col s12 left-align footer03">
                            <p>Ligue agora: (32) 1234-1234</p>
                            <p>Skype: centralprocessosdigitais</p>
                        </div>
                    </div>
                </div>

                <div class="col s12 footer02 hide-on-med-and-up">
                    <div class="row no_margin">
                        <div class="col s12 right-align footer03">
                            <p>Email: contato@cpd.com.br4</p>
                            <p>Whatsapp: (32) 9 1234-1234</p>
                        </div>
                    </div>
                </div>
                
                <div class="col s12 footer00">
                    <div class="row no_margin">
                        <div class="col s12 m12 l12 center">
                                <a class="center footer00" target="_blank" href="http://sntecnologia.souzanovaes.com.br/">SN Tecnologia LTDA.</a>
                        </div>
                    </div>
                </div>
            </div>

    </footer> 

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/ajaxEmail.js"></script>
    <script type="text/javascript" src="js/jqueryconfirm/jquery-confirm.min.js"></script>
    <script type="text/javascript" src="framework/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/smoothSrolling.js"></script>


    <script>
        //alert(window.screen.availWidth);
        //alert(window.screen.availHeight);
        
        $(document).ready(function() {
            $(".button-collapse").sideNav({
                closeOnClick: true
            });
            
            $('select').material_select();
            
        });

    </script>

</body>

</html>
