<div class="modal fade" id="updatepessoa<?=$codmil?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-user"></i> Alterando Dados de <?=$nomeguerra?><h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row gx-2 gy-2 text-center">
          <div class="col-sm-4">
            <img class="image"  src="pessoas_img/<?=$img?>" alt="Card image">
            <form action="upload_pessoa_img.php" method="POST" enctype="multipart/form-data">
              <input type="file" class="form-control mt-2" name="fileToUpload" id="fileToUpload" required>
              <input type="text" name="codmil" value="<?=$codmil?>" hidden>
              <input type="submit"  class="btn btn-primary mt-2" value="Enviar" name="submit">
            </form>
          </div>
          <div class="col-sm">
            <form action="model.php" method="POST"  class="row gx-2 gy-2 text-center">
              <div class="row gx-2 gy-1">
                <div class="col-sm">              
                  <div class="form-floating"> 
                    <select class="form-select" name="grad" required>
                      <option value="Cel QOC" <?php if ($grad == 'Cel QOC') echo 'selected';?>>Cel QOC</option>
                      <option value="TC QOC" <?php if ($grad == 'TC QOC') echo 'selected';?>>TC QOC</option>
                      <option value="Maj QOC" <?php if ($grad == 'Maj QOC') echo 'selected';?>>Maj QOC</option>
                      <option value="Cap QOC" <?php if ($grad == 'Cap QOC') echo 'selected';?>>Cap QOC</option>
                      <option value="Cap QOA" <?php if ($grad == 'Cap QOC') echo 'selected';?>>Cap QOA</option>
                      <option value="Cap QOS" <?php if ($grad == 'Cap QOS') echo 'selected';?>>Cap QOS</option>           
                      <option value="1?? Ten QOC" <?php if ($grad == '1?? Ten QOC') echo 'selected';?>>1?? Ten QOC</option>
                      <option value="1?? Ten QOA" <?php if ($grad == '1?? Ten QOA') echo 'selected';?>>1?? Ten QOA</option>            
                      <option value="2?? Ten QOC" <?php if ($grad == '2?? Ten QOC') echo 'selected';?>>2?? Ten QOC</option>
                      <option value="2?? Ten RR" <?php if ($grad == '2?? Ten RR') echo 'selected';?>>2?? Ten RR</option>
                      <option value="2?? Ten QOA" <?php if ($grad == '2?? Ten QOC') echo 'selected';?>>2?? Ten QOA</option>
                      <option value="Asp Of" <?php if ($grad == 'Asp Of') echo 'selected';?>>Asp Of</option>
                      <option value="ST QP/Comb" <?php if ($grad == 'ST QP/Comb') echo 'selected';?>>ST QP/Comb</option>
                      <option value="ST RR QP/Comb" <?php if ($grad == 'ST RR QP/Comb') echo 'selected';?>>ST RR QP/Comb</option>
                      <option value="1?? Sgt QP/Comb" <?php if ($grad == '1?? Sgt QP/Comb') echo 'selected';?>>1?? Sgt QP/Comb</option>
                      <option value="2?? Sgt QP/Comb" <?php if ($grad == '2?? Sgt QP/Comb') echo 'selected';?>>2?? Sgt QP/Comb</option>
                      <option value="3?? Sgt QP/Comb" <?php if ($grad == '3?? Sgt QP/Comb') echo 'selected';?>>3?? Sgt QP/Comb</option>
                      <option value="Cb QP/Comb" <?php if ($grad == 'Cb QP/Comb') echo 'selected';?>>Cb QP/Comb</option>
                      <option value="Sd QP/Comb" <?php if ($grad == 'Sd QP/Comb') echo 'selected';?>>Sd QP/Comb</option>
                      <option value="Sd 2?? Classe" <?php if ($grad == 'Sd 2?? Classe') echo 'selected';?>>Sd 2?? Classe</option>
                    </select>
                    <label for="grad">Posto/Grad:</label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-floating">   
                    <input type="text" class="form-control" name="rg" value="<?=$rg?>" placeholder="numero do RG"   required>
                    <label for="rg">RG:</label>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-floating"> 
                    <input type="text" class="form-control" value="<?=$nomeguerra?>" name="nomeguerra" placeholder="Nome de guerra" required>
                    <label for="nomeguerra">Nome de Guerra:</label>
                  </div>
                </div>
              </div>
              <div class="row gx-2 gy-1">  
                <div class="col-sm">
                  <div class="form-floating"> 
                    <input type="text" class="form-control" value="<?=$nome?>" name="nome" placeholder="Nome completo"  required>
                    <label for="nome">Nome Completo:</label>
                  </div> 
                </div> 
                <div class="col-sm">
                  <div class="form-floating"> 
                    <input type="text" class="form-control" value="<?=$contato?>" name="contato" placeholder="Contato"  required>
                    <label for="contato">Contato:</label>
                  </div>
                </div>    
              </div>
                  <div class="form-floating">
                    <div class="form-check-inline">
                      <input type="radio" class="btn-check" name="pstatus" id="option1" autocomplete="off" value="s" required <?php if ($pstatus == 's') echo "checked";?>>
                      <label class="btn btn-outline-success" for="option1">Ativo</label>
                    </div>
                    <div class="form-check-inline">
                      <input type="radio" class="btn-check" name="pstatus" id="option2" autocomplete="off" value="n" required <?php if ($pstatus == 'n') echo "checked";?>>
                      <label class="btn btn-outline-success" for="option2">Inativo</label>
                    </div>
                    <label for="pstatus">Status:</label>
                  </div>

              <input type="int" name="codmil" value="<?=$codmil?>" hidden>
              <div class="form-floating">
                <button type="submit" class="btn btn-primary" name="acao" value="pessoasupdate">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>