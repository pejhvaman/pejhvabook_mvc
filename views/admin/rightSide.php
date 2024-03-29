<style>
    .rightSide {
        width: 250px;
        background: #fff;
        float: right;
    }

    .menuList {
        width: 100%;
        float: right;
        padding: 0;
    }

    .menus {
        width: 84%;
        margin: 20px;
    }

    .menus > a {
        text-decoration: none;
        color: #6f6f6f;
        margin: 15px;
        transition: 0.07s;
    }

    .menus > a:hover {
        opacity: 0.7;
    }

    .activeMenu {
        background: indianred;
        border-radius: 4px;
    }

    li.activeMenu a {
        color: whitesmoke;
    }
</style>
<?php
$model = new Model;
$level = $model::getUserLevel();
?>
<div class="rightSide sans">
    <ul class="menuList">
        <li class="menus <?php if ($active_menu == 'dashboard') {
            echo 'activeMenu';
        } ?>">
            <a href="admindashboard/index">
                داشبورد
            </a>
        </li>
        <?php
        if($level == 1) {
            ?>
            <li class="menus <?php if ($active_menu == 'category') {
                echo 'activeMenu';
            } ?>">
                <a href="admincategory/index">
                    مدیریت دسته ها
                </a>
            </li>
            <?php
        }
        ?>
        <li class="menus <?php if ($active_menu == 'product') {
            echo 'activeMenu';
        } ?>">
            <a href="adminproduct/index">
                مدیریت محصولات
            </a>
        </li>
        <li class="menus <?php if ($active_menu == 'order') {
            echo 'activeMenu';
        } ?>">
            <a href="adminorder/index">
                مدیریت سفارشات
            </a>
        </li>
        <li class="menus <?php if ($active_menu == 'stat') {
            echo 'activeMenu';
        } ?>">
            <a href="adminstat/index">
                گزارشات
            </a>
        </li>
        <li class="menus <?php if ($active_menu == 'comment') {
            echo 'activeMenu';
        } ?>">
            <a href="admincomment/index">
                مدیریت نظرات
            </a>
        </li>
        <?php
        if($level == 1) {
            ?>
            <li class="menus <?php if ($active_menu == 'setting') {
                echo 'activeMenu';
            } ?>">
                <a href="adminsetting/index">
                    مدیریت تنظیمات
                </a>
            </li>
            <?php
        }
        ?>
        <li class="menus <?php if ($active_menu == 'slider1') {
            echo 'activeMenu';
        } ?>">
            <a href="adminslider/index">
                مدیریت اسلایدر اول
            </a>
        </li>
        <li class="menus <?php if ($active_menu == 'user') {
            echo 'activeMenu';
        } ?>">
            <a href="adminuser/index">
                مدیریت اعضا
            </a>
        </li>
    </ul>
</div>