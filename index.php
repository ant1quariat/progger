<!DOCTYPE html>
<!-- В зависимости от data-theme меняется цветовая палитра.  -->
<html lang="ru" data-theme="light"> 

<!-- Подключение head -->
<?php include_once 'Assets/Components/Headers/hd-head.php'; ?>

<body>
    <!-- Подключение хедера  -->
    <?php include_once 'Assets/Components/Headers/hd-header.php'; ?>

    <section class="layout">

        <!-- Подключение меню -->
        <?php require 'Assets/Components/Menu/nv-menu.php'; ?>

        <main class="content">
            <?php
                require_once 'Scripts/Services/Controllers/PageController.php';
                require_once 'Scripts/Services/Router/Route.php';
                
                use Scripts\Services\Router\Route;
                
                $router = new Route();

                $router->map('GET','/', function(){
                    include 'Public/Pages/Home.php';
                });
                $router->map('GET','/news', function(){
                    include 'Public/Pages/News.php';
                });
                $router->map('GET','/profile', function(){
                    include 'Public/Pages/Profile.php';
                });
                $router->map('GET','/group', function(){
                    include 'Public/Pages/Group.php';
                });
                $router->map('GET','/discussion', function(){
                    include 'Public/Pages/Discussion.php';
                });
                $router->map('GET','/API/Forms', function(){
                    echo 'Invalid method';
                });
                $router->map('POST','/API/Forms', function(){
                    include_once 'Public/Errors/404.php';
                });
                

                $match = $router->match();
                if (is_array($match)) {
                    if (is_callable($match['target']))
                        call_user_func_array($match['target'], $match['params']);
                    else if (is_array($match['target']) && file_exists($adminDir."/Controllers/".$match['target'][0].'.php')) {
                        require_once $adminDir . "/Controllers/" . $match['target'][0] . '.php';
                        $nameCl = $match['target'][0];
                        $nameFunc = $match['target'][1];
                        $controller = new $nameCl();
                        $controller->$nameFunc($match['params']);
                    }
                } else {
                    include_once 'Public/Errors/404.php';
                }

            ?>
        </main>
    </section>

</body>
</html>