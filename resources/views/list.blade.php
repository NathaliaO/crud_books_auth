<div class="containe mt-10">
    <table class="table table-striped">
        <thead>
            <th>Name</th>
            <th>ISBN</th>
            <th>Value</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if($books): ?>
            <?php foreach($books as $book): ?>
                <tr>
                    <td><?php echo $book->name; ?></td>
                    <td><?php echo $book->isbn; ?></td>
                    <td><?php echo $book->value; ?></td>
                    <td>
                        <a href="/edit/<?php echo $book->id;?>" >Editar</a>
                        <a href="#" onclick="deleteItem(<?php echo $book->id; ?>)" >Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<script>
    function deleteItem(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                axios.delete(`${id}`) 
                Swal.fire(
                    'Deleted!',
                    'Your Book has been deleted.',
                    'success'
                )
                window.location.reload();
            }
            })
    }
</script>