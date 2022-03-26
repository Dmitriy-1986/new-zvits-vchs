<!-- ***Edit Task*** -->
<!-- Modal Edit-->
<div class="modal fade" id="editModal_task<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редагувати завдання</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            
            <form  action="?id=<?=$value['id'] ?>" method="post">
                <div class="mb-3 text-start fs-6">
                    <label for="Task" class="form-label">Заголовок завдання:</label>
                    <input type="text" class="form-control" value="<?=$value['title'] ?>" name="edit-title" id="Task" placeholder="Введiть заголовок...">
                </div> 
                <div class="mb-3 text-start fs-6">
                    <label for="TxtTextarea" class="form-label">Текст завдання:</label>
                    <textarea class="form-control" name="edit-textarea" id="TxtTextarea" rows="3"><?=$value['txt'] ?></textarea>
                </div>

                <button type="submit" name="edit-submit_task"  class="btn btn-primary w-100">Оновити</button>
            
            </form>
           
            
        </div>
    </div>
</div>