

<?php $__env->startSection("admin_template"); ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Categorias</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">categorias</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Alteração da categoria <?php echo e($categoria->id); ?>

        </div>
        <div class="card-body">
            <form method="POST" action="/categoria/upd">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                <input type="hidden" name="id"
                    value="<?php echo e($categoria->id); ?>"
                />

                        <div class="form-floating mb-3">
                            <input type="text" 
                                    class="form-control" 
                                    id="cat_nome" 
                                    name="cat_nome" 
                                    placeholder="Digite o nome da categoria"
                                    value="<?php echo e($categoria->cat_nome); ?>"
                                    >
                            <label for="floatingInput">Categoria</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" 
                                    class="form-control" 
                                    id="cat_descricao"
                                    name="cat_descricao" 
                                    placeholder="Digite "
                                    value="<?php echo e($categoria->cat_descricao); ?>"
                                    >
                            <label for="floatingInput">Descrição</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make("admin_layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\si\Desktop\guilhermeferreira\aula\resources\views/categoria/alterar.blade.php ENDPATH**/ ?>