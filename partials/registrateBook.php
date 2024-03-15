<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Книги</h3>
                </div>
                <form method="GET" action="partials/book.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Заголовок</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Автор</label>
                            <input type="text" name="author" class="form-control" id="author">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Год</label>
                            <input type="date" name="year" class="form-control" id="year">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Категории</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <?php
                                $q =  "Select * from categories";
                                $res = mysqli_query($conn, $q);
                                while($row =  mysqli_fetch_assoc($res))
                                {
                                ?>    
                                <option value="<?=$row['id'];?>"><?=$row['name'];?></option>
                                <?php
                                }
                                ?> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Страницы</label>
                            <input type="number" name="pages" class="form-control" id="pages">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Изображение</label>
                            <input type="text" name="img" class="form-control" id="img">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Источник</label>
                            <input type="file" name="src" class="form-control" id="src">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Тип</label>
                            <select name="type_id" id="type_id" class="form-control">
                                <?php
                                $q = "Select * from type";
                                $res = mysqli_query($conn, $q);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                ?>
                                <option value="<?=$row['id'];?>"><?=$row['name'];?></option>
                                <?php
                                } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <input type="text" name="discription" class="form-control" id="discription">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="form-control" id="save" name="save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>