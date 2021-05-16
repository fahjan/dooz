<?php

use Illuminate\Support\Facades\URL;

function arabicToday($date)
{
    $arabicmonth = array("", "كانون ثاني", "شباط", "آذار", "نيسان", "أيار", "حزيران", "تموز", "آب", "أيلول", "تشرين أول", "تشرين ثاني", " كانون أول");
    $month = $arabicmonth[date('n')];
    $arabicday = array("", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت", "الأحد");
    $day = $arabicday[date('N')];
    return date("$day" . "، j " . $month . "، Y", strtotime($date));
}

function post($slug)
{
    return URL::to('خبر/' . $slug);
}


function image($w, $h, $filename) {
    return url('uploads' . $w . '-' . $h . '/' . $filename );
}