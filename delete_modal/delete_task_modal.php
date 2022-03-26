<!-- id_task -->
<div class="modal fade" id="deleteModal-id_task<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Видалити завдання?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Відміна</button>
            <form action='func.php'  method="post">
                <input type='hidden' name='id_task' value="<?=$value['id'] ?>" />
                <button type="submit" name="delete_submit" class="btn btn-danger">Видалити</button>
            </form> 
        </div>
    </div>
  </div>
</div>