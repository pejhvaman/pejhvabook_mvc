<style>

    #main .content_right {
        width: 250px;
        float: right;
    }

    #category_res, .by_cat {
        border: 1px solid #dcdcdc;
        width: 100%;
        float: right;
        background: white;
        color: #6f6f6f;
        margin-bottom: 15px;
    }

    #category_res p, .by_cat p {
        border-bottom: 1px solid #e2e2e2;
        float: right;
        width: 235px;
        margin: 0;
        height: 42px;
        line-height: 42px;
        padding-right: 15px;
        font-size: 14pt;
    }

    #category_res > ul {
        float: right;
        width: 230px;
        padding-right: 20px;
        margin: 15px 0;
    }

    .by_cat ul {
        float: right;
        padding: 0;
        width: 250px;
        margin: 15px 0;
    }

    .by_cat ul li {
        float: right;
        width: 230px;
        height: 30px;
        padding-right: 20px;
        margin-top: 8px;
    }

    .by_cat input[type=checkbox] {
        float: right;
        width: 25px;
        height: 25px;
        cursor: pointer;
        opacity: 0;
    }

    .instead_check {
        display: block;
        float: right;
        width: 25px;
        height: 25px;
        border-radius: 100%;
        border: 1px solid #4d8f84;
        margin-right: -30px;
    }

    .checked {
        background: #67bfb0 url(public/images/check-mark.png) no-repeat center !important;
    }
</style>
<?php
$categoryInfo = $data['categoryInfo'];
$categories = $data['categories'];
$entesharts = $data['entesharats'];
?>
<div class="content_right sans">
    <div id="category_res">
        <p>
            دسته بندی نتایج
        </p>
        <ul>
            <li>
                <?php echo $categoryInfo['title'] ?>
            </li>
        </ul>
    </div>
    <div class="by_cat">
        <p>
            بر اساس دسته بندی
        </p>
        <ul id="by_cat" data-catId="<?= $categoryInfo['id'] ?>">
            <?php
            foreach ($categories as $category) {
                if ($category['id'] != $categoryInfo['id']) {
                    ?>
                    <li>
                        <input name="category[]" value="<?= $category['id'] ?>" class="real_checkbox" type="checkbox">
                        <span class="instead_check"></span>
                        <?= $category['title'] ?>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <div class="by_cat">
        <p>
            بر اساس ناشر
        </p>
        <ul>
            <?php
            foreach ($entesharts as $enteshart) {
                ?>
                <li>
                    <input name="ent[]" value="<?= $enteshart['id'] ?>" class="real_checkbox" type="checkbox">
                    <span class="instead_check"></span>
                    <?= $enteshart['nam'] ?>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
<script>
    $('.real_checkbox').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('li').find('.instead_check').addClass('checked');
        } else {
            $(this).parents('li').find('.instead_check').removeClass('checked');
        }
        doSearch();
    });
</script>
