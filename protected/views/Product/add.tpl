{extends "protected/views/index.tpl"}

{block name="content"}

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form id="book-add-form">
                    <label class="col-md-12">
                        <span>Название</span>
                        <input type="name" id="book-name" name="name" class="form-control" required>
                    </label>
                    <label class="col-md-12">
                        <span>Автор</span>
                        <input type="name" id="book-author" name="author" class="form-control" required>
                    </label>
                    <label class="col-md-12">
                        <span>Тип</span>
                        <select class="form-control" id="book-type">
                            <option value="p">Бумага</option>
                            <option value="e">Электронка</option>
                        </select>
                    </label>
                    <label class="col-md-12">
                        <span id="len-title">Кол-во страниц</span>
                        <input id ="len-input" type="text" name="len" class="form-control" required>
                    </label>
                    <label class="col-md-12">
                        <button type="button" class="btn btn-info" id="add-btn">Добавить</button>
                    </label>
                    <label class="col-md-12">
                        <span id="mess"></span>
                    </label>
                </form>
            </div>
        </div>
    </div>

    <script src="/assets/js/book-add.js"></script>
{/block}
