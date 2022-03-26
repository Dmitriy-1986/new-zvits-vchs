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
                                <a class="nav-link active" aria-current="page" href="index.php">головна</a>
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
            
            <?php foreach ($result_announcement as $value) { ?>
              
                    <table  class="table">
                
                    <tr colspan="3">
                    <h5><?=$value['title_announcement'] ?></h5>
                    </tr> 
                    <tr  colspan="3">
                        <?=$value['txt_announcement'] ?> 
                    </tr>
                    <tr>
                        <td  class="w-100">
                        </td>    
                        
                        <td class="text-end"> 
                            <a href="?edit=<?=$value['id'] ?>"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editAnnouncemenModal<?=$value['id'] ?>">                                                                               
                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="20px" height="20px"><path d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z"/></svg>
                            </a>
                            <?php require './edit_modal/edit_announcement_modal.php'; ?>
                        </td>
                        <td class="text-end">
                            <a href="?delete=<?=$value['id'] ?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-id_announcement<?=$value['id'] ?>">                           
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    width="20" height="20" viewBox="0 0 512.000000 512.000000"
                                    preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                    fill="#fff" stroke="none">
                                    <path d="M2070 4736 c-118 -33 -212 -111 -267 -224 l-38 -76 -3 -163 -3 -163
                                    -581 0 c-647 0 -625 2 -674 -69 -33 -49 -34 -134 -1 -181 47 -70 61 -75 242
                                    -78 l164 -3 5 -52 c4 -29 47 -671 96 -1427 71 -1086 93 -1390 108 -1445 29
                                    -109 87 -210 167 -290 79 -79 150 -124 257 -163 l73 -27 917 -3 c1016 -3 994
                                    -4 1131 62 177 86 314 257 357 449 5 23 47 656 94 1407 47 751 88 1393 92
                                    1427 l5 61 164 4 c147 3 166 5 192 24 50 37 73 81 73 142 0 68 -27 115 -81
                                    142 -37 19 -61 20 -618 20 l-579 0 -4 163 -3 163 -38 76 c-56 115 -150 192
                                    -272 224 -69 19 -908 18 -975 0z m913 -337 c42 -19 51 -47 55 -171 l4 -118
                                    -482 0 -482 0 4 118 c4 122 13 151 53 171 29 14 817 14 848 0z m892 -632 c2
                                    -1 -37 -632 -85 -1402 -65 -1029 -92 -1411 -103 -1443 -34 -97 -115 -176 -212
                                    -207 -45 -14 -151 -15 -935 -13 l-885 3 -46 23 c-73 35 -125 87 -159 156 l-31
                                    63 -79 1339 c-43 736 -81 1375 -85 1418 l-6 79 1312 -6 c722 -4 1313 -8 1314
                                    -10z"/>
                                    <path d="M1860 3249 c-14 -5 -36 -20 -48 -32 -54 -50 -52 -6 -52 -977 0 -998
                                    -4 -933 66 -987 53 -40 135 -40 188 0 70 54 66 -12 66 990 l0 904 -22 33 c-13
                                    18 -35 42 -50 53 -31 23 -111 32 -148 16z"/>
                                    <path d="M2500 3249 c-14 -5 -36 -20 -48 -32 -54 -50 -52 -6 -52 -977 0 -998
                                    -4 -933 66 -987 53 -40 135 -40 188 0 70 54 66 -12 66 990 l0 904 -22 33 c-13
                                    18 -35 42 -50 53 -31 23 -111 32 -148 16z"/>
                                    <path d="M3140 3249 c-14 -5 -36 -20 -48 -32 -54 -50 -52 -6 -52 -977 0 -998
                                    -4 -933 66 -987 31 -23 47 -28 94 -28 47 0 63 5 94 28 70 54 66 -12 66 990 l0
                                    904 -22 33 c-13 18 -35 42 -50 53 -31 23 -111 32 -148 16z"/>
                                    </g>
                                </svg>
                            </a>
                            <?php require './delete_modal/delete_announcement_modal.php'; ?>
                        </td> 
                    </tr>
                </table>                                                          
            <?php } ?> 
           

            <ul class="pagination">
                <li class="page-item"><a  class="page-link" href="?pageno=1">Перша</a></li>
                <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                    <a  class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Попередня</a>
                </li>
                <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                    <a class="page-link"  href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Наступна</a>
                </li>
                <li><a class="page-link"  href="?pageno=<?php echo $total_pages; ?>">Остання</a></li>
            </ul>
        </div>
        
    </div>

    <?php require_once "footer.php" ?>

    <script src="./assets/libs/bootstrap-5.0.2/js/bootstrap.bundle.js"></script>
</body>

</html>