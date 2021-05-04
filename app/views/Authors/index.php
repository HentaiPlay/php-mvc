<div class="row">
    <h3 class="my-4 text-center col-12">Авторы</h3>
    <div class="mt-3 col-6">
        <h4 class="my-3">Добавить автора</h4>
        <form action="/authors/add" method="POST">
            <div class="form-group">
                <input 
                    type="text"
                    name="author"
                    class="form-control"  
                    id="formAuthor" 
                    placeholder="Введите имя автора"
                >
            </div>
            <input type="submit" class="btn btn-success" value="Добавить"/>
        </form>
    </div>
    <div class="mt-3 col-6">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Автор</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                foreach($vars as $author)
                {
                    echo
                    '<tr>
                        <th scope="row">'.$author['id'].'</th>
                        <td class="d-flex">'.$author['name'].'
                            <form 
                                action="/authors/delete" 
                                method="POST"
                                class="ml-auto"
                            >
                                <input name="id" value="'.$author['id'].'" type="hidden"/>
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