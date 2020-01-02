<?php
include "footer-header/header.php";
$current_services = "人源化单抗定制";
?>



<div id="services" class="ps-page">
    <div class="title">服务 > <?php echo($current_services) ?></div>

    <div class="nav">
        <ul>
            <li class="first hideContent active">技术服务</li>
            <ul class="first-content">
                <li onclick="refreshDetailContent(1)">人源化单抗定制</li>

                <li>抗原开发与生产</li>
            </ul>



        </ul>
    </div>

    <div class="content">
        <div class="content-title"> <?php echo($current_services) ?></div>
    </div>
</div>

<div class="clearBoth"></div>


<!--<script src="js/services.js"></script>-->
<script>
    function refreshDetailContent(a){
        <?php
            $current_services = "开发";
        ?>
        if(true){
            alert(<?php
                    echo($current_services);
                ?>)
        }
    }
</script>


<?php
include "footer-header/footer.php";
?>
