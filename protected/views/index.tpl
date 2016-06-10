<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Магазин</title>

    <link href="/protected/vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <script src="/assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="/protected/vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div id="content">
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