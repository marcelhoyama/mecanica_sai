
           
            
                <select name="id_cliente" id="id_cliente" class="form-control">
                    <option>Selecione o Cliente Cadastrado...</option>
                    <?php foreach ($viewData['listarcliente'] as $value) : ?>
                        <option value="<?php echo $value['id']; ?>" ><?php echo $value['nome']; ?></option>

                    <?php endforeach; ?>


                </select>

              

