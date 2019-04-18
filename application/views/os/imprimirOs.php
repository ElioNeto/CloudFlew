<?php $totalServico = 0;
$totalProdutos = 0;?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Cloud Flew</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/matrix-style.css" />
<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
    .table {
        margin-bottom: 5px;
    }
</style>
</head>
<body>

 
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
       
        <div class="invoice-content">
                <div class="invoice-head" style="margin-bottom: 0">

                    <table class="table table-condensed" style="">
                        <tbody>
                            <?php if ($emitente == null) {?>
                                        
                            <tr>
                                <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a><<<</td>
                            </tr>
                            <?php } else {?>
                            <tr>
                                <td style="width: 25%"><img src=" <?php echo $emitente[0]->url_logo; ?> " style="max-height: 100px"></td>
                                <td> <span style="font-size: 20px; "> <?php echo $emitente[0]->nome; ?></span> </br><span><?php echo $emitente[0]->cnpj; ?> </br> <?php echo $emitente[0]->rua.', '.$emitente[0]->numero.' - '.$emitente[0]->bairro.' - '.$emitente[0]->cidade.' - '.$emitente[0]->uf; ?> </span> </br> <span> E-mail: <?php echo $emitente[0]->email.' - Fone: '.$emitente[0]->telefone; ?></span></td>
                                <td style="width: 18%; text-align: center"><b>#ORDEM:</b> <span ><?php echo $result->idOs?></span></br> </br> <span>Emissão: <?php echo date('d/m/Y')?></span></td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>

            
                    <table class="table table-condensend">
                        <tbody>
                            <tr>
                                <td style="width: 50%; padding-left: 0">
                                    <ul>
                                        <li>
                                            <span><h5><b>CLIENTE</b></h5>
                                            <span><?php echo $result->nomeCliente?></span><br/>
                                            <!--<span><?php //echo $result->rua?>, <?php //echo $result->numero?>, <?php //echo $result->bairro?></span>, 
                                            <span><?php //echo $result->cidade?> - <?php //echo $result->estado?></span><br>-->
                                            <span>E-mail: <?php echo $result->email?></span>
                                            <span> Celular: <?php echo $result->celular?></span>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
    
                </div>

                <div style="margin-top: 0; padding-top: 0">
                    

                    <table class="table table-condensed">
                        <tbody>
                            
                            <?php if($result->dataInicial != null){?>
                            <tr>
                                <td>
                                <b>DATA INICIAL: </b>
                                <?php echo date('d/m/Y', strtotime($result->dataInicial)); ?>
                                </td>

                                <td>
                                <b>DATA FINAL: </b>
                                <?php echo $result->dataFinal ? date('d/m/Y', strtotime($result->dataFinal)) : ''; ?>
                                </td>

                                <td>
                                <b>Funcionamento: </b>
                                <?php //echo $result->idOs; ?>
                                8:30 às 12 horas e das 14 horas às 18:30 - Segunda - Sexta 
                                </td>

                            </tr>
                            <?php }?>

                            <?php if($result->descricaoProduto != null){?>
                            <tr>
                                <td colspan="3">
                                <b>Produto: </b>
                                <?php echo $result->descricaoProduto ?>
                                </td>
                            </tr>
                            <?php }?>
            
                            <?php if($result->defeito != null){?>
                            <tr>
                                <td colspan="3">
                                <b>DEFEITO APRESENTADO: </b>
                                <?php echo $result->defeito?>
                                </td>
                            </tr>
                            <?php }?>
                            
                            <?php if($result->observacoes != null){?>
                            <tr>
                                <td colspan="3">
                                <b>OBSERVAÇÕES: </b>
                                <?php echo $result->observacoes?>
                                </td>
                            </tr>
                            <?php }?>

                            <?php if($result->laudoTecnico != null){?>
                            <!--<tr>
                                <td colspan="3">
                                <b>LAUDO TÉCNICO: </b>
                                <?php //echo $result->laudoTecnico?>
                                </td>
                            </tr>-->
                            <?php }?>
                        </tbody>
                    </table>
                    
                   
                        <table class="table table-bordered table-condensed">                                      
                            <tbody>
                                    <tr>
                                        <td colspan="3"><small><b>Validade do Orçamento</b><br>10 (Dez) dias contadosda data da emissão desta ordem de conserto.
                                        <br><b>Termo de Garantia</b><br>Este conserto tem garantia de 90 dias, contados da data de execução do conserto, 
                                        válido apenas para o defeito constatado por este postoe abrange todas as peças substituídas. O aparelho consertado 
                                        foi devidamente lacrado e sua violação implica em perda de garantia.
                                        <br><b>Prazo para Retirada</b><br>O aparelho deverá ser retirado no prazo máximo de DEZ dias, contados da data de 
                                        entrega. Após esse prazo o valor total será corrigido monetariamente e acrescido de taxa correspondente a despesas 
                                        de armazenamento, até o prazo de 12 meses, após os quais o produto será desmontado ou vendido.</small></td>
                                    </tr>
                                    <tr> 
                                        <td>Data <hr></td>
                                        <td>Assinatura do Cliente <hr></td>
                                        <td>Assinatura do Responsável <hr></td>
                                    </tr>
                            </tbody>
                        </table>

                </div>
            </div>                
      </div>
    </div>
    ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    <div class="row-fluid">
      <div class="span12">
       
        <div class="invoice-content">
                <div class="invoice-head" style="margin-bottom: 0">

                    <table class="table table-condensed" style="">
                        <tbody>
                            <?php if ($emitente == null) {?>
                                        
                            <tr>
                                <td colspan="3" class="alert">Você precisa configurar os dados do emitente. >>><a href="<?php echo base_url(); ?>index.php/mapos/emitente">Configurar</a><<<</td>
                            </tr>
                            <?php } else {?>
                            <tr>
                               <td style="width: 18%; text-align: center"><b>#ORDEM:</b> <span ><?php echo $result->idOs?></span></td>
                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>

            
                    <table class="table table-condensend">
                        <tbody>
                            <tr>
                                <td style="width: 50%; padding-left: 0">
                                    <ul>
                                        <li>
                                            <span><b>CLIENTE: </b>
                                            <?php echo $result->nomeCliente?></span>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table> 
    
                </div>

                <div style="margin-top: 0; padding-top: 0">
                    

                    <table class="table table-condensed">
                        <tbody>
                            
                            <?php if($result->dataInicial != null){?>
                            <tr>
                                <td>
                                <b>DATA INICIAL: </b>
                                <?php echo date('d/m/Y', strtotime($result->dataInicial)); ?>
                                </td>

                                <td>
                                <b>DATA FINAL: </b>
                                <?php echo $result->dataFinal ? date('d/m/Y', strtotime($result->dataFinal)) : ''; ?>
                                </td>
                            </tr>
                            <?php }?>

                            <?php if($result->descricaoProduto != null){?>
                            <tr>
                                <td colspan="3">
                                <b>Produto: </b>
                                <?php echo $result->descricaoProduto ?>
                                </td>
                            </tr>
                            <?php }?>
            
                            <?php if($result->defeito != null){?>
                            <tr>
                                <td colspan="3">
                                <b>DEFEITO APRESENTADO: </b>
                                <?php echo $result->defeito?>
                                </td>
                            </tr>
                            <?php }?>
                            
                            <?php if($result->observacoes != null){?>
                            <tr>
                                <td colspan="3">
                                <b>OBSERVAÇÕES: </b>
                                <?php echo $result->observacoes?>
                                </td>
                            </tr>
                            <?php }?>

                            <?php if($result->laudoTecnico != null){?>
                            <tr>
                                <td colspan="3">
                                <b>LAUDO TÉCNICO: </b>
                                <?php echo $result->laudoTecnico?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

                </div>
            </div>                
      </div>
    </div>
  </div>



<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/matrix.js"></script> 

<script>
    window.print();
</script>

</body>
</html>







