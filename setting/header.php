<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="<?=$root?>css/header/header.css" />
        <link rel="stylesheet" type="text/css" href="<?=$root?>css/header/mainContents.css" />
        <link rel="stylesheet" type="text/css" href="<?=$root?>css/header/main.css?v=<?=time()?>" />
        <script type="text/javascript" src="<?=$root?>js/jquery-2.0.0.min.js"></script>
        <script type="text/javascript" src="<?=$root?>css/all/bootstrap.bundle.min.js"></script>
        
        <!-- <script type="text/javascript" src="<?=$root?>setting/js/main.js"></script> -->
        <script type="text/javascript" src="<?=$root?>setting/js/polyfill.js"></script>
        <script type="text/javascript" src="<?=$root?>setting/js/runtime.js"></script>
        <script type="text/javascript" src="<?=$root?>setting/js/script.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?=$root?>css/all/bootstrap.min.css"></link>
        
    </head>

        
        <nav role="navigation" aria-label="main navigation" class="navbar is-fixed-top is-size-7 is-hidden-print navbar">
        <div class="container">
            <div class="navbar-brand">
                <?
                $main = $root."page";
                if($root=="../"){$main="#";}?>
                <a class="navbar-item has-text-centered-mobile" href="<?=$main?>">
                    <img src="<?=$root?>style/logo2.png" width="130"  align="middle">
                </a>
                <a role="button" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" class="navbar-burger burger is-active">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="main-menu" class="navbar-menu is-active">
                <div class="navbar-start has-text-centered-mobile is-size-6-mobile">
                    <?
                    $que="select * from pageMenu";
                    $res=mysql_query($que);
                    while($row=mysql_fetch_array($res)){
                    ?>
                        <a class="navbar-item menuItem" href="<?=$root."page/".$row['pageDir']?>"><?=$row['menuName']?></a>
                    <?}?>
                </div>
                <hr class="navbar-divider">
                <div class="navbar-end has-text-centered-mobile is-size-6-mobile">
                <?if($_SESSION['USER_NAME']!=""){ //만약 사용자명이 존재하면 logout 버튼 표시?>
                    <a class="navbar-item menuItem" href="<?=$root?>logout_ok.php"> Logout </a>
                <?}?>
                </div>
                <?if($_SESSION['USER_NAME']==""){ //사용자 명이 없으면 로그인 페이지 작동하도록
                    $who ="<strong>Log in</strong>";
                    $location = $root;
                }else{//사용자 존재하면 마이 페이지 작동하도록
                    $who ="<strong>".$_SESSION['USER_NAME']."</strong>";
                    $location = $root."page/mypage/";
                }
                ?>
                <div class="navbar-item">
                    <app-loginpopper>
                        <div style="cursor: pointer; display: inline;">
                        
                            <a href="<?=$location?>" class="button is-fullwidth is-primary is-small is-rounded menuItem">
                                <span class="icon is-small">
                                    <svgicon name="user" color="white" _nghost-ccx-c98="">
                                        <div _ngcontent-ccx-c98="" class="svg-icon white">
                                            <svg viewBox="0 0 448 512" fill="white">
                                                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path>
                                            </svg>
                                        </div>
                                    <!---->
                                    </svgicon>
                                </span>
                                <span>
                                    <?=$who?>
                                </span>
                            </a>
                        </div>
                    </app-loginpopper>
                </div>
            </div>
        </div>
    </nav>
    
    