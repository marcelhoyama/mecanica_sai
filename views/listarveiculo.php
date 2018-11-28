
           
            
                  <select name="id_veiculo" id="id_veiculo" class="form-control">
                    <option>Selecione o Veiculo Cadastrado...</option>
                    <?php foreach ($viewData['listarveiculo'] as $value) : ?>
                        <option value="<?php echo $value['id']; ?>" ><?php echo $value['marca']; ?>/<?php echo $value['placa']; ?></option>

                    <?php endforeach; ?>


                </select>

              

