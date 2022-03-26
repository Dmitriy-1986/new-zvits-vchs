<?php
require_once 'func.php';

if(!empty($_POST)){
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЗВІТ ЧЕРГОВОМУ</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/libs/bootstrap-5.0.2/css/bootstrap.min.css">
        <style>

            table {
                font-size: 11px;
            }

            /*.transform-rotate-180 {writing-mode: tb-rl; transform:rotate(180deg);}*/

            input[type=checkbox]:checked ~ .strike {
                text-decoration: line-through;
                color: rgba(0,0,0,.55);
            }
        
            ::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                background-color: #F5F5F5;
                border-radius: 10px;
            }

            ::-webkit-scrollbar
            {
                height: 10px;
                width: 10px;
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb
            {
                border-radius: 10px;
                background-image: -webkit-gradient(linear,
                                                left bottom,
                                                left top,
                                                color-stop(0.44, rgb(122,153,217)),
                                                color-stop(0.72, rgb(73,125,189)),
                                                color-stop(0.86, rgb(28,58,148)));
            }

    </style>
</head>

<body>

    <div class="container-fluid mt-3 ">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand text-uppercase " href="#">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="35" height="35" viewBox="0 0 270.000000 321.000000"
                        preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,321.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M152 3139 c-26 -13 -55 -39 -70 -62 l-27 -41 0 -1436 0 -1436 27 -41
                        c16 -24 44 -49 70 -62 l44 -21 1154 0 1154 0 44 21 c26 13 54 38 70 62 l27 41
                        0 1436 0 1436 -27 41 c-16 24 -44 49 -70 62 l-44 21 -1155 0 -1154 0 -43 -21z
                        m2362 -121 c14 -20 16 -171 16 -1418 0 -1247 -2 -1398 -16 -1418 l-15 -22
                        -1149 0 -1149 0 -15 22 c-14 20 -16 171 -16 1418 0 1247 2 1398 16 1418 l15
                        22 1149 0 1149 0 15 -22z"/>
                        <path d="M1545 2799 c-49 -28 -58 -70 -24 -113 l20 -26 403 0 403 0 21 23 c27
                        29 28 67 3 98 l-19 24 -394 2 c-274 2 -399 -1 -413 -8z"/>
                        <path d="M356 2744 c-3 -9 -6 -222 -6 -474 0 -404 2 -460 16 -474 14 -14 70
                        -16 474 -16 252 0 465 3 474 6 21 8 21 50 0 58 -9 3 -213 6 -455 6 l-439 0 0
                        439 c0 242 -3 446 -6 455 -3 9 -16 16 -29 16 -13 0 -26 -7 -29 -16z"/>
                        <path d="M1248 2692 c-26 -20 -43 -39 -37 -42 5 -4 -33 -80 -93 -181 -56 -96
                        -102 -175 -103 -176 0 -1 -36 9 -80 23 -43 14 -82 21 -86 17 -5 -5 -31 -54
                        -58 -111 -28 -56 -54 -102 -59 -102 -5 0 -45 16 -90 35 -45 20 -87 33 -92 30
                        -6 -4 -35 -56 -66 -117 -47 -94 -55 -117 -52 -156 l3 -47 67 132 c76 149 58
                        140 172 89 91 -40 90 -41 147 81 28 59 51 109 53 110 1 2 35 -7 75 -19 49 -15
                        78 -19 88 -12 8 5 63 91 121 191 62 106 110 179 117 177 8 -4 14 14 18 53 3
                        31 5 58 4 59 -1 1 -23 -15 -49 -34z"/>
                        <path d="M1241 2520 c-12 -21 -37 -62 -56 -91 l-35 -51 0 -254 0 -254 60 0 60
                        0 0 345 c0 190 -1 345 -3 345 -2 0 -13 -18 -26 -40z"/>
                        <path d="M1525 2325 c-14 -13 -25 -36 -25 -50 0 -14 11 -37 25 -50 l24 -25
                        399 0 399 0 21 23 c29 31 28 72 -3 102 l-24 25 -396 0 -396 0 -24 -25z"/>
                        <path d="M1078 2245 c-12 -27 -45 -41 -78 -32 -19 5 -20 0 -20 -169 l0 -174
                        60 0 60 0 0 200 c0 110 -2 200 -5 200 -3 0 -11 -11 -17 -25z"/>
                        <path d="M850 2161 c-39 -79 -40 -83 -40 -186 l0 -105 60 0 60 0 -2 182 c-3
                        163 -5 183 -20 186 -13 2 -28 -18 -58 -77z"/>
                        <path d="M640 1969 l0 -99 60 0 61 0 -3 76 -3 76 -57 23 -58 24 0 -100z"/>
                        <path d="M1525 1865 c-14 -13 -25 -36 -25 -50 0 -14 11 -37 25 -50 l24 -25
                        394 0 c384 0 395 1 421 21 19 15 26 30 26 54 0 24 -7 39 -26 54 -26 20 -37 21
                        -421 21 l-394 0 -24 -25z"/>
                        <path d="M362 1367 c-31 -33 -29 -80 4 -106 26 -20 37 -21 419 -21 369 0 394
                        1 416 19 32 26 32 86 0 112 -22 18 -47 19 -420 19 l-398 0 -21 -23z"/>
                        <path d="M1743 1375 c-183 -50 -320 -188 -368 -371 -8 -32 -15 -73 -15 -91 l0
                        -33 253 2 252 3 3 253 2 252 -37 -1 c-21 0 -62 -7 -90 -14z m88 -40 c1 -14 2
                        -32 2 -40 0 -8 -1 -99 -2 -201 l-1 -185 -216 3 c-119 1 -218 6 -220 10 -3 5 2
                        36 11 69 50 197 210 338 418 368 4 1 8 -10 8 -24z"/>
                        <path d="M1919 1083 l0 -258 -109 -225 -108 -225 39 -18 c21 -10 74 -23 116
                        -29 206 -30 417 83 512 272 75 150 77 298 6 448 -75 159 -220 261 -407 287
                        l-48 6 -1 -258z"/>
                        <path d="M362 907 c-31 -33 -29 -80 4 -106 26 -20 37 -21 419 -21 436 0 428
                        -1 441 67 5 26 1 37 -19 57 l-26 26 -399 0 -399 0 -21 -23z"/>
                        <path d="M1340 773 c0 -53 24 -135 57 -201 32 -65 129 -167 189 -199 l41 -22
                        102 215 c56 118 104 221 107 229 5 13 -28 15 -245 15 l-251 0 0 -37z"/>
                        <path d="M360 450 c-30 -30 -27 -83 6 -109 26 -20 37 -21 410 -21 259 0 391 4
                        407 11 25 11 47 47 47 75 0 8 -11 26 -25 39 l-24 25 -401 0 c-387 0 -401 -1
                        -420 -20z"/>
                        </g>
                        </svg>
                    звіт черговому</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">головна</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="bat.php">бат</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vbdr.php">вбдр</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vmaz.php">вмаз</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vromdtp.php">вром дтп</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tor.php">тор</a>
                            </li>

                        </ul>
                        <a href="index.php">
                            <button type="button" class=" btn btn-success my-3 my-md-0 ms-md-3">Вийти</button>
                        </a>
                        <!--
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        -->
                    </div>
                </div>
            </nav>
        </div>

        <div class="container mt-3 mb-5 overflow-auto">

            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="BAT-tab" data-bs-toggle="tab" 
                    data-bs-target="#BAT" type="button" role="tab" aria-controls="BAT" 
                    aria-selected="true">Батальйон</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="VBDR-tab" data-bs-toggle="tab"
                     data-bs-target="#VBDR" type="button" role="tab" aria-controls="VBDR"
                      aria-selected="false">ВБДР</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="VMAZ-tab" data-bs-toggle="tab" 
                    data-bs-target="#VMAZ" type="button" role="tab" aria-controls="VMAZ" 
                    aria-selected="false">ВМАЗ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="VROMDTP-tab" data-bs-toggle="tab" 
                    data-bs-target="#VROMDTP" type="button" role="tab" aria-controls="VROMDTP" 
                    aria-selected="false">ВРОМ ДТП</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="TOR-tab" data-bs-toggle="tab" 
                    data-bs-target="#TOR" type="button" role="tab" aria-controls="TOR" 
                    aria-selected="false">ТОР</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="BAT" role="tabpanel" aria-labelledby="BAT-tab">
                    <!-- BAT -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 470px;">
                        <div class="row p-1">
                            <div class="col">
                                <legend>Звіт від Батальйону </legend>
                            </div>
                           <!--  <div class="col">
                                <form  action="admin.php" method="post" class="d-flex">
                                    <input class="form-control me-2" type="text" name="search-bat" placeholder="Введiть данi..." aria-label="Search">
                                    <button class="btn btn-outline-success" name="search-bat-submit" type="submit">Пошук</button>
                                </form>  
                            </div> -->
                        </div>
                        
                        <table class="table table-bordered border-black-50 table-hover text-center" >
                        
                            <thead>
                                <tr>
                                    <th rowspan="3" scope="col">id</th>
                                    <th rowspan="3" scope="col">Дата та час <br> відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Редагувати строку</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Видалити строку</th>
                                </tr>    
                                <tr>
                                    <th colspan="5" scope="col">На автотранспорті</th>
                                    <th colspan="2" scope="col">На залізничному транспорті</th>
                                    
                                </tr>   
                                <tr>
                                    <th scope="col"  class="transform-rotate-180">Задокументовано фактів <br>для складання протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Назва та місце <br> реєстрації перевізника</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок <br>(т/з, які здійснюють <br>міжобласні перевезення)</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Кількість субєктів <br>господарювання які відмовились<br> виконувати зобовязання <br> щодо перевезення</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>

                                    <th scope="col"  class="transform-rotate-180">Перевірено транспортних засобів,<br> які використовуються для надання<br> послуг з перевезення пасажирів</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 164 КУпАП <br>(відсутність ліцензії <br>на перевезення пасажирів)</th>
                                    <th scope="col"  class="transform-rotate-180">За ч.2 ст. 140 КУпАП<br>(відсутність паспорта <br>автобусного маршруту <br>погодженого уповноваженим <br> підрозділом НПУ)</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 44-3 КУпАП <br>(На водія або пасажира,<br> відсутність маски)</th>
                                </tr>
                            </thead>
                       
                            <tbody>
                        <?php ?>
                            <?php foreach ($result_bat as $value) { ?>
                                <tr>
                                    <td><?=$value['id'] ?></td>
                                    <td><?=$value['date_bat'] ?></td>
                                    <td><?=$value['number_bat'] ?></td>
                                    <td><?=$value['name_user_bat'] ?></td>
                                    <td><?=$value['zmina_bat'] ?></td>
                                    <td><?=$value['total_facts_bat'] ?></td>
                                    <td><?=$value['name_carrier_bat'] ?></td>
                                    <td><?=$value['provedeno_perevirok_bat'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_bat'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_bat'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_bat'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_bat'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_bat'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_bat'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_bat'] ?></td>
                                    <td><?=$value['vidsutnist_masky_bat'] ?></td>
                                    <td>
                                        <a href="?edit=<?=$value['id'] ?>"  class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Bat_editModal<?=$value['id'] ?>">
                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="20px" height="20px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                                        </a>
                                        <?php require './edit_modal/edit_bat_modal.php'; ?>
                                    </td>
                                    <td>
                                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal_bat<?=$value['id'] ?>">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                                            width="20px" height="20px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">  
                                            <image id="image0" width="510" height="510" x="0" y="0" 
                                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAQAAABecRxxAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                            cwAADsQAAA7EAZUrDhsAAAAHdElNRQflCwUUAStk2yIfAAAOMklEQVR42u3de6ykdX3H8e9hAZVd
                                            VtDCat2CyxaRCKZqNVBgdcE2dUVLG8WWim1qaKMFbNL7P220ats0TRrTqzGhNfV2TFQoWq1FVCq3
                                            xtogaVkuRXGR3QBi1uNZ2WV3+gdtKXKWnefM5TfPfF6v+XOf7O8783vmfeZ2zlQBAAAAAAAAAAAA
                                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAIey0HoADmGhttYFtaWeVRtaj9LBrrqvvlifqM/XoPUo0F/n
                                            1E016PHlxjqr9U0IffW2eqT5XXjUyyP1261vRuijtze/847r8vutb0rom9fVgeZ33HFdDtTPtL45
                                            WZkXAWfT0+r22th6iDH6Zp1cy62H4IkOaz0AK7p0ru7+VT9Yb2k9AisRgNn0s60HGLs3tB6AlXgK
                                            MIs21H1ztzOD2lD3tx6C7+cRwCzaNHd3/6qF2tR6BJ5IAGZRnz7zN7xntx6AJxKAWXRk6wFcqxQC
                                            AMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBDm89ACO6sPH6i61vAEYhAH330dYD0GeeAkAwAYBg
                                            AgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMHm728C
                                            Hl8n1YaefxX1GR2OfX3rYSdyrWbR3tpVd9X9rccYr4XWA4zR2nprvaFePFfXidkyqC/XR+ova7n1
                                            IOMyP3eW19V76tmthyDCvXV5faz1EOOxpvUAY/L2+vM6uvUQhFhfF1bVF1qPMQ7zEYDfqHfN0WMZ
                                            Zt9CvaJ2142txxjHFem/c+raOQkZfbK/ttT1rYcYVf8DsFBfqjNbD0Gkm+uMGrQeYjT9/xzAVnd/
                                            GnlZvbz1CKPqfwB+uvUABLug9QCj6n8Azm49AMG2tB5gVP0PwMbWAxDsOa0HGFX/XwQ8MAfXgb4a
                                            9P1HaP/vPD1/FZae6/k9qOf9AkYhABBMACCYAEAwAYBgAgDBBACCCQAEEwCgxwZDX/rz93Np6/Ud
                                            zqqe8wgAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                            CQAEEwAIJgAQrOdfblxdvh78htrRelh6YWOdOfSxPb8H9Xz86hIAGL+e34M8BYBgAgDBBACCCQAE
                                            EwAIJgAQTAAgmABAMAGAYP0PwHdaD0Cw3a0HGFX/A3Bf6wEIdm/rAUbV/wDc0noAgn219QCj6n8A
                                            rmw9AME+0XqAUfX8d5mq6ui6s45vPQSRdtUP11LrIUazpvUAI9tbe2pb6yGI9Jt1fesRRtX/RwBV
                                            h9WVdX7rIYjz6Tq/9rceYlTzEICq9XVN/WjrIYjyr/XK/r8JOA8vAlZV7a4t9aHWQxDk7+vl83D3
                                            n5cAVO2pi+rH66bWYxDgxjqvLq49rccYj/l4CvCYTfWTtbmeVUeu8G9n1sYh/5cddUPrK8LYjbr/
                                            e2tn3VX/WF9rfUVYncUaDHlZbD0qE2D/VzAvTwGAVRAACCYAEEwAIJgAQDABgGACAMEEAIIJAAQT
                                            AAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                            IJgAQDABgGCHtx4g2No6qTZW1Y66q5atD5M1S98P/9q6qpb/b73lurLOn+ptkbj+LO0/DczKCbC5
                                            vrjiqp+vk6ZyO6SuPyv7TyOzcQJsqQcOuu79tWXit0Lu+rOx/zQzCyfAqfXtJ115d5020dsgef1Z
                                            2P+Z412AaXpqXV1Pf9Ijjq6P1VOsz7QIwDRdPsSz3JPrUuvD+LV+CLimdg21+s4JZTl9/db7P5M8
                                            Apies+r4oY7bUGdan+kQgOk5Z+gjJ/NaePr6rEAApuc5EzjS+oxEAKbnmUMfeZz1mQ4BmJ6FCRxp
                                            fUYiABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                            IJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGA
                                            YAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                            CQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgm
                                            ABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgA
                                            QDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIA
                                            wQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAE
                                            EwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBM
                                            ACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDAB
                                            gGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQA
                                            ggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAI
                                            JgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCY
                                            AEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwApuc7Qx+52/pM
                                            hwBMz31DH3mv9ZkOAZieW4Y+8qvWZzoEYHo+VQ8PddzD9RnrMx0CMD1L9ZGhjvtQh2fL1ochLdZg
                                            yMvihCY4sfYccu3l+qGJ3QLZ67ff/xnkEcA0fb3ecshjLq9vWB/GbzZ+ArzzSVf+g4nfCrnrz8b+
                                            08ysnABvPsgD4eX6xancDqnrz8r+08jsnAAn1N/V9x634vfqigk+97Z+1Szt/ww5vPUAM2lhwv//
                                            PfULdWm9qk6rjVX1jbq1Pj3VV74z15/0rjLj/nbonwBXtx6VCfjU0Pt/RetRpyfpXYCloY88uvWo
                                            TMDwuxr0OYSkAAy/rQIwj4bf1eF/VPReUgCG39aNrUdlAobf1aDfRkwKwPCPAI6rZ7QeljH7gXrm
                                            0Md6CjCXdnY49vmth2XMuuzortbDTk9SALZ3OPbFrYdlzLrsaJczpeeSAnB7HRj62K2th2XMzh36
                                            yAN1R+thmYyvD/1O8INRaZx/a+pbQ+/9f7UedpqyTvPbhj7yGfVjrYdljM6uY4c+NugJQFoAbu1w
                                            7JtaD8sYXdzh2C5nCb3y2qEfBg7q2/W01uMyJk+thzrs/Ktbj8ukPL0e6XAi/FLrcRmTSzrs+r5a
                                            33pcJufmDqfCnX5Xci6sqds77Pr1rcedrqzXAKo+1+HYzXVh63EZg5+vkzscfW3rcZmk8zr8LBjU
                                            3XVU64EZ0doOb/4OalCvaD0wk3RY7eh0Oryz9cCM6I877feOWtN6YCbrTzqdEA/Xaa0HZgQvrL2d
                                            9vuPWg/MpL2g0wkxqO3+OkBvra3/6Ljbp7cemcn7944nxQdbD8wqvb/jTn+59cBMw2UdT4tB/Vbr
                                            kVmF3+m8z7/aemSm4aja1fHEOOBDQb3zxjrQcZd3+uxnit/t/LNhX/1c66Hp4KLa53EeB7O+wy+H
                                            PvYo4Ndbj82QLqv9nff3QS/2JnlH5xNkUIP60zqi9eAcwpH1Z6va299rPTjTdEztXNVpcn2d0Hp0
                                            nsSJdeOq9vWbfgUozZtWdaIM6lt1SdxvUPTDYfUrq3hq9+jFKzxxFuoLqzxZBnVDvaT1+Hyfl9ZN
                                            q97Pa1oPTwsv6Pgx0cdfPltntL4C/I8X1WLnN/0euzxcp7a+ArTxrhECMKhBXVeX1DGtr0S0Y+qX
                                            619G3MV3tL4StHJEfWnEk2dQe+qqelud7sunp2qhXli/Vv9Qe0bev+uy/+xL+ml7Qn1lTF8Dtru2
                                            1/a6o5ZqqR5qfbXm1LG1rtbV8+qUOmVM79o/UC+qHa2vVkvpAajaVle7FUIN6oK6qvUQbfnzB3fU
                                            UXVW6yFo4g/rr1qP0JoAVF1Tz60faT0EU/fBuqwGrYdozYPfqqoj6sp6VeshmKp/rlfX3tZDtCcA
                                            jzqqPuvLwILcXOfVUushZoEPtT5quX6qvtJ6CKbk32qbu/+jBOB/PVBb6p9aD8EUXFtb68HWQ8wK
                                            AXjMUr2mFlsPwYR9vLbV7tZDzA7vAvx/++vjdVy9tPUYTMx76s21r/UQs0QAHm9Qn6y76yfqyNaD
                                            MHZ76q31bm/8PZ53AVby/Fr0F+LnzH/WhXVr6yFmj9cAVnJbnVFXtB6CMXpfvcTdfyUeARzc1voL
                                            vyk+B+6sS+szrYeYVV4DOLiv1XvrwTrb6wE9tqfeXRfV9tZj0F8n1eIq/si0S/vL/vpwPbf16cM8
                                            2Fx/s4ovmnBpeedf9PSNcdpc763l5ie2y6Ev362/rk2tT5e+8CJgF+vrgrq4zvXeyYw6UDfU++vD
                                            Puk3PAHo7sR6Y22rl2X/LbkZs69urk/WB+qe1oP0jQCs1rraUlvr3Drd14U1tK9uqc/VtXWd3+5b
                                            HQEY1RG1qU6tU+p5dUIdW2trXa2rY1sPNaceqqVaqu/WQ3VPba/tdVvd7ZP9AAAAAAAAAAAAAAAA
                                            AAAAAAAAAAAAAAAAAAAAAAAAAMCk/TfcobgN9qPfbAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0x
                                            MS0wNVQxNzowMTo0MyswMzowMHvBU6MAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMTEtMDVUMTc6
                                            MDE6NDMrMDM6MDAKnOsfAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJ
                                            RU5ErkJggg==" />
                                            </svg>
                                        </a>
								        <?php require './delete_modal/delete_bat_modal.php'; ?>                                       
                                    </td>
                                </tr>
                            <?php } ?>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="VBDR" role="tabpanel" aria-labelledby="VBDR-tab">
                    <!-- VBDR -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 450px;">
                        <div class="row p-1">
                            <div class="col">
                                <legend>Звіт від ВБДР</legend>
                            </div>
                            <!-- <div class="col">
                                <form  action="" class="d-flex">
                                    <input class="form-control me-2" type="search" name="search" placeholder="Введiть данi..." aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Пошук</button>
                                </form>
                            </div> -->
                        </div>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                        <thead>
                                <tr>
                                    <th rowspan="3" scope="col">id</th>
                                    <th rowspan="3" scope="col">Дата та час <br> відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Редагувати строку</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Видалити строку</th>
                                </tr>    
                                <tr>
                                    <th colspan="5" scope="col">На автотранспорті</th>
                                    <th colspan="2" scope="col">На залізничному транспорті</th>
                                    
                                </tr>   
                                <tr>
                                    <th scope="col"  class="transform-rotate-180">Задокументовано фактів <br>для складання протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Назва та місце <br> реєстрації перевізника</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок <br>(т/з, які здійснюють <br>міжобласні перевезення)</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Кількість субєктів <br>господарювання які відмовились<br> виконувати зобовязання <br> щодо перевезення</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>

                                    <th scope="col"  class="transform-rotate-180">Перевірено транспортних засобів,<br> які використовуються для надання<br> послуг з перевезення пасажирів</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 164 КУпАП <br>(відсутність ліцензії <br>на перевезення пасажирів)</th>
                                    <th scope="col"  class="transform-rotate-180">За ч.2 ст. 140 КУпАП<br>(відсутність паспорта <br>автобусного маршруту <br>погодженого уповноваженим <br> підрозділом НПУ)</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 44-3 КУпАП <br>(На водія або пасажира,<br> відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_vbdr as $value) { ?>
                                <tr>
                                    <td><?=$value['id'] ?></td>
                                    <td><?=$value['date_vbdr'] ?></td>
                                    <td><?=$vbdr ?></td>
                                    <td><?=$value['name_user_vbdr'] ?></td>
                                    <td><?=$value['zmina_vbdr'] ?></td>
                                    <td><?=$value['total_facts_vbdr'] ?></td>
                                    <td><?=$value['name_carrier_vbdr'] ?></td>
                                    <td><?=$value['provedeno_perevirok_vbdr'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_vbdr'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_vbdr'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_vbdr'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_vbdr'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_vbdr'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_vbdr'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_vbdr'] ?></td>
                                    <td><?=$value['vidsutnist_masky_vbdr'] ?></td>
                                    <td>
                                        <a href="?edit=<?=$value['id'] ?>"  class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#vbdr_editModal<?=$value['id'] ?>">
                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="20px" height="20px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                                        </a>
                                        <?php require './edit_modal/edit_vbdr_modal.php'; ?>
                                    </td>
                                    <td>
                                    <a href="?delete=<?=$value['id'] ?>" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-id_vbdr<?=$value['id'] ?>">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                                            width="20px" height="20px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">  
                                            <image id="image0" width="510" height="510" x="0" y="0" 
                                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAQAAABecRxxAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                            cwAADsQAAA7EAZUrDhsAAAAHdElNRQflCwUUAStk2yIfAAAOMklEQVR42u3de6ykdX3H8e9hAZVd
                                            VtDCat2CyxaRCKZqNVBgdcE2dUVLG8WWim1qaKMFbNL7P220ats0TRrTqzGhNfV2TFQoWq1FVCq3
                                            xtogaVkuRXGR3QBi1uNZ2WV3+gdtKXKWnefM5TfPfF6v+XOf7O8783vmfeZ2zlQBAAAAAAAAAAAA
                                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAIey0HoADmGhttYFtaWeVRtaj9LBrrqvvlifqM/XoPUo0F/n
                                            1E016PHlxjqr9U0IffW2eqT5XXjUyyP1261vRuijtze/847r8vutb0rom9fVgeZ33HFdDtTPtL45
                                            WZkXAWfT0+r22th6iDH6Zp1cy62H4IkOaz0AK7p0ru7+VT9Yb2k9AisRgNn0s60HGLs3tB6AlXgK
                                            MIs21H1ztzOD2lD3tx6C7+cRwCzaNHd3/6qF2tR6BJ5IAGZRnz7zN7xntx6AJxKAWXRk6wFcqxQC
                                            AMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBDm89ACO6sPH6i61vAEYhAH330dYD0GeeAkAwAYBg
                                            AgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMHm728C
                                            Hl8n1YaefxX1GR2OfX3rYSdyrWbR3tpVd9X9rccYr4XWA4zR2nprvaFePFfXidkyqC/XR+ova7n1
                                            IOMyP3eW19V76tmthyDCvXV5faz1EOOxpvUAY/L2+vM6uvUQhFhfF1bVF1qPMQ7zEYDfqHfN0WMZ
                                            Zt9CvaJ2142txxjHFem/c+raOQkZfbK/ttT1rYcYVf8DsFBfqjNbD0Gkm+uMGrQeYjT9/xzAVnd/
                                            GnlZvbz1CKPqfwB+uvUABLug9QCj6n8Azm49AMG2tB5gVP0PwMbWAxDsOa0HGFX/XwQ8MAfXgb4a
                                            9P1HaP/vPD1/FZae6/k9qOf9AkYhABBMACCYAEAwAYBgAgDBBACCCQAEEwCgxwZDX/rz93Np6/Ud
                                            zqqe8wgAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                            CQAEEwAIJgAQrOdfblxdvh78htrRelh6YWOdOfSxPb8H9Xz86hIAGL+e34M8BYBgAgDBBACCCQAE
                                            EwAIJgAQTAAgmABAMAGAYP0PwHdaD0Cw3a0HGFX/A3Bf6wEIdm/rAUbV/wDc0noAgn219QCj6n8A
                                            rmw9AME+0XqAUfX8d5mq6ui6s45vPQSRdtUP11LrIUazpvUAI9tbe2pb6yGI9Jt1fesRRtX/RwBV
                                            h9WVdX7rIYjz6Tq/9rceYlTzEICq9XVN/WjrIYjyr/XK/r8JOA8vAlZV7a4t9aHWQxDk7+vl83D3
                                            n5cAVO2pi+rH66bWYxDgxjqvLq49rccYj/l4CvCYTfWTtbmeVUeu8G9n1sYh/5cddUPrK8LYjbr/
                                            e2tn3VX/WF9rfUVYncUaDHlZbD0qE2D/VzAvTwGAVRAACCYAEEwAIJgAQDABgGACAMEEAIIJAAQT
                                            AAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                            IJgAQDABgGCHtx4g2No6qTZW1Y66q5atD5M1S98P/9q6qpb/b73lurLOn+ptkbj+LO0/DczKCbC5
                                            vrjiqp+vk6ZyO6SuPyv7TyOzcQJsqQcOuu79tWXit0Lu+rOx/zQzCyfAqfXtJ115d5020dsgef1Z
                                            2P+Z412AaXpqXV1Pf9Ijjq6P1VOsz7QIwDRdPsSz3JPrUuvD+LV+CLimdg21+s4JZTl9/db7P5M8
                                            Apies+r4oY7bUGdan+kQgOk5Z+gjJ/NaePr6rEAApuc5EzjS+oxEAKbnmUMfeZz1mQ4BmJ6FCRxp
                                            fUYiABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                            IJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGA
                                            YAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                            CQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgm
                                            ABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgA
                                            QDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIA
                                            wQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAE
                                            EwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBM
                                            ACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDAB
                                            gGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQA
                                            ggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAI
                                            JgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCY
                                            AEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwApuc7Qx+52/pM
                                            hwBMz31DH3mv9ZkOAZieW4Y+8qvWZzoEYHo+VQ8PddzD9RnrMx0CMD1L9ZGhjvtQh2fL1ochLdZg
                                            yMvihCY4sfYccu3l+qGJ3QLZ67ff/xnkEcA0fb3ecshjLq9vWB/GbzZ+ArzzSVf+g4nfCrnrz8b+
                                            08ysnABvPsgD4eX6xancDqnrz8r+08jsnAAn1N/V9x634vfqigk+97Z+1Szt/ww5vPUAM2lhwv//
                                            PfULdWm9qk6rjVX1jbq1Pj3VV74z15/0rjLj/nbonwBXtx6VCfjU0Pt/RetRpyfpXYCloY88uvWo
                                            TMDwuxr0OYSkAAy/rQIwj4bf1eF/VPReUgCG39aNrUdlAobf1aDfRkwKwPCPAI6rZ7QeljH7gXrm
                                            0Md6CjCXdnY49vmth2XMuuzortbDTk9SALZ3OPbFrYdlzLrsaJczpeeSAnB7HRj62K2th2XMzh36
                                            yAN1R+thmYyvD/1O8INRaZx/a+pbQ+/9f7UedpqyTvPbhj7yGfVjrYdljM6uY4c+NugJQFoAbu1w
                                            7JtaD8sYXdzh2C5nCb3y2qEfBg7q2/W01uMyJk+thzrs/Ktbj8ukPL0e6XAi/FLrcRmTSzrs+r5a
                                            33pcJufmDqfCnX5Xci6sqds77Pr1rcedrqzXAKo+1+HYzXVh63EZg5+vkzscfW3rcZmk8zr8LBjU
                                            3XVU64EZ0doOb/4OalCvaD0wk3RY7eh0Oryz9cCM6I877feOWtN6YCbrTzqdEA/Xaa0HZgQvrL2d
                                            9vuPWg/MpL2g0wkxqO3+OkBvra3/6Ljbp7cemcn7944nxQdbD8wqvb/jTn+59cBMw2UdT4tB/Vbr
                                            kVmF3+m8z7/aemSm4aja1fHEOOBDQb3zxjrQcZd3+uxnit/t/LNhX/1c66Hp4KLa53EeB7O+wy+H
                                            PvYo4Ndbj82QLqv9nff3QS/2JnlH5xNkUIP60zqi9eAcwpH1Z6va299rPTjTdEztXNVpcn2d0Hp0
                                            nsSJdeOq9vWbfgUozZtWdaIM6lt1SdxvUPTDYfUrq3hq9+jFKzxxFuoLqzxZBnVDvaT1+Hyfl9ZN
                                            q97Pa1oPTwsv6Pgx0cdfPltntL4C/I8X1WLnN/0euzxcp7a+ArTxrhECMKhBXVeX1DGtr0S0Y+qX
                                            619G3MV3tL4StHJEfWnEk2dQe+qqelud7sunp2qhXli/Vv9Qe0bev+uy/+xL+ml7Qn1lTF8Dtru2
                                            1/a6o5ZqqR5qfbXm1LG1rtbV8+qUOmVM79o/UC+qHa2vVkvpAajaVle7FUIN6oK6qvUQbfnzB3fU
                                            UXVW6yFo4g/rr1qP0JoAVF1Tz60faT0EU/fBuqwGrYdozYPfqqoj6sp6VeshmKp/rlfX3tZDtCcA
                                            jzqqPuvLwILcXOfVUushZoEPtT5quX6qvtJ6CKbk32qbu/+jBOB/PVBb6p9aD8EUXFtb68HWQ8wK
                                            AXjMUr2mFlsPwYR9vLbV7tZDzA7vAvx/++vjdVy9tPUYTMx76s21r/UQs0QAHm9Qn6y76yfqyNaD
                                            MHZ76q31bm/8PZ53AVby/Fr0F+LnzH/WhXVr6yFmj9cAVnJbnVFXtB6CMXpfvcTdfyUeARzc1voL
                                            vyk+B+6sS+szrYeYVV4DOLiv1XvrwTrb6wE9tqfeXRfV9tZj0F8n1eIq/si0S/vL/vpwPbf16cM8
                                            2Fx/s4ovmnBpeedf9PSNcdpc763l5ie2y6Ev362/rk2tT5e+8CJgF+vrgrq4zvXeyYw6UDfU++vD
                                            Puk3PAHo7sR6Y22rl2X/LbkZs69urk/WB+qe1oP0jQCs1rraUlvr3Drd14U1tK9uqc/VtXWd3+5b
                                            HQEY1RG1qU6tU+p5dUIdW2trXa2rY1sPNaceqqVaqu/WQ3VPba/tdVvd7ZP9AAAAAAAAAAAAAAAA
                                            AAAAAAAAAAAAAAAAAAAAAAAAAMCk/TfcobgN9qPfbAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0x
                                            MS0wNVQxNzowMTo0MyswMzowMHvBU6MAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMTEtMDVUMTc6
                                            MDE6NDMrMDM6MDAKnOsfAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJ
                                            RU5ErkJggg==" />
                                            </svg>
                                        </a>
								        <?php require './delete_modal/delete_vbdr_modal.php'; ?>  
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="VMAZ" role="tabpanel" aria-labelledby="VMAZ-tab">
                    <!--  VMAZ -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 450px;">
                        <div class="row p-1">
                            <div class="col">
                                <legend>Звіт від ВМАЗ</legend>
                            </div>
                           <!--  <div class="col">
                                <form  action="" class="d-flex">
                                    <input class="form-control me-2" type="search" name="search" placeholder="Введiть данi..." aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Пошук</button>
                                </form>
                            </div> -->
                        </div>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                        <thead>
                                <tr>
                                    <th rowspan="3" scope="col">id</th>
                                    <th rowspan="3" scope="col">Дата та час <br> відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Редагувати строку</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Видалити строку</th>
                                </tr>    
                                <tr>
                                    <th colspan="5" scope="col">На автотранспорті</th>
                                    <th colspan="2" scope="col">На залізничному транспорті</th>
                                    
                                </tr>   
                                <tr>
                                    <th scope="col"  class="transform-rotate-180">Задокументовано фактів <br>для складання протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Назва та місце <br> реєстрації перевізника</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок <br>(т/з, які здійснюють <br>міжобласні перевезення)</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Кількість субєктів <br>господарювання які відмовились<br> виконувати зобовязання <br> щодо перевезення</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>

                                    <th scope="col"  class="transform-rotate-180">Перевірено транспортних засобів,<br> які використовуються для надання<br> послуг з перевезення пасажирів</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 164 КУпАП <br>(відсутність ліцензії <br>на перевезення пасажирів)</th>
                                    <th scope="col"  class="transform-rotate-180">За ч.2 ст. 140 КУпАП<br>(відсутність паспорта <br>автобусного маршруту <br>погодженого уповноваженим <br> підрозділом НПУ)</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 44-3 КУпАП <br>(На водія або пасажира,<br> відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_vmaz as $value) { ?>
                                <tr>
                                    <td><?=$value['id'] ?></td>
                                    <td><?=$value['date_vmaz'] ?></td>
                                    <td><?=$vmaz ?></td>
                                    <td><?=$value['name_user_vmaz'] ?></td>
                                    <td><?=$value['zmina_vmaz'] ?></td>
                                    <td><?=$value['total_facts_vmaz'] ?></td>
                                    <td><?=$value['name_carrier_vmaz'] ?></td>
                                    <td><?=$value['provedeno_perevirok_vmaz'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_vmaz'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_vmaz'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_vmaz'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_vmaz'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_vmaz'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_vmaz'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_vmaz'] ?></td>
                                    <td><?=$value['vidsutnist_masky_vmaz'] ?></td>
                                    <td>
                                        <a href="?edit=<?=$value['id'] ?>"  class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#vmaz_editModal<?=$value['id'] ?>">
                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="20px" height="20px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                                        </a>
                                        <?php require './edit_modal/edit_vmaz_modal.php'; ?>
                                    </td>
                                    <td>
                                    <a href="?delete=<?=$value['id'] ?>" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-id_vmaz<?=$value['id'] ?>">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                                            width="20px" height="20px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">  
                                            <image id="image0" width="510" height="510" x="0" y="0" 
                                                href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAQAAABecRxxAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                            AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                            cwAADsQAAA7EAZUrDhsAAAAHdElNRQflCwUUAStk2yIfAAAOMklEQVR42u3de6ykdX3H8e9hAZVd
                                            VtDCat2CyxaRCKZqNVBgdcE2dUVLG8WWim1qaKMFbNL7P220ats0TRrTqzGhNfV2TFQoWq1FVCq3
                                            xtogaVkuRXGR3QBi1uNZ2WV3+gdtKXKWnefM5TfPfF6v+XOf7O8783vmfeZ2zlQBAAAAAAAAAAAA
                                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAIey0HoADmGhttYFtaWeVRtaj9LBrrqvvlifqM/XoPUo0F/n
                                            1E016PHlxjqr9U0IffW2eqT5XXjUyyP1261vRuijtze/847r8vutb0rom9fVgeZ33HFdDtTPtL45
                                            WZkXAWfT0+r22th6iDH6Zp1cy62H4IkOaz0AK7p0ru7+VT9Yb2k9AisRgNn0s60HGLs3tB6AlXgK
                                            MIs21H1ztzOD2lD3tx6C7+cRwCzaNHd3/6qF2tR6BJ5IAGZRnz7zN7xntx6AJxKAWXRk6wFcqxQC
                                            AMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBDm89ACO6sPH6i61vAEYhAH330dYD0GeeAkAwAYBg
                                            AgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMHm728C
                                            Hl8n1YaefxX1GR2OfX3rYSdyrWbR3tpVd9X9rccYr4XWA4zR2nprvaFePFfXidkyqC/XR+ova7n1
                                            IOMyP3eW19V76tmthyDCvXV5faz1EOOxpvUAY/L2+vM6uvUQhFhfF1bVF1qPMQ7zEYDfqHfN0WMZ
                                            Zt9CvaJ2142txxjHFem/c+raOQkZfbK/ttT1rYcYVf8DsFBfqjNbD0Gkm+uMGrQeYjT9/xzAVnd/
                                            GnlZvbz1CKPqfwB+uvUABLug9QCj6n8Azm49AMG2tB5gVP0PwMbWAxDsOa0HGFX/XwQ8MAfXgb4a
                                            9P1HaP/vPD1/FZae6/k9qOf9AkYhABBMACCYAEAwAYBgAgDBBACCCQAEEwCgxwZDX/rz93Np6/Ud
                                            zqqe8wgAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                            CQAEEwAIJgAQrOdfblxdvh78htrRelh6YWOdOfSxPb8H9Xz86hIAGL+e34M8BYBgAgDBBACCCQAE
                                            EwAIJgAQTAAgmABAMAGAYP0PwHdaD0Cw3a0HGFX/A3Bf6wEIdm/rAUbV/wDc0noAgn219QCj6n8A
                                            rmw9AME+0XqAUfX8d5mq6ui6s45vPQSRdtUP11LrIUazpvUAI9tbe2pb6yGI9Jt1fesRRtX/RwBV
                                            h9WVdX7rIYjz6Tq/9rceYlTzEICq9XVN/WjrIYjyr/XK/r8JOA8vAlZV7a4t9aHWQxDk7+vl83D3
                                            n5cAVO2pi+rH66bWYxDgxjqvLq49rccYj/l4CvCYTfWTtbmeVUeu8G9n1sYh/5cddUPrK8LYjbr/
                                            e2tn3VX/WF9rfUVYncUaDHlZbD0qE2D/VzAvTwGAVRAACCYAEEwAIJgAQDABgGACAMEEAIIJAAQT
                                            AAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                            IJgAQDABgGCHtx4g2No6qTZW1Y66q5atD5M1S98P/9q6qpb/b73lurLOn+ptkbj+LO0/DczKCbC5
                                            vrjiqp+vk6ZyO6SuPyv7TyOzcQJsqQcOuu79tWXit0Lu+rOx/zQzCyfAqfXtJ115d5020dsgef1Z
                                            2P+Z412AaXpqXV1Pf9Ijjq6P1VOsz7QIwDRdPsSz3JPrUuvD+LV+CLimdg21+s4JZTl9/db7P5M8
                                            Apies+r4oY7bUGdan+kQgOk5Z+gjJ/NaePr6rEAApuc5EzjS+oxEAKbnmUMfeZz1mQ4BmJ6FCRxp
                                            fUYiABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                            IJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGA
                                            YAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                            CQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgm
                                            ABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgA
                                            QDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIA
                                            wQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAE
                                            EwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBM
                                            ACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDAB
                                            gGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQA
                                            ggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAI
                                            JgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCY
                                            AEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwApuc7Qx+52/pM
                                            hwBMz31DH3mv9ZkOAZieW4Y+8qvWZzoEYHo+VQ8PddzD9RnrMx0CMD1L9ZGhjvtQh2fL1ochLdZg
                                            yMvihCY4sfYccu3l+qGJ3QLZ67ff/xnkEcA0fb3ecshjLq9vWB/GbzZ+ArzzSVf+g4nfCrnrz8b+
                                            08ysnABvPsgD4eX6xancDqnrz8r+08jsnAAn1N/V9x634vfqigk+97Z+1Szt/ww5vPUAM2lhwv//
                                            PfULdWm9qk6rjVX1jbq1Pj3VV74z15/0rjLj/nbonwBXtx6VCfjU0Pt/RetRpyfpXYCloY88uvWo
                                            TMDwuxr0OYSkAAy/rQIwj4bf1eF/VPReUgCG39aNrUdlAobf1aDfRkwKwPCPAI6rZ7QeljH7gXrm
                                            0Md6CjCXdnY49vmth2XMuuzortbDTk9SALZ3OPbFrYdlzLrsaJczpeeSAnB7HRj62K2th2XMzh36
                                            yAN1R+thmYyvD/1O8INRaZx/a+pbQ+/9f7UedpqyTvPbhj7yGfVjrYdljM6uY4c+NugJQFoAbu1w
                                            7JtaD8sYXdzh2C5nCb3y2qEfBg7q2/W01uMyJk+thzrs/Ktbj8ukPL0e6XAi/FLrcRmTSzrs+r5a
                                            33pcJufmDqfCnX5Xci6sqds77Pr1rcedrqzXAKo+1+HYzXVh63EZg5+vkzscfW3rcZmk8zr8LBjU
                                            3XVU64EZ0doOb/4OalCvaD0wk3RY7eh0Oryz9cCM6I877feOWtN6YCbrTzqdEA/Xaa0HZgQvrL2d
                                            9vuPWg/MpL2g0wkxqO3+OkBvra3/6Ljbp7cemcn7944nxQdbD8wqvb/jTn+59cBMw2UdT4tB/Vbr
                                            kVmF3+m8z7/aemSm4aja1fHEOOBDQb3zxjrQcZd3+uxnit/t/LNhX/1c66Hp4KLa53EeB7O+wy+H
                                            PvYo4Ndbj82QLqv9nff3QS/2JnlH5xNkUIP60zqi9eAcwpH1Z6va299rPTjTdEztXNVpcn2d0Hp0
                                            nsSJdeOq9vWbfgUozZtWdaIM6lt1SdxvUPTDYfUrq3hq9+jFKzxxFuoLqzxZBnVDvaT1+Hyfl9ZN
                                            q97Pa1oPTwsv6Pgx0cdfPltntL4C/I8X1WLnN/0euzxcp7a+ArTxrhECMKhBXVeX1DGtr0S0Y+qX
                                            619G3MV3tL4StHJEfWnEk2dQe+qqelud7sunp2qhXli/Vv9Qe0bev+uy/+xL+ml7Qn1lTF8Dtru2
                                            1/a6o5ZqqR5qfbXm1LG1rtbV8+qUOmVM79o/UC+qHa2vVkvpAajaVle7FUIN6oK6qvUQbfnzB3fU
                                            UXVW6yFo4g/rr1qP0JoAVF1Tz60faT0EU/fBuqwGrYdozYPfqqoj6sp6VeshmKp/rlfX3tZDtCcA
                                            jzqqPuvLwILcXOfVUushZoEPtT5quX6qvtJ6CKbk32qbu/+jBOB/PVBb6p9aD8EUXFtb68HWQ8wK
                                            AXjMUr2mFlsPwYR9vLbV7tZDzA7vAvx/++vjdVy9tPUYTMx76s21r/UQs0QAHm9Qn6y76yfqyNaD
                                            MHZ76q31bm/8PZ53AVby/Fr0F+LnzH/WhXVr6yFmj9cAVnJbnVFXtB6CMXpfvcTdfyUeARzc1voL
                                            vyk+B+6sS+szrYeYVV4DOLiv1XvrwTrb6wE9tqfeXRfV9tZj0F8n1eIq/si0S/vL/vpwPbf16cM8
                                            2Fx/s4ovmnBpeedf9PSNcdpc763l5ie2y6Ev362/rk2tT5e+8CJgF+vrgrq4zvXeyYw6UDfU++vD
                                            Puk3PAHo7sR6Y22rl2X/LbkZs69urk/WB+qe1oP0jQCs1rraUlvr3Drd14U1tK9uqc/VtXWd3+5b
                                            HQEY1RG1qU6tU+p5dUIdW2trXa2rY1sPNaceqqVaqu/WQ3VPba/tdVvd7ZP9AAAAAAAAAAAAAAAA
                                            AAAAAAAAAAAAAAAAAAAAAAAAAMCk/TfcobgN9qPfbAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0x
                                            MS0wNVQxNzowMTo0MyswMzowMHvBU6MAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMTEtMDVUMTc6
                                            MDE6NDMrMDM6MDAKnOsfAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJ
                                            RU5ErkJggg==" />
                                            </svg>
                                        </a>
								        <?php require './delete_modal/delete_vmaz_modal.php'; ?>  
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="VROMDTP" role="tabpanel" aria-labelledby="VROMDTP-tab">
                    <!-- VROMDTP -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 450px;">
                        <div class="row p-1">
                            <div class="col">
                                <legend>Звіт від ВРОМ ДТП</legend>
                            </div>
                            <!-- <div class="col">
                                <form  action="" class="d-flex">
                                    <input class="form-control me-2" type="search" name="search" placeholder="Введiть данi..." aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Пошук</button>
                                </form>
                            </div> -->
                        </div>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                        <thead>
                                <tr>
                                    <th rowspan="3" scope="col">id</th>
                                    <th rowspan="3" scope="col">Дата та час <br> відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Редагувати строку</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Видалити строку</th>
                                </tr>    
                                <tr>
                                    <th colspan="5" scope="col">На автотранспорті</th>
                                    <th colspan="2" scope="col">На залізничному транспорті</th>
                                    
                                </tr>   
                                <tr>
                                    <th scope="col"  class="transform-rotate-180">Задокументовано фактів <br>для складання протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Назва та місце <br> реєстрації перевізника</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок <br>(т/з, які здійснюють <br>міжобласні перевезення)</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Кількість субєктів <br>господарювання які відмовились<br> виконувати зобовязання <br> щодо перевезення</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>

                                    <th scope="col"  class="transform-rotate-180">Перевірено транспортних засобів,<br> які використовуються для надання<br> послуг з перевезення пасажирів</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 164 КУпАП <br>(відсутність ліцензії <br>на перевезення пасажирів)</th>
                                    <th scope="col"  class="transform-rotate-180">За ч.2 ст. 140 КУпАП<br>(відсутність паспорта <br>автобусного маршруту <br>погодженого уповноваженим <br> підрозділом НПУ)</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 44-3 КУпАП <br>(На водія або пасажира,<br> відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_vromdtp as $value) { ?>
                                <tr>
                                    <td><?=$value['id'] ?></td>
                                    <td><?=$value['date_vromdtp'] ?></td>
                                    <td><?=$vromdtp ?></td>
                                    <td><?=$value['name_user_vromdtp'] ?></td>
                                    <td><?=$value['zmina_vromdtp'] ?></td>
                                    <td><?=$value['total_facts_vromdtp'] ?></td>
                                    <td><?=$value['name_carrier_vromdtp'] ?></td>
                                    <td><?=$value['provedeno_perevirok_vromdtp'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_vromdtp'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_vromdtp'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_vromdtp'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_vromdtp'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_vromdtp'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_vromdtp'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_vromdtp'] ?></td>
                                    <td><?=$value['vidsutnist_masky_vromdtp'] ?></td>
                                    <td>
                                        <a href="?edit=<?=$value['id'] ?>"  class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#vromdtp_editModal<?=$value['id'] ?>">
                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="20px" height="20px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                                        </a>
                                        <?php require './edit_modal/edit_vromdtp_modal.php'; ?>
                                    </td>
                                    <td>
                                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-id_vromdtp<?=$value['id'] ?>">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                                                width="20px" height="20px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">  
                                                <image id="image0" width="510" height="510" x="0" y="0" 
                                                    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAQAAABecRxxAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                                cwAADsQAAA7EAZUrDhsAAAAHdElNRQflCwUUAStk2yIfAAAOMklEQVR42u3de6ykdX3H8e9hAZVd
                                                VtDCat2CyxaRCKZqNVBgdcE2dUVLG8WWim1qaKMFbNL7P220ats0TRrTqzGhNfV2TFQoWq1FVCq3
                                                xtogaVkuRXGR3QBi1uNZ2WV3+gdtKXKWnefM5TfPfF6v+XOf7O8783vmfeZ2zlQBAAAAAAAAAAAA
                                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAIey0HoADmGhttYFtaWeVRtaj9LBrrqvvlifqM/XoPUo0F/n
                                                1E016PHlxjqr9U0IffW2eqT5XXjUyyP1261vRuijtze/847r8vutb0rom9fVgeZ33HFdDtTPtL45
                                                WZkXAWfT0+r22th6iDH6Zp1cy62H4IkOaz0AK7p0ru7+VT9Yb2k9AisRgNn0s60HGLs3tB6AlXgK
                                                MIs21H1ztzOD2lD3tx6C7+cRwCzaNHd3/6qF2tR6BJ5IAGZRnz7zN7xntx6AJxKAWXRk6wFcqxQC
                                                AMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBDm89ACO6sPH6i61vAEYhAH330dYD0GeeAkAwAYBg
                                                AgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMHm728C
                                                Hl8n1YaefxX1GR2OfX3rYSdyrWbR3tpVd9X9rccYr4XWA4zR2nprvaFePFfXidkyqC/XR+ova7n1
                                                IOMyP3eW19V76tmthyDCvXV5faz1EOOxpvUAY/L2+vM6uvUQhFhfF1bVF1qPMQ7zEYDfqHfN0WMZ
                                                Zt9CvaJ2142txxjHFem/c+raOQkZfbK/ttT1rYcYVf8DsFBfqjNbD0Gkm+uMGrQeYjT9/xzAVnd/
                                                GnlZvbz1CKPqfwB+uvUABLug9QCj6n8Azm49AMG2tB5gVP0PwMbWAxDsOa0HGFX/XwQ8MAfXgb4a
                                                9P1HaP/vPD1/FZae6/k9qOf9AkYhABBMACCYAEAwAYBgAgDBBACCCQAEEwCgxwZDX/rz93Np6/Ud
                                                zqqe8wgAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                                CQAEEwAIJgAQrOdfblxdvh78htrRelh6YWOdOfSxPb8H9Xz86hIAGL+e34M8BYBgAgDBBACCCQAE
                                                EwAIJgAQTAAgmABAMAGAYP0PwHdaD0Cw3a0HGFX/A3Bf6wEIdm/rAUbV/wDc0noAgn219QCj6n8A
                                                rmw9AME+0XqAUfX8d5mq6ui6s45vPQSRdtUP11LrIUazpvUAI9tbe2pb6yGI9Jt1fesRRtX/RwBV
                                                h9WVdX7rIYjz6Tq/9rceYlTzEICq9XVN/WjrIYjyr/XK/r8JOA8vAlZV7a4t9aHWQxDk7+vl83D3
                                                n5cAVO2pi+rH66bWYxDgxjqvLq49rccYj/l4CvCYTfWTtbmeVUeu8G9n1sYh/5cddUPrK8LYjbr/
                                                e2tn3VX/WF9rfUVYncUaDHlZbD0qE2D/VzAvTwGAVRAACCYAEEwAIJgAQDABgGACAMEEAIIJAAQT
                                                AAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                                IJgAQDABgGCHtx4g2No6qTZW1Y66q5atD5M1S98P/9q6qpb/b73lurLOn+ptkbj+LO0/DczKCbC5
                                                vrjiqp+vk6ZyO6SuPyv7TyOzcQJsqQcOuu79tWXit0Lu+rOx/zQzCyfAqfXtJ115d5020dsgef1Z
                                                2P+Z412AaXpqXV1Pf9Ijjq6P1VOsz7QIwDRdPsSz3JPrUuvD+LV+CLimdg21+s4JZTl9/db7P5M8
                                                Apies+r4oY7bUGdan+kQgOk5Z+gjJ/NaePr6rEAApuc5EzjS+oxEAKbnmUMfeZz1mQ4BmJ6FCRxp
                                                fUYiABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                                IJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGA
                                                YAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                                CQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgm
                                                ABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgA
                                                QDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIA
                                                wQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAE
                                                EwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBM
                                                ACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDAB
                                                gGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQA
                                                ggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAI
                                                JgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCY
                                                AEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwApuc7Qx+52/pM
                                                hwBMz31DH3mv9ZkOAZieW4Y+8qvWZzoEYHo+VQ8PddzD9RnrMx0CMD1L9ZGhjvtQh2fL1ochLdZg
                                                yMvihCY4sfYccu3l+qGJ3QLZ67ff/xnkEcA0fb3ecshjLq9vWB/GbzZ+ArzzSVf+g4nfCrnrz8b+
                                                08ysnABvPsgD4eX6xancDqnrz8r+08jsnAAn1N/V9x634vfqigk+97Z+1Szt/ww5vPUAM2lhwv//
                                                PfULdWm9qk6rjVX1jbq1Pj3VV74z15/0rjLj/nbonwBXtx6VCfjU0Pt/RetRpyfpXYCloY88uvWo
                                                TMDwuxr0OYSkAAy/rQIwj4bf1eF/VPReUgCG39aNrUdlAobf1aDfRkwKwPCPAI6rZ7QeljH7gXrm
                                                0Md6CjCXdnY49vmth2XMuuzortbDTk9SALZ3OPbFrYdlzLrsaJczpeeSAnB7HRj62K2th2XMzh36
                                                yAN1R+thmYyvD/1O8INRaZx/a+pbQ+/9f7UedpqyTvPbhj7yGfVjrYdljM6uY4c+NugJQFoAbu1w
                                                7JtaD8sYXdzh2C5nCb3y2qEfBg7q2/W01uMyJk+thzrs/Ktbj8ukPL0e6XAi/FLrcRmTSzrs+r5a
                                                33pcJufmDqfCnX5Xci6sqds77Pr1rcedrqzXAKo+1+HYzXVh63EZg5+vkzscfW3rcZmk8zr8LBjU
                                                3XVU64EZ0doOb/4OalCvaD0wk3RY7eh0Oryz9cCM6I877feOWtN6YCbrTzqdEA/Xaa0HZgQvrL2d
                                                9vuPWg/MpL2g0wkxqO3+OkBvra3/6Ljbp7cemcn7944nxQdbD8wqvb/jTn+59cBMw2UdT4tB/Vbr
                                                kVmF3+m8z7/aemSm4aja1fHEOOBDQb3zxjrQcZd3+uxnit/t/LNhX/1c66Hp4KLa53EeB7O+wy+H
                                                PvYo4Ndbj82QLqv9nff3QS/2JnlH5xNkUIP60zqi9eAcwpH1Z6va299rPTjTdEztXNVpcn2d0Hp0
                                                nsSJdeOq9vWbfgUozZtWdaIM6lt1SdxvUPTDYfUrq3hq9+jFKzxxFuoLqzxZBnVDvaT1+Hyfl9ZN
                                                q97Pa1oPTwsv6Pgx0cdfPltntL4C/I8X1WLnN/0euzxcp7a+ArTxrhECMKhBXVeX1DGtr0S0Y+qX
                                                619G3MV3tL4StHJEfWnEk2dQe+qqelud7sunp2qhXli/Vv9Qe0bev+uy/+xL+ml7Qn1lTF8Dtru2
                                                1/a6o5ZqqR5qfbXm1LG1rtbV8+qUOmVM79o/UC+qHa2vVkvpAajaVle7FUIN6oK6qvUQbfnzB3fU
                                                UXVW6yFo4g/rr1qP0JoAVF1Tz60faT0EU/fBuqwGrYdozYPfqqoj6sp6VeshmKp/rlfX3tZDtCcA
                                                jzqqPuvLwILcXOfVUushZoEPtT5quX6qvtJ6CKbk32qbu/+jBOB/PVBb6p9aD8EUXFtb68HWQ8wK
                                                AXjMUr2mFlsPwYR9vLbV7tZDzA7vAvx/++vjdVy9tPUYTMx76s21r/UQs0QAHm9Qn6y76yfqyNaD
                                                MHZ76q31bm/8PZ53AVby/Fr0F+LnzH/WhXVr6yFmj9cAVnJbnVFXtB6CMXpfvcTdfyUeARzc1voL
                                                vyk+B+6sS+szrYeYVV4DOLiv1XvrwTrb6wE9tqfeXRfV9tZj0F8n1eIq/si0S/vL/vpwPbf16cM8
                                                2Fx/s4ovmnBpeedf9PSNcdpc763l5ie2y6Ev362/rk2tT5e+8CJgF+vrgrq4zvXeyYw6UDfU++vD
                                                Puk3PAHo7sR6Y22rl2X/LbkZs69urk/WB+qe1oP0jQCs1rraUlvr3Drd14U1tK9uqc/VtXWd3+5b
                                                HQEY1RG1qU6tU+p5dUIdW2trXa2rY1sPNaceqqVaqu/WQ3VPba/tdVvd7ZP9AAAAAAAAAAAAAAAA
                                                AAAAAAAAAAAAAAAAAAAAAAAAAMCk/TfcobgN9qPfbAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0x
                                                MS0wNVQxNzowMTo0MyswMzowMHvBU6MAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMTEtMDVUMTc6
                                                MDE6NDMrMDM6MDAKnOsfAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJ
                                                RU5ErkJggg==" />
                                                </svg>
                                        </a>
                                        <?php require './delete_modal/delete_vromdtp_modal.php'; ?>   
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="TOR" role="tabpanel" aria-labelledby="TOR-tab">
                    <!-- TOR -->
                    <div class="container mt-3 mb-5 overflow-auto" style="height: 450px;">
                        <div class="row p-1">
                            <div class="col">
                                <legend>Звіт від ТОР</legend>
                            </div>
                           <!--  <div class="col">
                                <form  action="" class="d-flex">
                                    <input class="form-control me-2" type="search" name="search" placeholder="Введiть данi..." aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Пошук</button>
                                </form>
                            </div> -->
                        </div>
                        <table class="table table-bordered border-black-50 table-hover text-center">
                        
                        <thead>
                                <tr>
                                    <th rowspan="3" scope="col">id</th>
                                    <th rowspan="3" scope="col">Дата та час <br> відправлення звіту</th>
                                    <th rowspan="3" scope="col">Підрозділ</th>
                                    <th rowspan="3" scope="col">Прізвище</th>
                                    <th rowspan="3" scope="col">Зміна</th>
                                    <th colspan="7" scope="col">Порушення нових правил пасажирських перевезень</th>
                                    <th rowspan="2" colspan="4" scope="col">Нелегальні перевізники</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Редагувати строку</th>
                                    <th scope="col" rowspan="3"  class="transform-rotate-180">Видалити строку</th>
                                </tr>    
                                <tr>
                                    <th colspan="5" scope="col">На автотранспорті</th>
                                    <th colspan="2" scope="col">На залізничному транспорті</th>
                                    
                                </tr>   
                                <tr>
                                    <th scope="col"  class="transform-rotate-180">Задокументовано фактів <br>для складання протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Назва та місце <br> реєстрації перевізника</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок <br>(т/з, які здійснюють <br>міжобласні перевезення)</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>
                                    <th scope="col"  class="transform-rotate-180">Кількість субєктів <br>господарювання які відмовились<br> виконувати зобовязання <br> щодо перевезення</th>
                                    <th scope="col"  class="transform-rotate-180">Проведено перевірок</th>
                                    <th scope="col"  class="transform-rotate-180">Складено протоколів</th>

                                    <th scope="col"  class="transform-rotate-180">Перевірено транспортних засобів,<br> які використовуються для надання<br> послуг з перевезення пасажирів</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 164 КУпАП <br>(відсутність ліцензії <br>на перевезення пасажирів)</th>
                                    <th scope="col"  class="transform-rotate-180">За ч.2 ст. 140 КУпАП<br>(відсутність паспорта <br>автобусного маршруту <br>погодженого уповноваженим <br> підрозділом НПУ)</th>
                                    <th scope="col"  class="transform-rotate-180">За ст. 44-3 КУпАП <br>(На водія або пасажира,<br> відсутність маски)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result_tor as $value) { ?>
                                <tr>
                                    <td><?=$value['id'] ?></td>
                                    <td><?=$value['date_tor'] ?></td>
                                    <td><?=$tor ?></td>
                                    <td><?=$value['name_user_tor'] ?></td>
                                    <td><?=$value['zmina_tor'] ?></td>
                                    <td><?=$value['total_facts_tor'] ?></td>
                                    <td><?=$value['name_carrier_tor'] ?></td>
                                    <td><?=$value['provedeno_perevirok_tor'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_tor'] ?></td>
                                    <td><?=$value['subyekty_yaki_vidmovylys_tor'] ?></td>
                                    <td><?=$value['provedeno_perevirok_zd_tor'] ?></td>
                                    <td><?=$value['skladeno_protokoliv_zd_tor'] ?></td>
                                    <td><?=$value['illegal_carriers_checked_tor'] ?></td>
                                    <td><?=$value['vidsutnist_litsenziyi_tor'] ?></td>
                                    <td><?=$value['vidsutnist_marshrutu_tor'] ?></td>
                                    <td><?=$value['vidsutnist_masky_tor'] ?></td>
                                    <td>
                                        <a href="?edit=<?=$value['id'] ?>"  class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#tor_editModal<?=$value['id'] ?>">
                                            <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="20px" height="20px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                                        </a>
                                        <?php require './edit_modal/edit_tor_modal.php'; ?>
                                    </td>
                                    <td>
                                    <a href="?delete=<?=$value['id'] ?>" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-id_tor<?=$value['id'] ?>">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" 
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                                                width="20px" height="20px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">  
                                                <image id="image0" width="510" height="510" x="0" y="0" 
                                                    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAQAAABecRxxAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZ
                                                cwAADsQAAA7EAZUrDhsAAAAHdElNRQflCwUUAStk2yIfAAAOMklEQVR42u3de6ykdX3H8e9hAZVd
                                                VtDCat2CyxaRCKZqNVBgdcE2dUVLG8WWim1qaKMFbNL7P220ats0TRrTqzGhNfV2TFQoWq1FVCq3
                                                xtogaVkuRXGR3QBi1uNZ2WV3+gdtKXKWnefM5TfPfF6v+XOf7O8783vmfeZ2zlQBAAAAAAAAAAAA
                                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAIey0HoADmGhttYFtaWeVRtaj9LBrrqvvlifqM/XoPUo0F/n
                                                1E016PHlxjqr9U0IffW2eqT5XXjUyyP1261vRuijtze/847r8vutb0rom9fVgeZ33HFdDtTPtL45
                                                WZkXAWfT0+r22th6iDH6Zp1cy62H4IkOaz0AK7p0ru7+VT9Yb2k9AisRgNn0s60HGLs3tB6AlXgK
                                                MIs21H1ztzOD2lD3tx6C7+cRwCzaNHd3/6qF2tR6BJ5IAGZRnz7zN7xntx6AJxKAWXRk6wFcqxQC
                                                AMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBDm89ACO6sPH6i61vAEYhAH330dYD0GeeAkAwAYBg
                                                AgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMHm728C
                                                Hl8n1YaefxX1GR2OfX3rYSdyrWbR3tpVd9X9rccYr4XWA4zR2nprvaFePFfXidkyqC/XR+ova7n1
                                                IOMyP3eW19V76tmthyDCvXV5faz1EOOxpvUAY/L2+vM6uvUQhFhfF1bVF1qPMQ7zEYDfqHfN0WMZ
                                                Zt9CvaJ2142txxjHFem/c+raOQkZfbK/ttT1rYcYVf8DsFBfqjNbD0Gkm+uMGrQeYjT9/xzAVnd/
                                                GnlZvbz1CKPqfwB+uvUABLug9QCj6n8Azm49AMG2tB5gVP0PwMbWAxDsOa0HGFX/XwQ8MAfXgb4a
                                                9P1HaP/vPD1/FZae6/k9qOf9AkYhABBMACCYAEAwAYBgAgDBBACCCQAEEwCgxwZDX/rz93Np6/Ud
                                                zqqe8wgAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                                CQAEEwAIJgAQrOdfblxdvh78htrRelh6YWOdOfSxPb8H9Xz86hIAGL+e34M8BYBgAgDBBACCCQAE
                                                EwAIJgAQTAAgmABAMAGAYP0PwHdaD0Cw3a0HGFX/A3Bf6wEIdm/rAUbV/wDc0noAgn219QCj6n8A
                                                rmw9AME+0XqAUfX8d5mq6ui6s45vPQSRdtUP11LrIUazpvUAI9tbe2pb6yGI9Jt1fesRRtX/RwBV
                                                h9WVdX7rIYjz6Tq/9rceYlTzEICq9XVN/WjrIYjyr/XK/r8JOA8vAlZV7a4t9aHWQxDk7+vl83D3
                                                n5cAVO2pi+rH66bWYxDgxjqvLq49rccYj/l4CvCYTfWTtbmeVUeu8G9n1sYh/5cddUPrK8LYjbr/
                                                e2tn3VX/WF9rfUVYncUaDHlZbD0qE2D/VzAvTwGAVRAACCYAEEwAIJgAQDABgGACAMEEAIIJAAQT
                                                AAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                                IJgAQDABgGCHtx4g2No6qTZW1Y66q5atD5M1S98P/9q6qpb/b73lurLOn+ptkbj+LO0/DczKCbC5
                                                vrjiqp+vk6ZyO6SuPyv7TyOzcQJsqQcOuu79tWXit0Lu+rOx/zQzCyfAqfXtJ115d5020dsgef1Z
                                                2P+Z412AaXpqXV1Pf9Ijjq6P1VOsz7QIwDRdPsSz3JPrUuvD+LV+CLimdg21+s4JZTl9/db7P5M8
                                                Apies+r4oY7bUGdan+kQgOk5Z+gjJ/NaePr6rEAApuc5EzjS+oxEAKbnmUMfeZz1mQ4BmJ6FCRxp
                                                fUYiABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwA
                                                IJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGA
                                                YAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACC
                                                CQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgm
                                                ABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgA
                                                QDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIA
                                                wQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAE
                                                EwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBM
                                                ACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDAB
                                                gGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQA
                                                ggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCYAEAwAYBgAgDBBACCCQAEEwAI
                                                JgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwAIJgAQDABgGACAMEEAIIJAAQTAAgmABBMACCY
                                                AEAwAYBgAgDBBACCCQAEEwAIJgAQTAAgmABAMAGAYAIAwQQAggkABBMACCYAEEwApuc7Qx+52/pM
                                                hwBMz31DH3mv9ZkOAZieW4Y+8qvWZzoEYHo+VQ8PddzD9RnrMx0CMD1L9ZGhjvtQh2fL1ochLdZg
                                                yMvihCY4sfYccu3l+qGJ3QLZ67ff/xnkEcA0fb3ecshjLq9vWB/GbzZ+ArzzSVf+g4nfCrnrz8b+
                                                08ysnABvPsgD4eX6xancDqnrz8r+08jsnAAn1N/V9x634vfqigk+97Z+1Szt/ww5vPUAM2lhwv//
                                                PfULdWm9qk6rjVX1jbq1Pj3VV74z15/0rjLj/nbonwBXtx6VCfjU0Pt/RetRpyfpXYCloY88uvWo
                                                TMDwuxr0OYSkAAy/rQIwj4bf1eF/VPReUgCG39aNrUdlAobf1aDfRkwKwPCPAI6rZ7QeljH7gXrm
                                                0Md6CjCXdnY49vmth2XMuuzortbDTk9SALZ3OPbFrYdlzLrsaJczpeeSAnB7HRj62K2th2XMzh36
                                                yAN1R+thmYyvD/1O8INRaZx/a+pbQ+/9f7UedpqyTvPbhj7yGfVjrYdljM6uY4c+NugJQFoAbu1w
                                                7JtaD8sYXdzh2C5nCb3y2qEfBg7q2/W01uMyJk+thzrs/Ktbj8ukPL0e6XAi/FLrcRmTSzrs+r5a
                                                33pcJufmDqfCnX5Xci6sqds77Pr1rcedrqzXAKo+1+HYzXVh63EZg5+vkzscfW3rcZmk8zr8LBjU
                                                3XVU64EZ0doOb/4OalCvaD0wk3RY7eh0Oryz9cCM6I877feOWtN6YCbrTzqdEA/Xaa0HZgQvrL2d
                                                9vuPWg/MpL2g0wkxqO3+OkBvra3/6Ljbp7cemcn7944nxQdbD8wqvb/jTn+59cBMw2UdT4tB/Vbr
                                                kVmF3+m8z7/aemSm4aja1fHEOOBDQb3zxjrQcZd3+uxnit/t/LNhX/1c66Hp4KLa53EeB7O+wy+H
                                                PvYo4Ndbj82QLqv9nff3QS/2JnlH5xNkUIP60zqi9eAcwpH1Z6va299rPTjTdEztXNVpcn2d0Hp0
                                                nsSJdeOq9vWbfgUozZtWdaIM6lt1SdxvUPTDYfUrq3hq9+jFKzxxFuoLqzxZBnVDvaT1+Hyfl9ZN
                                                q97Pa1oPTwsv6Pgx0cdfPltntL4C/I8X1WLnN/0euzxcp7a+ArTxrhECMKhBXVeX1DGtr0S0Y+qX
                                                619G3MV3tL4StHJEfWnEk2dQe+qqelud7sunp2qhXli/Vv9Qe0bev+uy/+xL+ml7Qn1lTF8Dtru2
                                                1/a6o5ZqqR5qfbXm1LG1rtbV8+qUOmVM79o/UC+qHa2vVkvpAajaVle7FUIN6oK6qvUQbfnzB3fU
                                                UXVW6yFo4g/rr1qP0JoAVF1Tz60faT0EU/fBuqwGrYdozYPfqqoj6sp6VeshmKp/rlfX3tZDtCcA
                                                jzqqPuvLwILcXOfVUushZoEPtT5quX6qvtJ6CKbk32qbu/+jBOB/PVBb6p9aD8EUXFtb68HWQ8wK
                                                AXjMUr2mFlsPwYR9vLbV7tZDzA7vAvx/++vjdVy9tPUYTMx76s21r/UQs0QAHm9Qn6y76yfqyNaD
                                                MHZ76q31bm/8PZ53AVby/Fr0F+LnzH/WhXVr6yFmj9cAVnJbnVFXtB6CMXpfvcTdfyUeARzc1voL
                                                vyk+B+6sS+szrYeYVV4DOLiv1XvrwTrb6wE9tqfeXRfV9tZj0F8n1eIq/si0S/vL/vpwPbf16cM8
                                                2Fx/s4ovmnBpeedf9PSNcdpc763l5ie2y6Ev362/rk2tT5e+8CJgF+vrgrq4zvXeyYw6UDfU++vD
                                                Puk3PAHo7sR6Y22rl2X/LbkZs69urk/WB+qe1oP0jQCs1rraUlvr3Drd14U1tK9uqc/VtXWd3+5b
                                                HQEY1RG1qU6tU+p5dUIdW2trXa2rY1sPNaceqqVaqu/WQ3VPba/tdVvd7ZP9AAAAAAAAAAAAAAAA
                                                AAAAAAAAAAAAAAAAAAAAAAAAAMCk/TfcobgN9qPfbAAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMS0x
                                                MS0wNVQxNzowMTo0MyswMzowMHvBU6MAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjEtMTEtMDVUMTc6
                                                MDE6NDMrMDM6MDAKnOsfAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJ
                                                RU5ErkJggg==" />
                                                </svg>
                                        </a>
                                        <?php require './delete_modal/delete_tor_modal.php'; ?>  
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                    
                        <div class="d-flex flex-row">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreatedAnnouncementModal">                                                                              <!--            
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                    fill="#fff" stroke="none">
                                        <path d="M3394 4685 c-134 -29 -85 7 -1079 -797 l-440 -357 -230 -61 c-291
                                        -78 -352 -106 -461 -215 -100 -99 -156 -205 -181 -339 l-16 -86 -41 -11 c-201
                                        -52 -283 -94 -373 -193 -29 -31 -66 -85 -82 -119 -68 -143 -71 -256 -11 -483
                                        52 -197 70 -242 126 -321 135 -190 359 -257 623 -189 57 15 107 23 111 19 4
                                        -4 24 -29 45 -56 85 -107 244 -196 388 -219 l74 -11 99 -345 c68 -238 107
                                        -359 126 -387 86 -130 290 -120 368 17 43 75 36 129 -69 483 -50 170 -87 312
                                        -83 316 20 18 179 51 221 45 223 -28 1615 -176 1664 -176 220 0 424 151 499
                                        368 18 53 23 88 22 167 0 99 -2 107 -337 1355 -247 920 -346 1272 -370 1320
                                        -104 209 -357 326 -593 275z m165 -439 c15 -8 32 -26 39 -41 18 -40 662 -2449
                                        662 -2477 0 -35 -35 -76 -72 -86 -20 -5 -134 4 -317 24 -157 17 -504 55 -771
                                        84 l-485 53 -194 724 c-107 398 -192 725 -190 727 31 28 1221 986 1235 994 26
                                        16 60 15 93 -2z m-1561 -1833 c95 -355 169 -649 165 -654 -15 -14 -242 -69
                                        -287 -69 -25 0 -57 5 -73 11 -33 12 -89 64 -108 99 -7 14 -70 239 -140 500
                                        -141 527 -143 536 -89 613 16 22 45 50 63 61 32 18 246 83 281 85 12 1 55
                                        -149 188 -646z m-866 -229 c32 -119 56 -219 53 -223 -2 -4 -37 -16 -78 -26
                                        -64 -16 -79 -17 -106 -5 -41 17 -52 39 -95 200 -39 143 -40 174 -3 208 17 16
                                        125 55 167 61 3 1 31 -96 62 -215z"/>
                                        </g>
                                </svg> &nbsp;&nbsp;<legend></legend>-->
                            
                            Створити оголошення на Головнiй</button>
                               
                            
                             <div class="badge bg-light text-wrap m-1" style="width: 6rem;">
                                <a href="edit-announcemen.php"  class=" text-dark fw-normal" style="text-decoration: none;">
                                Редагувати або Видалити
                                </a>
                            </div> 
                            
                        </div>
                        <hr>
                        <!-- Modal -->
                        <div class="modal fade" id="CreatedAnnouncementModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Створити оголошення на Головнiй</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <form action="admin.php"  method="post">
                                                <div class="mb-3">
                                                    <label for="announcementTitle" class="form-label">Заголовок оголошення:</label>
                                                    <input type="text" class="form-control" name="title_announcement" id="announcementTitle" placeholder="Введiть оголошення...">
                                                </div> 
                                                <div class="mb-3">
                                                    <label for="AnnouncementTextarea" class="form-label">Текст оголошення:</label>
                                                    <textarea class="form-control" name="txt_announcement" id="AnnouncementTextarea" rows="3"></textarea>
                                                </div>
                                            
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                                                <button type="submit" name="submit_announcement" class="btn btn-primary">Зберегти</button>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>     
               
                    
                        <div class="d-flex flex-row">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                               <!-- <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 512.000000 512.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                    fill="#fff" stroke="none">
                                    <path d="M485 5104 c-45 -23 -76 -55 -96 -99 -18 -39 -19 -128 -19 -2445 0
                                    -2305 1 -2407 19 -2445 23 -51 81 -102 123 -110 18 -3 952 -4 2075 -3 l2041 3
                                    39 31 c21 16 48 50 61 74 l22 44 0 2406 0 2406 -23 44 c-12 24 -39 58 -60 74
                                    l-39 31 -2056 2 c-1850 3 -2060 1 -2087 -13z m3865 -2544 l0 -2160 -1790 0
                                    -1790 0 0 2160 0 2160 1790 0 1790 0 0 -2160z"/>
                                    <path d="M1320 3505 l0 -365 365 0 365 0 0 365 0 365 -365 0 -365 0 0 -365z
                                    m627 159 c11 -18 -2 -34 -157 -189 l-170 -170 -107 107 -107 107 29 31 c16 16
                                    34 30 40 30 6 0 40 -29 75 -65 35 -36 69 -65 75 -65 6 0 69 58 140 130 118
                                    119 131 128 149 117 11 -8 25 -22 33 -33z"/>
                                    <path d="M2190 3510 l0 -200 830 0 830 0 0 200 0 200 -830 0 -830 0 0 -200z"/>
                                    <path d="M1320 2565 l0 -365 365 0 365 0 0 365 0 365 -365 0 -365 0 0 -365z
                                    m627 159 c11 -18 -2 -34 -157 -189 l-170 -170 -107 107 -107 107 29 31 c16 16
                                    34 30 40 30 6 0 40 -29 75 -65 35 -36 69 -65 75 -65 6 0 69 58 140 130 118
                                    119 131 128 149 117 11 -8 25 -22 33 -33z"/>
                                    <path d="M2190 2570 l0 -200 830 0 830 0 0 200 0 200 -830 0 -830 0 0 -200z"/>
                                    <path d="M1320 1605 l0 -365 365 0 365 0 0 365 0 365 -365 0 -365 0 0 -365z"/>
                                    <path d="M2190 1605 l0 -205 830 0 830 0 0 205 0 205 -830 0 -830 0 0 -205z"/>
                                    </g>
                                </svg><legend></legend>-->
                                
                            
                            Створити завдання черговому</button>
                        </div>
                        <hr>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Поставити завдання</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                            <form action="admin.php"  method="post">
                                                <div class="mb-3">
                                                    <label for="Task" class="form-label">Заголовок завдання:</label>
                                                    <input type="text" class="form-control" name="title" id="Task" placeholder="Введiть заголовок...">
                                                </div> 
                                                <div class="mb-3">
                                                    <label for="TxtTextarea" class="form-label">Текст завдання:</label>
                                                    <textarea class="form-control" name="textarea" id="TxtTextarea" rows="3"></textarea>
                                                </div>
                                            
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                                                <button type="submit" name="submit_task" class="btn btn-primary">Зберегти</button>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <table class="table  table-borderless">                       
                            <?php foreach ($result_task as $value) { ?>
                                <tr>
                                    <td colspan="3">
                                        <input type="checkbox" > 
                                        <span class="strike  fs-5">&nbsp;&nbsp;<?=$value['title'] ?></span><br>
                                        <span class="strike  fs-6">&nbsp;&nbsp;<?=$value['txt'] ?> </span>
                                    </td>
                                </tr>
                               <!-- <tr>
                                    <td  colspan="3" class="text-break" style="text-align: justify">
                                        <?=$value['txt'] ?> 
                                    </td>
                                </tr>-->
                                <tr class="border-bottom">
                                    <td class="w-75">
                                        <?=$value['date'] ?>
                                    </td>
                                    <td class="text-end">    
                                        <a href="?edit=<?=$value['id'] ?>"  class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#editModal_task<?=$value['id'] ?>">
                                                    Редагувати 
                                        </a>
                                        <?php require './edit_modal/edit_task_modal.php'; ?>
                                    </td>
                                    <td class="text-end">
                                        <a href="?delete=<?=$value['id'] ?>" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-id_task<?=$value['id'] ?>">
                                                    Видалити 
                                        </a>
                                        <?php require './delete_modal/delete_task_modal.php'; ?>
                                    </td> 
                                </tr>                                                 
                        <?php } ?> 
                    </table>         
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="list-group mb-3">
                        <span class="list-group-item list-group-item-action  list-group-item-secondary" aria-current="true">
                            Звіти "Нелегальних перевізників - 2021":
                        </span>
                        <a href="https://docs.google.com/spreadsheets/d/1HmGr5BIcYOi4znlRFa8sX985McZLRRQjIhav0ZFELxk/edit#gid=1441113514" class="list-group-item list-group-item-action text-primary">
                            <u>Нелегальні перевізники - <b>Жовтень</b></u>
                        </a>
                        <a href="https://docs.google.com/spreadsheets/d/1HmGr5BIcYOi4znlRFa8sX985McZLRRQjIhav0ZFELxk/edit#gid=116997684" class="list-group-item list-group-item-action text-primary">
                            <u>Нелегальні перевізники - <b>Листопад</b> </u>
                        </a>
                        <a href="https://docs.google.com/spreadsheets/d/1HmGr5BIcYOi4znlRFa8sX985McZLRRQjIhav0ZFELxk/edit#gid=1573527860" class="list-group-item list-group-item-action text-primary">
                            <u>Нелегальні перевізники - <b>Грудень</b> </u>
                        </a>
                        <a href="https://docs.google.com/spreadsheets/d/1HmGr5BIcYOi4znlRFa8sX985McZLRRQjIhav0ZFELxk/edit#gid=1783185759" class="list-group-item list-group-item-action text-primary">
                            <u>Нелегальні перевізники - <b>Всього 2021</b> </u>
                        </a>
                        <span class="list-group-item list-group-item-action  list-group-item-secondary" aria-current="true">
                            Звіти "Нелегальних перевізників - 2022":
                        </span>
                        <a href="https://docs.google.com/spreadsheets/d/1CTgIv9w4XM0tiwxwWkHGfriwx921514I7qZdJJRJY9M/edit#gid=0" class="list-group-item list-group-item-action text-primary">
                            <u>Нелегальні перевізники - <b>Січень</b></u>
                        </a>
                        <a href="https://docs.google.com/spreadsheets/d/1CTgIv9w4XM0tiwxwWkHGfriwx921514I7qZdJJRJY9M/edit#gid=398900097" class="list-group-item list-group-item-action text-primary">
                            <u>Нелегальні перевізники - <b>Лютий</b></u>
                        </a>
                        <a href="https://docs.google.com/spreadsheets/d/1CTgIv9w4XM0tiwxwWkHGfriwx921514I7qZdJJRJY9M/edit#gid=1355878239" class="list-group-item list-group-item-action text-primary">
                            <u>Нелегальні перевізники - <b>Березень</b></u>
                        </a>
                    </div>

                    <ul class="list-group">
                        <li class="list-group-item list-group-item-secondary">
                            <a href="https://upp-zp.pp.ua/" >
                                <u>Телефонний Довідник</u>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <?php
    $file =@file('./tmp/counter.txt');
    $count = @implode("", $file);
    $count++;
    $myFile = fopen('./tmp/counter.txt', 'w');
    fputs($myFile, $count);
    fclose($myFile);

    $filename = './tmp/ip.txt';
    $ip = ($_SERVER["REMOTE_ADDR"]); // Определяем IP посетителя
    file_put_contents($filename, date('[Y-m-d H:i:s]' ) . " | Просмотры: " . $count . " | ip: " . $ip . PHP_EOL, FILE_APPEND | LOCK_EX);
    ?>

    <div class="container p-3 mb-3 bg-light text-secondary">
        <p class="mb-0">
        <svg version="1.1" fill="rgba(0,0,0,.55)" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" width="23px" height="23px" viewBox="0 0 456.795 456.795"
                style="enable-background:new 0 0 456.795 456.795;" xml:space="preserve">
                <g>
                    <g>
                        <path d="M448.947,218.475c-0.922-1.168-23.055-28.933-61-56.81c-50.705-37.253-105.877-56.944-159.551-56.944
                            c-53.672,0-108.844,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.397l7.846,9.923
                            c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.879,56.943,159.551,56.943c53.673,0,108.845-19.691,159.55-56.943
                            c37.945-27.877,60.078-55.643,61-56.811l7.848-9.923L448.947,218.475z M228.396,315.039c-47.774,0-86.642-38.867-86.642-86.642
                            c0-7.485,0.954-14.751,2.747-21.684l-19.781-3.329c-1.938,8.025-2.966,16.401-2.966,25.013c0,30.86,13.182,58.696,34.204,78.187
                            c-27.061-9.996-50.072-24.023-67.439-36.709c-21.516-15.715-37.641-31.609-46.834-41.478c9.197-9.872,25.32-25.764,46.834-41.478
                            c17.367-12.686,40.379-26.713,67.439-36.71l13.27,14.958c15.498-14.512,36.312-23.412,59.168-23.412
                            c47.774,0,86.641,38.867,86.641,86.642C315.037,276.172,276.17,315.039,228.396,315.039z M368.273,269.875
                            c-17.369,12.686-40.379,26.713-67.439,36.709c21.021-19.49,34.203-47.326,34.203-78.188s-13.182-58.697-34.203-78.188
                            c27.061,9.997,50.07,24.024,67.439,36.71c21.516,15.715,37.641,31.609,46.834,41.477
                            C405.91,238.269,389.787,254.162,368.273,269.875z"></path>
                        <path d="M173.261,211.555c-1.626,5.329-2.507,10.982-2.507,16.843c0,31.834,25.807,57.642,57.642,57.642
                            c31.834,0,57.641-25.807,57.641-57.642s-25.807-57.642-57.641-57.642c-15.506,0-29.571,6.134-39.932,16.094l28.432,32.048
                            L173.261,211.555z"></path>
                    </g>
                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
            </svg>
        <span><?= $count ?></span> </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="./assets/libs/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
</body>

</html>