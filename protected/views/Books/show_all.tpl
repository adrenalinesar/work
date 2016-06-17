{extends "protected/views/index.tpl"}

{block name="content"}
    <div class="container">
        <div class="row">
            {foreach from=$books item=book}
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="http://img1.labirint.ru/books54/532023/big.jpg" alt="...">
                        <div class="caption">
                            <h4 class="media-heading">{$book['name']}</h4>
                            <h4 class="media-heading">Автор: {$book['author']}</h4>
                            {if $book['type']=='e'}
                                <h4 class="media-heading">Тип: e-book</h4>
                                <h4 class="media-heading">Продолжительность:{$book['length']}</h4>
                            {elseif $book['type']=='p'}
                                <h4 class="media-heading">Тип: Бумажная</h4>
                                <h4 class="media-heading">Кол-во страниц:{$book['length']}</h4>
                            {/if}


                             <a href="/books/show?id={$book['id']}" class="btn btn-default" role="button">Подробнее</a></p>
                        </div>
                    </div>
                </div>
            {/foreach}

        </div>
    </div>
{/block}
