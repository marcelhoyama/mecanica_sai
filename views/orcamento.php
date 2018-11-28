<div class="container-fluid">
    <h1 class="text-center">Cadastro Orçamento</h1>
    <div class="h4">Obs: orçamento individual</div>

    <div class="row" >
        <div class="col-sm" >
            <label for="id_cliente">Selecione o Cliente:</label>
            <div class="input-group mb-3" id="">
                <select name="id_cliente" id="id_cliente" class="form-control" onchange="pegarObjeto(this)">
                    <option>Selecione o Cliente Cadastrado...</option>
                    <?php foreach ($viewData['listarcliente'] as $value) : ?>
                        <option value="<?php echo $value['id']; ?>" ><?php echo $value['nome']; ?></option>

                    <?php endforeach; ?>


                </select>

                <div class="input-group-append">
                    <a href="javascript::;" onclick="cadastrarcliente(this)" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <label for="funcionario">Mecanico Responsável: </label>
            <select id="funcionario" name="funcionario" class="form-control">
                <option >Selecione o Mecânico Responsável...</option>
                <?php foreach ($viewData['listarfuncionario'] as $funcionario) : ?>
                    <option value="<?php echo $funcionario['id']; ?>" ><?php echo $funcionario['nome']; ?></option>

                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <br>


    <div class="row" >
        <div class="col-sm" >
            <label for="id_veiculo">Selecione o Veiculo:</label>
            <div class="input-group mb-3">
                <select name="id_veiculo" id="id_veiculo" class="form-control">
                    <option>Selecione o Veiculo Cadastrado...</option>
                    <?php foreach ($viewData['listarveiculo'] as $value) : ?>
                        <option value="<?php echo $value['id']; ?>" ><?php echo $value['marca']; ?>/<?php echo $value['placa']; ?></option>

                    <?php endforeach; ?>


                </select>

                <div class="input-group-append">
                    <a href="javascript::;" onclick="cadastrarveiculo()" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <label for="equipamento">Cadastrar Equipamento: </label>
            <div class="input-group mb-3">
                <select id="equipamento" name="equipamento" class="form-control">

                    <option >Selecione o Equipamento...</option>
                    <?php foreach ($viewData['listarequipamento'] as $equipamento) : ?>
                        <option value="<?php echo $equipamento['id']; ?>" ><?php echo $equipamento['marca']; ?></option>

                    <?php endforeach; ?>
                </select>
                <div class="input-group-append">
                    <a href="javascript::;" onclick="cadastrarequipamento()" class="btn btn-outline-secondary" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div> 
    <div class="form-group">
        <div class="row">
            <div class="col-sm">
                <label for="numero">Ordem de Serviço</label>
                <input class="form-control" name="numero" id="numero"  value="<?php echo $viewData['ultimoNumero']; ?>" type="text" readonly="true">
            </div>
            <div class="col-sm">
                <label for="status">Status</label>
                <select class="form-control">
                    <option selected="selected" name="status" id="status">Selecione o Status...</option>
                    <option value="Em Aberto">Em aberto</option>
                    <option value="Em Manutenção">Em manutenção</option>
                    <option value="Finalizada">Finalizada</option>
                </select>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-sm">
                <label for="datepicker-entrada">Data da Entrada:</label>
                <div class="input-group-prepend" >
                    <span class="input-group-text"><span  class="glyphicon glyphicon-calendar"></span></span>
                    <input type="text" class="form-control" name="dataentrada" id="datepicker-entrada" placeholder="Data de Entrada" >

                </div>
            </div>
            <div class="col-sm">
                <label for="datepicker-saida">Data da Saída:</label>
                <div class="input-group-prepend" >
                    <span class="input-group-text"><span  class="glyphicon glyphicon-calendar"></span></span>
                    <input type="text" class="form-control" name="datasaida" id="datepicker-saida" placeholder="Data de Saida" >

                </div>
            </div>

        </div>
        <br>
        <div class="">
            <div class="form-group">
                <label for="defeito" >Problema Relatado:</label>
                <textarea class="form-control" name="defeito" id="defeito" placeholder=""></textarea>
            </div>
            <div class="form-group">
                <label for="obs" >Observação:</label>
                <textarea class="form-control" name="obs" id="obs" placeholder=""></textarea>
            </div> 
            <div class="form-group">
                <label for="servico" >Serviço Realizado:</label>
                <textarea class="form-control" name="servico" id="defeito" placeholder=""></textarea>
            </div> 
        </div>
        <br>

        <div class="modal fade" id="clienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>






        <br>
        <button class="btn btn-success" type="submit" data-toggle="modal" data-target=".bd-example-modal-sm">Cadastrar</button>

        <?php if ("1=1") { ?>

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Imprimir</button>

        <?php } ?>
    </div>





</div>
<?php
if (isset($erro) && !empty($erro)) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $erro; ?>
    </div>
<?php } ?>
<?php
if (isset($ok) && !empty($ok)) {
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo $ok; ?>

    </div>
<?php } ?>



<!-- Modal pequeno -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="alert alert-success" role="alert">
                Cadastrado com sucesso!

            </div>
            <a href="<?php BASE_URL; ?>home" type="button" class="btn btn-primary">Imprimir</a>

        </div>
    </div>
</div>

<script>
    $('#datepicker-entrada').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
//            startDate: '+0d'
    });
    $('#datepicker-saida').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });
</script>