<!-- 
    VBDR Modal
 -->
 <!-- Modal Edit-->
 <div class="modal fade" id="vbdr_editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редагувати запис </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Edit BAT -->
        <div class="container mt-3 mb-5">
        
            <form  action="?id=<?=$value['id'] ?>" method="post">
                <legend>Звіт від ВБДР</legend>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label" >
                        Ваше прізвище
                    </label>
                    <input type="text" name="edit_name_user_vbdr" value="<?=$value['name_user_vbdr'] ?>" class="form-control" placeholder="Прізвище" required>
                </div>
               
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Вибрати зміну</label>

                    <select id="disabledSelect"   name="edit_zmina_vbdr" class="form-select">
                        <option <?php if($value['zmina_vbdr'] == 'Зміна'){ echo 'selected'; }?>>Зміна</option> 
                        <option <?php if($value['zmina_vbdr'] == 'Зміна №1'){ echo 'selected'; }?>>Зміна №1</option>
                        <option <?php if($value['zmina_vbdr'] == 'Зміна №2'){ echo 'selected'; }?>>Зміна №2</option>
                    </select>
                </div>

                <div class="container-fluid">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <legend>Порушення нових правил пасажирських перевезень</legend>
                            <h6><u>На автотранспорті</u></h6>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Задокументовано фактів для складання
                                    протоколів</label>

                                <select id="disabledSelect" name="edit_total_facts_vbdr" class="form-select">  
                                    <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['total_facts_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Назва та місце реєстрації
                                    перевізника</label>

                                <input type="text" name="edit_name_carrier_vbdr"  value="<?=$value['name_carrier_vbdr'] ?>" class="form-control" placeholder="ТОВ 'Автосвіт ЛТД' м.Коростень">
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Проведено перевірок (т/з, які
                                    здійснюють
                                    міжобласні перевезення)</label>

                                <select id="disabledSelect" name="edit_provedeno_perevirok_vbdr" class="form-select">
                                <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['provedeno_perevirok_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Складено протоколів</label>

                                <select id="disabledSelect" name="edit_skladeno_protokoliv_vbdr" class="form-select">
                                <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['skladeno_protokoliv_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">
                                    Кількість субєктів господарювання які відмовились
                                    виконувати зобовязання щодо перевезення
                                </label>

                                <select id="disabledSelect" name="edit_subyekty_yaki_vidmovylys_vbdr" class="form-select">
                                <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['subyekty_yaki_vidmovylys_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                <?php } ?>
                                </select>
                            </div>
                            <h6><u>На залізничному транспорті</u></h6>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">
                                    Проведено перевірок
                                </label>

                                <select id="disabledSelect" name="edit_provedeno_perevirok_zd_vbdr" class="form-select">
                                <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['provedeno_perevirok_zd_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect"  class="form-label">
                                    Складено протоколів
                                </label>

                                <select id="disabledSelect" name="edit_skladeno_protokoliv_zd_vbdr" class="form-select">
                                <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['skladeno_protokoliv_zd_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                <?php } ?>
                                </select>
                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <legend>Нелегальні перевізники</legend>

                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        Перевірено транспортних засобів, які використовуються для
                                        надання послуг з перевезення пасажирів
                                    </label>

                                    <select id="disabledSelect" name="edit_illegal_carriers_checked_vbdr" class="form-select">
                                    <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['illegal_carriers_checked_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">
                                        За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)
                                    </label>

                                    <select id="disabledSelect" name="edit_vidsutnist_litsenziyi_vbdr" class="form-select">
                                    <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['vidsutnist_litsenziyi_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого
                                        уповноваженим підрозділомНПУ)
                                    </label>

                                    <select id="disabledSelect" name="edit_vidsutnist_marshrutu_vbdr" class="form-select">
                                    <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['vidsutnist_marshrutu_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)
                                    </label>

                                    <select id="disabledSelect" name="edit_vidsutnist_masky_vbdr" class="form-select">
                                    <?php for($i=0; $i<=100; $i++) { ?>
                                            <option <?php if($value['vidsutnist_masky_vbdr'] == $i){ echo 'selected'; }?>><?php echo $i;?></option> 
                                    <?php } ?>
                                    </select>
                                </div>

                        </div>
                    </div>

                    <button type="submit" name="edit-submit_vbdr"  class="btn btn-primary w-100">Оновити</button>
                
            </form>
        
      </div>
    </div>
  </div>
</div>