<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Магазин "мечта букиниста" хД</title>

    <link href="/protected/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet" type="text/css">

    <script src="/assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/protected/vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/js/search.js"></script>

</head>
<body>
<div id="content">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Books</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/books">Книги</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Менюшечка<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search" method="post" action="/search/show">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Поиск" id="word" name="s-input">
                        <select class="form-control" id="search-type" name="s-select">
                            <option value="author">Автор</option>
                            <option value="name">Название</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Поиск</button>
                </form>
            </div>
        </div>
    </nav>
    {block name="breadcrumbs"}{/block}
    {block name="pagetitle"}{/block}
    {block name="FlashMessages"}
        {if isset($_flashMessages)}
            {foreach key=type item=messageArr from=$_flashMessages}
                {foreach item=message from=$_flashMessages[$type]}
                    <div class='alert alert-{$type}'> {$message} </div>
                {/foreach}
            {/foreach}
        {/if}
    {/block}

    {block name="content"} {/block}

</div>
</body>
</html>