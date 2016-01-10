<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>آژانس مهاجری</title>
        <link href="<?php echo base_url(); ?>assets/css/website.css" rel="stylesheet">
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
            <!--entry-box-->
            <div class="row">
                <div class="entry-box responsive-transition">
                    <header>ورود به سامانه رزرواسیون</header>
                    <form method="post" action="<?php echo base_url(); ?>index.php/captcha/ctrl_captcha">
                        <img src="<?php echo base_url(); ?>index.php/captcha/creat_captcha">
                        <div class="form-group">
                            <input type="text" name="captcha" placeholder="عبارت امنیتی را وارد نمایید">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="member-btn" value="ورود کاربران">
                            <input type="submit" id="public-btn" value="ورود عمومی">
                        </div>
                    </form>
                    <footer>
                        <p>تمامی کالاها و خدمات این فروشگاه دارای مجوز های لازم از مراجع مربوطه می باشند.</p>
                        <p>
                            فعالیت های این سایت تابع قوانین و مقررات جمهوری اسلامی ایران می باشند.
                        </p>
                    </footer>
                </div>
            </div>
            <!--connect-us-->
            <div class="row">
                <div class="contact-us">
                    <p>آدرس : مشهد، خیابان خسروی نو، نرسیده به چهاراه خسروی، جنب هتل سخاوت</p>
                    <p>تلفن : 32222982 - 051، فکس : 32217100 - 051، پشتیبانی رزرو (ادیب پور) : 09151151960</p>
                </div>
            </div>
        </div>
    </body>
</html>
