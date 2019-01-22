<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Тестовая вёрстка';
?>  
<div class="site-index">
    <div class="jumbotron">
        <div class="header">
            <div class="site_name">Company Name</div>
            <div class="site_slogan">Company Slogan</div>        
        </div>   
        <menu>
                <ul class="menu_nav">
                    <li><a href="">Новости</a></li>
                    <li><a href="">Карта покрытия</a></li>
                    <li><a href="">О нас</a></li>
                    <li><a href="">Тарифы</a></li>
                    <li><a href="">Сервисы</a></li>
                    <li><a href="">Контакты</a></li>
                </ul>
        </menu>

        <div class="wrapper">
            <aside class="aside">
                <div class="aside_item">Хранилище</div>
                <div class="aside_item">Музыка</div>
                <div class="aside_item">Игровые сервера</div>
                <a class="aside_link" href="#">Все сервисы</a>
            </aside>
            <div class="news">
                <div class="news_head"><h2>Новости</h2></div>
                    <div class="news_items">
                        <div class="news_item">
                            <img src="../images/demo1.png" alt="">
                            <div class="news_item_text">
                                <div class="news_item_text_head">
                                    <h3>Теперь наше покрытие намного больше</h3>
                                </div>
                                <div class="news_item_text_head_excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet deserunt, saepe incidunt ut minus illum, enim, nihil repellat quas, illo porro earum cum beatae culpa. Ea unde, omnis ad.</p>
                                </div>
                                <a class="button_read" href="/">Подробнее</a>
                            </div>
                        </div>
                        <div class="news_item">
                            <img src="../images/demo1.png" alt="">
                            <div class="news_item_text">
                                <div class="news_item_text_head">
                                    <h3>Теперь наше покрытие намного больше</h3>
                                </div>
                                <div class="news_item_text_head_excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet deserunt, saepe incidunt ut minus illum, enim, nihil repellat quas, illo porro earum cum beatae culpa. Ea unde, omnis ad.</p>
                                </div>
                                <a class="button_read" href="/">Подробнее</a>
                            </div>
                        </div>
                        <div class="news_item">
                            <img src="../images/demo1.png" alt="">
                            <div class="news_item_text">
                                <div class="news_item_text_head">
                                    <h3>Теперь наше покрытие намного больше</h3>
                                </div>
                                <div class="news_item_text_head_excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet deserunt, saepe incidunt ut minus illum, enim, nihil repellat quas, illo porro earum cum beatae culpa. Ea unde, omnis ad.</p>
                                </div>
                                <a class="button_read" href="/">Подробнее</a>
                            </div>
                        </div>
                    </div>
                <div class="news_pag">
                    <span class="page_desc">Страницы</span>
                    <ul class="menu_nav">
                        <li><a href="#"><</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_nav">
            <ul class="menu_nav">
                <li><a href="">Новости</a></li>
                <li><a href="">Карта покрытия</a></li>
                <li><a href="">О нас</a></li>
                <li><a href="">Тарифы</a></li>
                <li><a href="">Сервисы</a></li>
                <li><a href="">Контакты</a></li>
            </ul>
        </div>
        <footer>   
            <div class="copyright"></div>
        </footer>

    </div>
</div>




