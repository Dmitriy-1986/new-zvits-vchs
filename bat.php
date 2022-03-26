<?php
include 'func.php';

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
</head>

<body>

    <div class="container-fluid mt-3">
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
                                <a class="nav-link active" href="bat.php">бат</a>
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
                        <a  href="admin.php">
                            <button type="button" class=" btn btn-success my-3 my-md-0 ms-md-3">Увійти</button>
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

        <!-- Forms -->
        <div class="container mt-3 mb-5">
        
            <form  action="submit.php" method="post">
                <legend>Звіт від Батальйону</legend>
                
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Вибрати батальйон</label>

                    <select id="disabledSelect"  name="number_bat"  class="form-select">
                        <option>Батальйон</option>
                        <option>Батальйон №1</option>
                        <option>Батальйон №2</option>
                        <option>Батальйон №3</option>
                        <option>Батальйон №4</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">
                        Ваше прізвище
                    </label>
                    <input type="text" name="name_user_bat" class="form-control" placeholder="Прізвище" required>
                </div>
               
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Вибрати зміну</label>

                    <select id="disabledSelect"  name="zmina_bat" class="form-select">
                        <option>Зміна</option>
                        <option>Зміна №1</option>
                        <option>Зміна №2</option>
                    </select>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <legend>Порушення нових правил пасажирських перевезень</legend>
                            <h6><u>На автотранспорті</u></h6>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Задокументовано фактів для складання
                                    протоколів</label>

                                <select id="disabledSelect" name="total_facts_bat" class="form-select">  
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Назва та місце реєстрації
                                    перевізника</label>

                                <input type="text" name="name_carrier_bat" class="form-control" placeholder="ТОВ 'Автосвіт ЛТД' м.Коростень">
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Проведено перевірок (т/з, які
                                    здійснюють
                                    міжобласні перевезення)</label>

                                <select id="disabledSelect" name="provedeno_perevirok_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Складено протоколів</label>

                                <select id="disabledSelect" name="skladeno_protokoliv_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">
                                    Кількість субєктів господарювання які відмовились
                                    виконувати зобовязання щодо перевезення
                                </label>

                                <select id="disabledSelect" name="subyekty_yaki_vidmovylys_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>
                            <h6><u>На залізничному транспорті</u></h6>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">
                                    Проведено перевірок
                                </label>

                                <select id="disabledSelect" name="provedeno_perevirok_zd_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="disabledSelect"  class="form-label">
                                    Складено протоколів
                                </label>

                                <select id="disabledSelect" name="skladeno_protokoliv_zd_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                </select>
                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <legend>Нелегальні перевізники</legend>

                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        Перевірено транспортних засобів, які використовуються для
                                        надання послуг з перевезення пасажирів
                                    </label>

                                    <select id="disabledSelect" name="illegal_carriers_checked_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">
                                        За ст. 164 КУпАП (відсутність ліцензії на перевезення пасажирів)
                                    </label>

                                    <select id="disabledSelect" name="vidsutnist_litsenziyi_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        За ч.2 ст. 140 КУпАП (відсутність паспорта автобусного маршруту погодженого
                                        уповноваженим підрозділомНПУ)
                                    </label>

                                    <select id="disabledSelect" name="vidsutnist_marshrutu_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">
                                        За ст. 44-3 КУпАП (На водія або пасажира, відсутність маски)
                                    </label>

                                    <select id="disabledSelect" name="vidsutnist_masky_bat" class="form-select">
                                    <script>
                                        for (var d = 0; d <= 100; d++) {
                                            document.write("<option>" + d + "</option>");
                                        }
                                    </script>
                                    </select>
                                </div>

                        </div>
                    </div>

                    <button type="submit" name="submit_bat"  class="btn btn-primary w-100">Відправити</button>
                
            </form>
        </div>
        </div>

    </div>

    <?php require_once "footer.php" ?>

    <script src="./assets/libs/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
</body>

</html>