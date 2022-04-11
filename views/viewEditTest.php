<div class="modal fade" id="edit_element" tabindex="-1" role="dialog" aria-labelledby="edit_elementLabel">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modificar Elemento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTestForm">
                    <div class="mb-3">
                        <div id="alertEditDanger" class="alert alert-danger" role="alert" style="display:none;">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="editElementA" class="form-label">Ingresar A</label>
                        <input type="text" class="form-control" id="editElementA" name="editElementA" aria-describedby="elementAHelp" readonly>
                        <div id="elementAHelp" class="form-text">Solo datos numéricos.</div>
                    </div>
                    <div class="mb-3">
                        <label for="editElementB" class="form-label">Ingresar B</label>
                        <input type="text" class="form-control" id="editElementB" name="editElementB" aria-describedby="elementBHelp">
                        <div id="elementBHelp" class="form-text">Solo datos alfanuméricos.</div>
                    </div>
                    <button id="EditElement" type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>