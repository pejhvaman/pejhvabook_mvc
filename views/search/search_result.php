
<style>
    #search_res {
        width: 970px;
        float: right;
        padding: 30px;
    }

    #search_res ul {
        padding: 0;
        width: 100%;
        float: right;
    }

    #search_res ul li {
        float: right;
        width: 235px;
        height: 450px;
        margin-left: 5px;
        margin-bottom: 8px;
        cursor: pointer;
        border-radius: 8px;
    }

    li.liRowMode {
        width: 100% !important;
        margin: 10px auto !important;
        height: 350px !important;
    }

    #search_res ul li:hover {
        box-shadow: 0 0 25px #a8a8a8;
    }

    #search_res a {
        float: right;
        width: 100%;
        height: 100%;
        text-align: center;
    }

    #search_res img {
        max-width: 165px;
        margin-top: 8px;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    #search_res li.liRowMode img {
        max-width: 230px !important;
        float: right !important;
        margin-right: 10px !important;
        margin-top: 10px;
    }

    #search_res p {
        margin: 0;
        text-align: right;
        width: 210px;
        padding: 0 15px 0 10px;
        float: right;
    }

    #search_res li.liRowMode p {
        float: right;
        width: 500px;
        margin-top: 10px;
    }

    #search_res .bookname {
        color: #6f6f6f;
    }

    #search_res .writername {
        color: #767676;
    }

    #search_res .nasher_num {
        color: #898989;
    }

    .star_rating {
        display: block;
        float: left;
        width: 120px;
        height: 24px;
        background: url(public/images/stargray.png) repeat;
        margin: 15px 0;
        margin-left: 100px;
        position: relative;
    }

    #search_res li.liRowMode .star_rating {
        float: right;
        margin-right: 20px;
    }

    .tozih {
        display: none;
    }

    #search_res li.liRowMode .tozih {
        color: #6f6f6f;
        width: 700px;
        display: block !important;
    }

    .gray_star {
        display: block;
        float: left;
        width: 100%;
        height: 100%;
        background: url(public/images/stargray.png) repeat;
    }

    .red_star {
        display: block;
        float: left;
        width: 68%;
        height: 100%;
        background: url(public/images/starred.png) repeat;
        position: absolute;
        left: 0;
    }

    #search_res .price {
        font-size: 12pt;
        color: #6f6f6f;
    }

</style>
<div id="search_res">
    <ul>
        <li>
            <a>
                <img src="public/images/taun1.jpg">
                <p class="bookname">
                    نام کتاب
                </p>
                <p class="writername">
                    نام نویسنده
                </p>
                <p class="nasher_num">
                    نام ناشر - شماره چاپ
                </p>
                <span class="star_rating">
                            <span class="gray_star"></span>
                            <span class="red_star"></span>
                        </span>
                <p class="price">
                    35,000
                    تومان
                </p>
                <p class="tozih">
                    توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات توضیحات
                    توضیحات توضیحات توضیحات توضیحات
                </p>
            </a>
        </li>

    </ul>
</div>