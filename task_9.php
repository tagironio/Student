<!DOCTYPE html>
<html lang="en">
<head>
    <?php $users =
        [

            [
                "id" => "1",
                "firstname" => "Derek",
                "lastname" => "Zoolander",
                "username"  => "@bluesteel",
                "image" => "img/demo/authors/derek.png",
                "alt" => "Derek Z.",
                "work" => "Best model",
                "phone" => "+1-555-555-1111",
                "email" => "Derek@example.com",
                "adress" => "San Francisco",
                "status" => "warning",
            ],
            [
                "id" => "2",
                "firstname" => "Hansel",
                "lastname" => "McDonald",
                "username"  => "@orgymag",
                "image" => "img/demo/authors/hansel.png",
                "alt" => "Hansel M.",
                "work" => "Orgy master",
                "phone" => "+1-555-555-1212",
                "email" => "Hansel.McDonald@gmail.com",
                "adress" => "15 fillmore, Santa Fe C 42331",
                "status" => "danger",
            ],
            [
                "id" => "3",
                "firstname" => "Billy",
                "lastname" => "Herrington",
                "username"  => "@fatcock",
                "image" => "img/demo/authors/billy.png",
                "alt" => "Billy H.",
                "phone" => "+1-555-555-1313",
                "work" => "Dungeon Master",
                "email" => "Billy.Herrington@gmail.com",
                "adress" => "Paradise city",
                "status" => "success",
            ],
            [
                "id" => "4",
                "firstname" => "Tagir",
                "lastname" => "Kazbekov",
                "username"  => "@tagironio",
                "image" => "img/demo/authors/tagir.png",
                "alt" => "Tagir K.",
                "phone" => "+1-555-555-1414",
                "work" => "Gigachad",
                "email" => "tagir-kazbekov@mail.ru",
                "adress" => "5 Rodosskaya St, Stavropol, 355021 RUS",
                "status" => "success",
            ],
            [
                "id" => "5",
                "firstname" => "Kirill",
                "lastname" => "Dolbnya",
                "username" => "@kirusha",
                "image" => "img/demo/authors/kirill.png",
                "alt" => "Kirill D.",
                "phone" => "+1-555-555-1515",
                "work" => "Programmer",
                "email" => "Kirill.D@gmail.com",
                "adress" => "Tashla city",
                "status" => "danger",
            ],
        ]
    ?>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>image</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user):?>
                                        <tr>
                                            <th scope="row"><?php echo $user["id"]  ?></th>
                                            <td><img src="<?php echo $user["image"]  ?>" width="146" height="146""/></td>
                                            <td><?php echo $user["firstname"]  ?></td>
                                            <td><?php echo $user["lastname"]  ?></td>
                                            <td><?php echo $user["username"]  ?></td>
                                            <td>
                                                <a href="show.php?id=<?php echo $user["id"]  ?>" class="btn btn-info">Редактировать</a>
                                                <a href="edit.php?id=<?php echo $user["id"]  ?>" class="btn btn-warning">Изменить</a>
                                                <a href="delete.php?id=<?php echo $user["id"]  ?>" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
