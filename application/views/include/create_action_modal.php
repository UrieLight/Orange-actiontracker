<!-- Modal component to create new actions -->
<div class="bs-component">
    <div class="modal fade" tabindex="-1" id="id_modal_new_action" role="dialog">
        <div class="modal-dialog modal-lg modal-sm" role="document">
        
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Action</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Priority:</label>
                            <input type="number" min="1" max="4" class="form-control col-lg-3" id="message-text" value="1"><p>Low priority</p>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Porteur:</label>
                            <input class="form-control" id="message-text">
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Category:</label>
                            <select name="" id="" class="form-control">
                                <option value="">Project</option>
                                <option value="">Probleme</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">ACtion Dependance:</label>
                            <input class="form-control" id="message-text">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Create action</button>
                </div>
            </div>
        </div>
    </div>
</div>