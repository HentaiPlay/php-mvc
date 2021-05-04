<div class="row">
    <h3 class="my-4 text-center col-12">Книги</h3>
    <div class="mt-3 col-6">
        <h4 class="my-3">Добавить книгу</h4>
        <form action="/books/add" method="POST">
            <div class="form-group">
                <input 
                    type="text" 
                    class="form-control" 
                    id="formBooks" 
                    name="book"
                    placeholder="Введите название книги"
                >
                <select
                    required
                    class="custom-select mr-sm-2 mt-3" 
                    name="author"
                >
                  <option value="" selected>Выберите автора</option>
                  <?php 
                    foreach($authors as $author)
                    {
                        echo '<option value="'.$author['id'].'">'.$author['name'].'</option>';
                    }
                  ?>
                </select>
            </div>
            <input type="submit" class="btn btn-success" value="Добавить"/>
        </form>
    </div>
    <div class="mt-3 col-6">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Книга</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                foreach($books as $book){
            echo
                '<tr>
                    <th scope="row">'.$book['id'].'</th>
                    <td class="d-flex">'.$book['name'].'
                        <form 
                                action="/books/delete" 
                                method="POST"
                                class="ml-auto"
                            >
                                <input name="id" value="'.$book['id'].'" type="hidden"/>
                                <input 
                                    class="btn btn-danger" 
                                    value="Удалить" 
                                    type="submit"
                                />
                            </form>
                    </td>
                </tr>';
                }
            ?>
            </tbody>
        </table>
    </div>
</div>