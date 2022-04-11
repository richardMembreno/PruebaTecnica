<div class="modal fade" id="add_new_element" tabindex="-1" aria-labelledby="add_new_elementLabel" aria-hidden="true">
    <div class="modal-dialog">    
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Elemento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addTestForm">
                    <div class="mb-3">
                        <div id="alertAddDanger" class="alert alert-danger" role="alert" style="display:none;">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="elementA" class="form-label">Ingresar A</label>
                        <input type="text" class="form-control" id="elementA" name="elementA" aria-describedby="elementAHelp">
                        <div id="elementAHelp" class="form-text">Solo datos numéricos.</div>
                    </div>
                    <div class="mb-3">
                        <label for="elementB" class="form-label">Ingresar B</label>
                        <input type="text" class="form-control" id="elementB" name="elementB" aria-describedby="elementBHelp">
                        <div id="elementBHelp" class="form-text">Solo datos alfanuméricos.</div>
                    </div>
                    <button type="submit" id="AddElement" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>