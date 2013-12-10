<!DOCTYPE html>
<html>
    <head>
         <script src="http://code.jquery.com/jquery-latest.js"></script>
          <script src="/template/admin/js/bootstrap.js"></script>
         <link rel="stylesheet" href="/template/admin/css/bootstrap.css" type="text/css">
        <title>Bootstrap 101 Шаблон</title>
    </head>
        <body>
                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-inner">
                    
                             <ul class="nav">
                                 <li class="active"><a href="#">Home</a></li>
                                  
                                 <li class="dropdown">
                                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Редактор</a>
                                     <ul class="dropdown-menu" dropd>
                                         <li class="active"><a href="/admin/category/index">Категории</a></li>
                                          <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Новости</a>
                                               <ul class="dropdown-menu">
                                                  <li><a href="/admin/news/add">Добавить</a></li>
                                                  <li><a href="/admin/news/index">Просмотреть</a></li>
                                            </ul>
                                           </li>
                                         <li class="dropdown-submenu">
                                            <a tabindex="-1" href="#">Страницы</a>
                                               <ul class="dropdown-menu">
                                                  <li><a href="/admin/page/add">Добавить</a></li>
                                                  <li><a href="/admin/page/index">Главная</a></li>
                                            </ul>
                                           </li>
                                        
                                         
                                     </ul>
                                 </li>
                                   
                                 <li><a href="admin/auth/logout">Выход</a></li>
                             </ul>
                     </div>
                 </div>
               
            <div class="container">
                <?if(!empty($center)):?>
                    <?echo $center;?>
                <?endif?>
            </div>
              
               
        </body>
</html>