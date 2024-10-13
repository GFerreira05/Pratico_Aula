
<?php $__env->startSection("admin_template"); ?>
<div class="container-fluid px-4">
<h1 class="mt-4">Produtos</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Produtos</li>
    </ol>
<div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Lista de produtos
</div>
<div class="card-body">
    <div class="row">
    <div class="col-md-4">
    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Novo
    </a>
   </div> 
</div>
        <div class="card-body">
<<table id="datatablesSimple">>
<thead>
    <th>id</th>
    <th>Nome</th>
    <th>Descricao</th>
    <th>Categoria</th>
    <th>Opcoes</th>
</thead>
<tbody>
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($linha->id); ?></td>
        <td><?php echo e($linha->prod_nome); ?></td>
        <td><?php echo e($linha->prod_descricao); ?></td>
        <td><?php echo e($linha->categoria->cat_nome); ?></td>
        <td> 
         <a href="<?php echo e(route('categoria_upd', [ "id" => $linha->id ])); ?>" class='btn btn-success'>
            <li class='fa fa-pencil'></li>
        </a>
        |
        <a href="<?php echo e(route('categoria_ex', [ "id" => $linha->id ])); ?>" class='btn btn-danger'>
            <li class='fa fa-trash'></li>
        </a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form method="POST" action="<?php echo e(route('novo_produto')); ?>">
    <?php echo csrf_field(); ?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <div class="form-floating mb-3">
                <select class="form-select" aria-label="Default select example" id="cat_id" name="cat_id">
                    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->cat_nome); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <label for="floatingInput">Categoria</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="prod_nome" name="prod_nome" placeholder="Digite o nome do produto">
                <label for="floatingInput">Nome do Produto</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="prod_descricao" name="prod_descricao" placeholder="Digite a descrição">
                <label for="floatingInput">Descrição</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="prod_quantidade" name="prod_quantidade" placeholder="Digite a quantidade">
                <label for="floatingInput">Quantidade</label>
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
<?php echo $__env->make("admin_layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\si\Desktop\guilhermeferreira\aula\resources\views/produtos/index.blade.php ENDPATH**/ ?>