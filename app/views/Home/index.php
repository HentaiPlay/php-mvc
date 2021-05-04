<div class="d-flex justify-content-center">
  <br>
  <p class="my-auto">Вы можете добавить</p>
  <a class="btn btn-primary m-3" href="/authors">Автора</a>
  <p class="my-auto">или</p>
  <a class="btn btn-primary m-3" href="/books">Книгу</a> 
</div>
<h3 class="my-4 text-center">Общий список</h3>
<div class="mt-3">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Автор</th>
        <th scope="col">Книга</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        foreach($items as $item)
        {    
          echo  
          '<tr>
            <th scope="row">'.$item['id'].'</th>
            <td>'.$item['author'].'</td>
            <td>'.$item['book'].'</td>
          </tr>';
        }
?>
    </tbody>
  </table>
</div>