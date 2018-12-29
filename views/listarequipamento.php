
           
            <select id="id_equipamento" name="id_equipamento" class="form-control">

                    <option >Aguardando seleção do cliente...</option>
                     <?php foreach ($viewData['listarequipamento'] as $value) : ?>
                        <option value="<?php echo $value['id']; ?>" ><?php echo $value['tipo']; ?></option>

                    <?php endforeach; ?>


                </select>
                
              

