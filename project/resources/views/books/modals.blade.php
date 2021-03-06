<form class="form-horizontal" method="POST" action="">
<div class="modal fade" id="addnewUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add Books</b></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">ISBN #</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="isbn" name="isbn" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="lastname" class="col-sm-3 control-label">Author</label>
                  <div class="form col-sm-9">
                    <select name="author_id" id="author_id">
                      <option value="">--Select Author--</option>
                      @foreach($authors as $author)
                        <option value={{ $author->id }}>{{$author->lastname}}, {{$author->initials}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label for="voters_id" class="col-sm-3 control-label">Number of Pages</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="pages" name="pages" required>
                    </div>
                </div>
            </div>
            @csrf
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>
</form>