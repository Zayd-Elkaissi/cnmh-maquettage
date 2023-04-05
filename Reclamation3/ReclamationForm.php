<div id="Reclamation-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
   
            <div class="d-flex">
                
            <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter une réclamation</h3>
              </div>
              <div class="card-body">
                <!-- Date -->
                <!-- <div class="d-flex"> -->
                <div class="form-group">
                  <label>Objet</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="Saisir un objet" class="form-control datetimepicker-input" />
                    </div>
                </div>
                <!-- </div> -->
                <div class="form-group">
                  <label>Description</label>
                    <div class=" col-md-12" id="reservationdate" data-target-input="nearest">
                    <textarea name="description" id="summernote" class="form-control" rows="4"></textarea>
                    </div>
                </div>
            </div>
          </div>
          <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
          <a href="ReclamationManager.php" class="btn btn-primary">Enregistrer</a>
            </div>
                    </div>