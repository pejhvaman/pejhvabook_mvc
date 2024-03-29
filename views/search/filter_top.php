<style>
    #filter_top {
        width: 100%;
        float: right;
        padding: 20px 0;
        border-bottom: 1px solid #e2e2e2;
        position: relative;
    }

    #search_word {
        width: 300px;
        height: 34px;
        border: 1px solid #dcdcdc;
        border-radius: 7px;
        margin-right: 20px;
        font-family: sans;
        color: #a0a0a0;
        padding-right: 8px;
        float: right;
    }

    #search_word_icon {
        display: block;
        width: 32px;
        height: 32px;
        position: absolute;
        right: 295px;
        top: 23px;
        background: url(public/images/searchq.png) no-repeat center;
        cursor: pointer;
    }

    #existBtn {
        display: block;
        position: relative;
        float: right;
        margin-right: 20px;
        width: 32px;
        height: 32px;
        margin-top: 4px;
        cursor: pointer;
    }

    #noExist {
        display: block;
        position: absolute;
        float: right;
        width: 32px;
        height: 32px;
        background: url(public/images/switchno.png) no-repeat center;
    }

    .yesExist {
        background: url(public/images/switchyes.png) no-repeat center !important;
    }

    #show_mode {
        float: left;
        width: 200px;
        padding: 0 20px;
    }

    #table_mode {
        display: block;
        float: left;
        width: 32px;
        height: 32px;
        background: url(public/images/tableact.png) no-repeat center;
        margin-right: 8px;
        margin-top: 5px;
        cursor: pointer;
    }

    .deactiveTable {
        background: url(public/images/tabledeact.png) no-repeat center !important;
    }

    #row_mode {
        display: block;
        float: left;
        width: 32px;
        height: 32px;
        background: url(public/images/rowdeact.png) no-repeat center;
        margin-right: 8px;
        margin-top: 5px;
        cursor: pointer;
    }

    .activeRow {
        background: url(public/images/rowact.png) no-repeat center !important;
    }

    #show_mode p {
        margin-top: 10px;
        color: #6f6f6f;
        font-size: 10pt;
        float: left;
    }

    #sort_by {
        width: 100%;
        float: right;
        padding: 20px 0 0 0;
    }

    #sort_by span {
        margin-right: 20px;
        color: #6f6f6f;
        font-size: 11pt;
    }

    #sort_by select, #sort_by option {
        font-family: sans;
        color: #6f6f6f;
        font-size: 10pt;
    }

    #sort_by select {
        border-radius: 5px;
        border: 1px solid #dcdcdc;
    }
</style>
<div id="filter_top">
    <input name="key_word" id="search_word" type="text" placeholder="جست و جو بر اساس کلمه...">
    <span id="search_word_icon"></span>
    <span id="existBtn">
                <span id="noExist"></span>
            </span>
    <span style="float: right;color: #6f6f6f;margin-right: 10px;font-size: 10pt;margin-top: 10px">
                فقط نمایش کتاب های موجود
            </span>
    <div id="show_mode">
        <span id="table_mode"></span>
        <span id="row_mode"></span>
        <p>حالت نمایش</p>
    </div>
    <div id="sort_by">
                <span>
                    مرتب سازی بر اساس
                </span>
        <select name="orderType1">
            <option value="1">
                جدید ترین
            </option>
            <option value="2">
                قیمت
            </option>
        </select>
        <select name="orderType2">
            <option value="1">صعودی</option>
            <option value="2">نزولی</option>
        </select>
        <span>
            تعداد نمایش
        </span>
        <select id="limit">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
</div>

