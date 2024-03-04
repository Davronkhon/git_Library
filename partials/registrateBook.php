<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Книги</h3>
                </div>
                <form method="GET">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Заголовок</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Автор</label>
                            <input type="text" class="form-control" id="author">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Год</label>
                            <input type="date" class="form-control" id="year">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Категории</label>
                            <select class="form-control" id="cat" placeholder="categories">
                                <option value="1">Green</option>
                                <option value="2">Red</option>
                                <option value="3">Blue</option>
                                <option value="4">White</option>
                                <option value="5">Black</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Страницы</label>
                            <input type="number" class="form-control" id="pages">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Изображение</label>
                            <input type="text" class="form-control" id="img">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Источник</label>
                            <input type="file" class="form-control" id="src">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Тип</label>
                            <select class="form-control" id="cat" placeholder="categories">
                                <option value="6">Green</option>
                                <option value="7">Red</option>
                                <option value="8">Blue</option>
                                <option value="9">White</option>
                                <option value="10">Black</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <input type="text" class="form-control" id="discription">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="form-control" id="exampleInputEmail1" name="save">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>