<template>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Almacen</div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right mt-1 mb-2 ms-4">Inventario</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control " name="name" value="" required
                                        autocomplete="name" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description"
                                class="col-md-4 col-form-label text-md-right mb-2 ms-4 mt-1">Encargado</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="description" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right mb-2 ms-4 mt-1">Orden
                                de Suministro</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="description" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right mb-2 ms-4 mt-1">Orden
                                de Entrada</label>
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

<style>


</style>