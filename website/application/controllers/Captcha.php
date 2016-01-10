<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller {

    public function creat_captcha() {
        $char = array();
        $font_dir = 'c://wamp/www/mohajeri/website/assets/fonts/LatoMedium.ttf';
        for ($i = 0; $i < 4; $i++) {
            do {
                $ascii = rand(48, 90);
            } while ($ascii > 57 and $ascii < 65);
            $char[$i] = chr($ascii);
        }
        $code = $char[0] . $char[1] . $char[2] . $char[3];
        $_SESSION['captcha'] = $code;
        $image = imagecreate(250, 60);
        $background_color = imagecolorallocate($image, 180, 180, 180);
        for ($i = 0; $i < 4; $i++) {
            $angle = rand(-20, 20);
            $size = 35;
            $space = 60;
            $height = 45;
            $color = imagecolorallocate($image, 100, 100, 100);
            imagefttext($image, $size, $angle, $i * $space + 23, $height, $color, $font_dir, $char[$i]);
        }
        imagepng($image);
    }

    public function ctrl_captcha() {
        if ($_SESSION['captcha'] == $_POST['captcha']) {
            $this->load->view('result');
        } else {
            $this->load->view('entry');
        }
    }

}
