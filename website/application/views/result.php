<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>آژانس مهاجری</title>
        <link href="<?php echo base_url(); ?>assets/css/website.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/autocomplete.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/datepicker.min.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/website.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/autocomplete.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/datepicker.fa.min.js"></script>
    </head>
    <body>
        <div class="wrapper wrapper-border">
            <!--logo-->
            <div class="row">
                <div class="logo">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo.png">
                </div>
            </div>
            <!--date-bar-->
            <div class="row">
                <div class="date-bar">
                    <span style="padding-right: 20px;">Monday, 4 June, 2016</span>
                    دوشنبه، 14 دی، 1394
                </div>
            </div>
            <!--content-->
            <div class="row">
                <!--right-side-->
                <div class="right-side responsive-transition">
                    <div class="flight-search">
                        <header>جستجوی پرواز</header>
                        <div class="clearfix"></div>
                        <ul>
                            <li id="charter-tab">پرواز چارتری</li>
                            <li id="international-tab">پرواز خارجی</li>
                            <li id="system-tab">پرواز سیستمی</li>
                        </ul>
                        <div class="flight-tab-content">
                            <div id="charter">
                                <form method="post">
                                    <div class="form-group">
                                        <label>یک طرفه : </label>
                                        <input type="radio" name="way" value="one_way" checked="">
                                        <label>دو طرفه : </label>
                                        <input type="radio" name="way" value="two_way">
                                    </div>
                                    <label>مبداء : </label>
                                    <div class="form-group">
                                        <input type="text" name="from_city" id="from_city" class="autocomplete">
                                    </div>
                                    <label>مقصد : </label>
                                    <div class="form-group">
                                        <input type="text" name="to_city" id="to_city" class="autocomplete">
                                    </div>
                                    <label>تاریخ پرواز : </label>
                                    <div class="form-group">
                                        <input type="text" style="width: 40%;" class="datepicker" readonly>
                                        تا
                                        <input type="text" style="width: 40%;" class="datepicker" readonly>
                                    </div>
                                    <label>اطلاعات مسافرین : </label>
                                    <div class="form-group">
                                        <label>بزرگسال</label>
                                        <select id="adult" onchange="set_infant();">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                        <label>کودک</label>
                                        <select>
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label>نوزاد</label>
                                        <select id="infant">
                                            <option selected>0</option>
                                            <option>1</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="جستجو">
                                </form>
                            </div>
                            <div id="international">
                                <form method="post" action="">
                                    <label>مبداء : </label>
                                    <div class="form-group">
                                        <input type="text" name="from_city" id="from_city" class="autocomplete">
                                    </div>
                                    <label>مقصد : </label>
                                    <div class="form-group">
                                        <input type="text" name="to_city" id="to_city" class="autocomplete">
                                    </div>
                                    <label>تاریخ پرواز : </label>
                                    <div class="form-group">
                                        <input type="text" style="width: 40%;" class="datepicker" readonly>
                                    </div>
                                    <label>اطلاعات مسافرین : </label>
                                    <div class="form-group">
                                        <label>بزرگسال</label>
                                        <select id="adult" onchange="set_infant();">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                        <label>کودک</label>
                                        <select>
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label>نوزاد</label>
                                        <select id="infant">
                                            <option selected>0</option>
                                            <option>1</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="جستجو">
                                </form>
                            </div>
                            <div id="system">
                                <form method="post" action="">
                                    <label>مبداء : </label>
                                    <div class="form-group">
                                        <input type="text" name="from_city" id="from_city" class="autocomplete">
                                    </div>
                                    <label>مقصد : </label>
                                    <div class="form-group">
                                        <input type="text" name="to_city" id="to_city" class="autocomplete">
                                    </div>
                                    <label>تاریخ پرواز : </label>
                                    <div class="form-group">
                                        <input type="text" style="width: 40%;" class="datepicker" readonly>
                                    </div>
                                    <label>اطلاعات مسافرین : </label>
                                    <div class="form-group">
                                        <label>بزرگسال</label>
                                        <select id="adult" onchange="set_infant();">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                        <label>کودک</label>
                                        <select>
                                            <option selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label>نوزاد</label>
                                        <select id="infant">
                                            <option selected>0</option>
                                            <option>1</option>
                                        </select>
                                    </div>
                                    <input type="submit" value="جستجو">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--airline-filter-->
                    <div class="airline-filter">
                        <header>نمایش ایرلاین ها</header>
                        <?php
                        if (isset($_POST['from_city'])) {
                            ?>
                            <ul>
                                <li>
                                    <input type = "checkbox" checked>
                                    هواپیمایی ماهان
                                </li>
                                <li>
                                    <input type = "checkbox" checked>
                                    هواپیمایی ایران ایر
                                </li>
                                <li>
                                    <input type = "checkbox" checked>
                                    هواپیمایی آتا
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
                <!--left-side-->
                <div class="left-side">
                    <?php
                    if (isset($_POST['from_city'])) {
                        require_once '/action/flight_result.php';
                    } else {
                        ?>
                        <div class="info">
                            <header>راهنما</header>
                            <table>
                                <tr>
                                    <td><img src="<?php echo base_url(); ?>assets/images/tour-flight.gif"></td>
                                    <td>نشانگر مخصوص تور بودن پرواز می باشد و باید به صورت تور رزرو شود.</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo base_url(); ?>assets/images/twoway-only.gif"></td>
                                    <td>نشانگر اجبار فروش دو طرفه ی پرواز می باشد.</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo base_url(); ?>assets/images/flight-rule.gif"></td>
                                    <td>نشانگر قوانین فروش پرواز می باشد.</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo base_url(); ?>assets/images/phone-only.gif"></td>
                                    <td>نشانگر فروش پرواز فقط به صورت تلفنی می باشد.</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo base_url(); ?>assets/images/cobin-seat.gif"></td>
                                    <td>نشانگر صندلی کابین Business Class می باشد.</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo base_url(); ?>assets/images/warranty.gif"></td>
                                    <td>بدین معناست که شما روی پرواز دارای سهمیه گارانتی می باشید.</td>
                                </tr>
                            </table>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    $(function () {
        $('.autocomplete').autoComplete({
            minChars: 2,
            source: function (term, suggest) {
                term = term.toLowerCase();
                var choices = ['MHD | مشهد | Mashhad', 'THR | تهران | Tehran', 'IFN | اصفهان | Isfahan'];
                var suggestions = [];
                for (i = 0; i < choices.length; i++)
                    if (~choices[i].toLowerCase().indexOf(term))
                        suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });
    });
</script>