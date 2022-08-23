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
        <?php include_once 'Assets/Components/Menu/nv-menu.php'; ?>

        <main class="content">
            
            <div class="group-wrapper">
                <div class="group-header">
                    <img src="Assets/Img/Cover.png" alt="">
                </div>

                <div class="group-sitebar">
                    <div class="group-sitebar_wrapper">
                        <div class="group-sitebar-img">
                            <img src="Assets/Img/Rectangle 6.png" alt="">
                        </div>
                        <div class="group-sitebar-name">
                            <span class="group-name">
                            
                            <!-- 
                                Лень было базу подрубать, 
                                сделал небольшую валидацию названий.

                                Проверь: localhost/group?id=значение case
                            -->
                            <?php 
                                if(isset($_GET['id'])) {
                                    switch ($_GET['id']) {
                                        case 'gamma_team':
                                            echo 'Gamma Team • WEB Developers';
                                            break;
                                        case 'gamma_design':
                                            echo 'Gamma Team • Design';
                                            break;
                                        case 'reddit':
                                            echo 'Reddit Community';
                                            break;
                                        default:
                                            echo 'Reddit';
                                            break;
                                    }
                                } else{
                                    echo 'Reddit';
                                }
                            ?>
                            </span>
                        </div>
                        <div class="group-sitebar-buttons">
                            <button class="group-button button-push">
                                <img src="Assets/Svg/push.svg" alt="">
                                Подписаться
                            </button>
                            <button class="group-button button-settings">
                                <img src="Assets/Svg/edit.svg" alt="">.
                            </button>
                        </div>
                    </div>
                    <div class="group-sitebar_wrapper">
                        <div class="group-sitebar-info">
                            <div class="group-info-general">
                                <span class="group-info group-info-subs">
                                    <img src="Assets/Svg/buttons/group.svg" alt="">
                                    24 000 Подписчиков
                                </span>
                                <span class="group-info group-info-spons">
                                    <img src="Assets/Svg/grade.svg" alt="">
                                    250 Спонсоров
                                </span>
                                <span class="group-info group-info-thema">
                                    <img src="Assets/Svg/explore.svg" alt="">
                                    FrontEnd / BackEnd
                                </span>
                                <span class="group-info group-info-autor">
                                    Андрей Смирнов <br>
                                    14 февраля 2022 г.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="group-sitebar_wrapper">
                        <div class="group-sitebar-more">
                            <button class="group-button button-report">
                                <img src="Assets/Svg/Frame 60.svg" alt="">
                                Пожаловаться
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>
</html>
