<template>
<main class="py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Seccion</div>

          <div class="card-body">
            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right mt-1 mb-2 ms-4">Seccion</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name"
                  autofocus>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right mb-2 ms-4 mt-1">Responsable</label>
            <div class="col-md-6">
              <input id="name" type="text" class="form-control " name="description" value="">
            </div>
          </div>

          <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right mb-2 ms-4 mt-1">Anexos</label>
            <div class="col-md-6">
              <input id="name" type="text" class="form-control " name="description" value="">
            </div>
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4 mt-3">
              <button type="submit" class="btn btn-primary">
                Guardar
              </button>
              <button type="submit" class="btn btn-warning">
                Eliminar
              </button>
             
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</main>

</template>

<script>


</script>