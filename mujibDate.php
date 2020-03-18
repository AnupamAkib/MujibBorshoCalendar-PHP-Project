<?php

date_default_timezone_set('Asia/Dhaka');
$week = array("রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার");
$digit = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০", "২১", "২২", "২৩", "২৪", "২৫", "২৬", "২৭", "২৮", "২৯", "৩০", "৩১", "৩২", "৩৩", "৩৪", "৩৫", "৩৬", "৩৭", "৩৮", "৩৯", "৪০", "৪১", "৪২", "৪৩", "৪৪", "৪৫", "৪৬", "৪৭", "৪৮", "৪৯", "৫০", "৫১", "৫২", "৫৩", "৫৪", "৫৫", "৫৬", "৫৭", "৫৮", "৫৯", "৬০");
$month = array("স্বাধীনতা", "শপথ", "বেতারযুদ্ধ", "যুদ্ধ", "শোক", "কৌশলযুদ্ধ", "আকাশযুদ্ধ", "জেলহত্যা", "বিজয়", "ফিরেআসা", "নবযাত্রা", "ভাষা");
$day = array("০১", "০২", "০৩", "০৪", "০৫", "০৬", "০৭", "০৮", "০৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০", "২১", "২২", "২৩", "২৪", "২৫", "২৬", "২৭", "২৮", "২৯", "৩০", "৩১");


//get current English date
$cDay = date("d");
$cMonth = date("m");
$cYear = date("y");
$weekDay = date("w");


//get the MUJIB month
if(($cDay>=17 && $cMonth==3) || ($cDay<17 && $cMonth==4)){
    $mujibMonth = 0;
}
else if(($cDay>=17 && $cMonth==4) || ($cDay<17 && $cMonth==5)){
    $mujibMonth = 1;
}
else if(($cDay>=17 && $cMonth==5) || ($cDay<17 && $cMonth==6)){
    $mujibMonth = 2;
}
else if(($cDay>=17 && $cMonth==6) || ($cDay<17 && $cMonth==7)){
    $mujibMonth = 3;
}
else if(($cDay>=17 && $cMonth==7) || ($cDay<17 && $cMonth==8)){
    $mujibMonth = 4;
}
else if(($cDay>=17 && $cMonth==8) || ($cDay<17 && $cMonth==9)){
    $mujibMonth = 5;
}
else if(($cDay>=17 && $cMonth==9) || ($cDay<17 && $cMonth==10)){
    $mujibMonth = 6;
}
else if(($cDay>=17 && $cMonth==10) || ($cDay<17 && $cMonth==11)){
    $mujibMonth = 7;
}
else if(($cDay>=17 && $cMonth==11) || ($cDay<17 && $cMonth==12)){
    $mujibMonth = 8;
}
else if(($cDay>=17 && $cMonth==12) || ($cDay<17 && $cMonth==1)){
    $mujibMonth = 9;
}
else if(($cDay>=17 && $cMonth==1) || ($cDay<17 && $cMonth==2)){
    $mujibMonth = 10;
}
else if(($cDay>=17 && $cMonth==2) || ($cDay<17 && $cMonth==3)){
    $mujibMonth = 11;
}


//get MUJIB date
if($cDay>=17){
    $mujibDay = $cDay - 16;
}
else{
    if($mujibMonth == 0){
        $mujibDay = $cDay + 15;
    }
    else if($mujibMonth == 1){
        $mujibDay = $cDay + 14;
    }
    else if($mujibMonth == 2){
        $mujibDay = $cDay + 15;
    }
    else if($mujibMonth == 3){
        $mujibDay = $cDay + 14;
    }
    else if($mujibMonth == 4){
        $mujibDay = $cDay + 15;
    }
    else if($mujibMonth == 5){
        $mujibDay = $cDay + 15;
    }
    else if($mujibMonth == 6){
        $mujibDay = $cDay + 14;
    }
    else if($mujibMonth == 7){
        $mujibDay = $cDay + 15;
    }
    else if($mujibMonth == 8){
        $mujibDay = $cDay + 14;
    }
    else if($mujibMonth == 9){
        $mujibDay = $cDay + 15;
    }
    else if($mujibMonth == 10){
        $mujibDay = $cDay + 15;
    }
    else if($mujibMonth == 11){
        $mujibDay = $cDay + 12;
    }
}


//get MUJIB year
$mujibYear = ($cYear+2000) - 1920;
if($cMonth <3){
	$mujibYear--;
}
else if($cMonth == 3 && $cDay < 17){
	$mujibYear--;
}


//split MUJIB year digit by digit to convert it in Bangla digit
$a = $mujibYear%10;
$mujibYear/=10;
$b = $mujibYear%10;
$mujibYear/=10;
$c = $mujibYear%10;

//get local time
$hour = date("h");
$hour=$hour+0;
$min = date("i");
$min=$min+0;
$hour_24 = date("H");
$hour_24+=0;

//print MUJIB year in bangla
echo "<font size='5' ><b>". $day[$mujibDay-1]. " " . $month[$mujibMonth]. ", " . $digit[$c]. $digit[$b]. $digit[$a] . " | " . $week[$weekDay] . "</b></font><br>";

//print if it is morning/noon/afternoon/night
echo "<font style='font-size:large'>";
if($hour_24>=0 && $hour_24<=3){
    echo "রাত ";
}
else if($hour_24>=4 && $hour_24<=5){
    echo "ভোর ";
}
else if($hour_24>=6 && $hour_24<=10){
    echo "সকাল ";
}
else if($hour_24==11){
    echo "বেলা ";
}
else if($hour_24>=12 && $hour_24<=15){
    echo "দুপুর ";
}
else if($hour_24>=16 && $hour_24<=17){
    echo "বিকাল ";
}
else if($hour_24==18){
    echo "সন্ধ্যা ";
}
else if($hour_24>=19 && $hour_24<=23){
    echo "রাত ";
}

//printing local time in bangla
echo $digit[$hour]." টা ".$digit[$min]." মিনিট</font>";
?>














