
<style>
    .rahgiri {
        width: 91.55%;
        padding: 50px;
        float: right;
        font-family: sans;
    }

    .rahgiri > div {
        margin: auto;
    }

    .dashed {
        width: 65px;
        height: 2px;
        float: right;
    }

    .dashed span {
        display: block;
        width: 10px;
        height: 2px;
        margin-left: 5px;
        float: right;
        background: #67bfb0;
    }

    .dashed span:last-child {
        margin-left: 10px;
    }

    .steps {
        float: right;
        width: 345px;
        padding: 0;
    }

    .steps li {
        width: 150px;

        float: right;
        position: relative;
    }

    .steps li .circle {
        display: block;
        width: 25px;
        height: 25px;
        border-radius: 100%;
        border: 5px solid #e9e9e9;
        position: relative;
        top: -16px;
    }

    .steps li.done .circle {
        background: #67bfb0 url(public/images/tick1.png) no-repeat center !important;
        border: 5px solid #67bfb0 !important;
    }

    .steps li.doing .circle {
        border: 5px solid #67bfb0 !important;
    }

    .steps .line {
        display: block;
        float: left;
        margin: 0 15px 0 8px;
        width: 100px;
        height: 2px;
        background: #e9e9e9;
        position: relative;
        top: -34px;
    }

    .steps li.done .line {
        background: #67bfb0;
    }

    .steps .step_title {
        position: absolute;
        right: -12px;
        top: 20px;
        font-size: 10.5pt;
        color: #6f6f6f;
        width: 100px;
    }

    .steps li.done .step_title {
        color: #67bfb0;
    }

    .steps li.doing .step_title {
        color: #67bfb0;
    }

    .editendelete > table {
        width: 100%;
        height: 160px;
    }

    .editendelete table tr {
        width: 100%;
        height: 50%;
    }

    .editendelete table tr td {
        width: 100%;
        height: 100%;
    }

    .editendelete table tr:first-child td {
        background: rgba(103, 191, 176, 0.35);
    }

    .editendelete table tr:last-child td {
        background: rgba(229, 74, 134, 0.35)
    }

    .edit_add, .delete_add {
        display: block;
        width: 32px;
        height: 32px;
        margin: auto;
        cursor: pointer;
    }

    .edit_add {
        background: url(public/images/edit.png) no-repeat center;
    }

    .delete_add {
        background: url(public/images/x-button.png) no-repeat center;
    }

    .value_add {
        margin-right: 5px;
    }

    .right_side {
        width: 75%;
        float: right;
    }
</style>
<div class="rahgiri">
    <div>
        <div class="dashed" style="margin-right: 360px">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="steps">
            <li class="doing">
                <span class="circle"></span>
                <span class="line"></span>
                <span class="step_title">
                                                     اطلاعات ارسال
                                                </span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="step_title" style="right: 0">
                                                     پرداخت
                                                </span>
            </li>

            <li style="width: 42px">
                <span class="circle"></span>
                <span class="step_title">
                                                     اتمام خرید و ارسال
                                                </span>
            </li>
        </ul>
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>