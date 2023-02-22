<div class="main">
            <?php
                include("sidebar/sidebar.php");
            ?>  
            
            <div class="maincontent">
                <?php
                    if(isset($_GET['quanly'])){
                        $tam = $_GET['quanly'];
                    }else{
                        $tam = '';
                    }

                    if($tam=='danhmucsanpham'){
                        include("maincontent/danhmuc.php");
                    }else if($tam=='giohang'){
                        include("maincontent/giohang.php");
                    }else if($tam=='tintuc'){
                        include("maincontent/tintuc.php");
                    }else if($tam=='lienhe'){
                        include("maincontent/lienhe.php");
                    }else{
                        include("maincontent/index.php");
                    }
                ?>
            </div>
        </div>