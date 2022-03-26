<!-- ***Edit Announcement*** -->
<!-- Modal Edit-->
<div class="modal fade" id="editAnnouncemenModal<?=$value['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редагувати оголошення</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
        
            
                <form  action="?id=<?=$value['id'] ?>" method="post">
                    <div class="mb-3 text-start fs-6">
                        <label for="Task" class="form-label">Заголовок оголошення:</label>
                        <input type="text" class="form-control" value="<?=$value['title_announcement'] ?>" name="edit-title-announcement" id="Task" placeholder="Введiть заголовок...">
                    </div> 
                    <div class="mb-3 text-start fs-6">
                        <label for="TxtTextarea" class="form-label">Текст оголошення:</label>
                        <textarea class="form-control" name="edit-textarea-announcement" id="TxtTextarea" rows="3"><?=$value['txt_announcement'] ?> </textarea>
                    </div>

                    <button type="submit" name="edit-submit_announcement"  class="btn btn-primary w-100">Оновити</button>
                
                </form>
            </div>
        </div>
    </div>
</div>

