<form method='POST'>
    ইংরেজি তারিখ প্রদান করুন<br/>
    <select name='day' class='sel' required>
    	<option disabled selected value>Day</option>
        <option value='1'>1</option>
        <option value='2'>2</option>
        <option value='3'>3</option>
        <option value='4'>4</option>
        <option value='5'>5</option>
        <option value='6'>6</option>
        <option value='7'>7</option>
        <option value='8'>8</option>
        <option value='9'>9</option>
        <option value='10'>10</option>
        <option value='11'>11</option>
        <option value='12'>12</option>
        <option value='13'>13</option>
        <option value='14'>14</option>
        <option value='15'>15</option>
        <option value='16'>16</option>
        <option value='17'>17</option>
        <option value='18'>18</option>
        <option value='19'>19</option>
        <option value='20'>20</option>
        <option value='21'>21</option>
        <option value='22'>22</option>
        <option value='23'>23</option>
        <option value='24'>24</option>
        <option value='25'>25</option>
        <option value='26'>26</option>
        <option value='27'>27</option>
        <option value='28'>28</option>
        <option value='29'>29</option>
        <option value='30'>30</option>
        <option value='31'>31</option>
    </select>

    <select name='month' class='sel' required>
    	<option disabled selected value>Month</option>
        <option value='1'>January</option>
        <option value='2'>February</option>
        <option value='3'>March</option>
        <option value='4'>April</option>
        <option value='5'>May</option>
        <option value='6'>June</option>
        <option value='7'>July</option>
        <option value='8'>August</option>
        <option value='9'>September</option>
        <option value='10'>October</option>
        <option value='11'>November</option>
        <option value='12'>December</option>
    </select>

    <select name='year' class='sel' required>
    	<option disabled selected value>Year</option>
        <option value='20'>2020</option>
        <option value='21'>2021</option>
        <option value='22'>2022</option>
        <option value='23'>2023</option>
        <option value='24'>2024</option>
        <option value='25'>2025</option>
        <option value='26'>2026</option>
        <option value='27'>2027</option>
        <option value='28'>2028</option>
        <option value='29'>2029</option>
        <option value='30'>2030</option>
        <option value='31'>2031</option>
        <option value='32'>2032</option>
        <option value='33'>2033</option>
        <option value='34'>2034</option>
        <option value='35'>2035</option>
        <option value='36'>2036</option>
        <option value='37'>2037</option>
        <option value='38'>2038</option>
        <option value='39'>2039</option>
        <option value='40'>2040</option>
        <option value='41'>2041</option>
        <option value='42'>2042</option>
        <option value='43'>2043</option>
        <option value='44'>2044</option>
        <option value='45'>2045</option>
        <option value='46'>2046</option>
        <option value='47'>2047</option>
        <option value='48'>2048</option>
        <option value='49'>2049</option>
        <option value='50'>2050</option>
        <option value='51'>2051</option>
        <option value='52'>2052</option>
        <option value='53'>2053</option>
        <option value='54'>2054</option>
        <option value='55'>2055</option>
        <option value='56'>2056</option>
        <option value='57'>2057</option>
        <option value='58'>2058</option>
        <option value='59'>2059</option>
        <option value='60'>2060</option>
        <option value='61'>2061</option>
        <option value='62'>2062</option>
        <option value='63'>2063</option>
        <option value='64'>2064</option>
        <option value='65'>2065</option>
        <option value='66'>2066</option>
        <option value='67'>2067</option>
        <option value='68'>2068</option>
        <option value='69'>2069</option>
        <option value='70'>2070</option>
        <option value='71'>2071</option>
        <option value='72'>2072</option>
        <option value='73'>2073</option>
        <option value='74'>2074</option>
        <option value='75'>2075</option>
        <option value='76'>2076</option>
        <option value='77'>2077</option>
        <option value='78'>2078</option>
        <option value='79'>2079</option>
        <option value='80'>2080</option>
        <option value='81'>2081</option>
        <option value='82'>2082</option>
        <option value='83'>2083</option>
        <option value='84'>2084</option>
        <option value='85'>2085</option>
        <option value='86'>2086</option>
        <option value='87'>2087</option>
        <option value='88'>2088</option>
        <option value='89'>2089</option>
        <option value='90'>2090</option>
        <option value='91'>2091</option>
        <option value='92'>2092</option>
        <option value='93'>2093</option>
        <option value='94'>2094</option>
        <option value='95'>2095</option>
        <option value='96'>2096</option>
        <option value='97'>2097</option>
        <option value='98'>2098</option>
        <option value='99'>2099</option>
        <option value='100'>2100</option>
    <select><br>
    <button class='btn' type='submit' name='submit'><i class='fa fa-calendar'></i> GET MUJIB DATE</button>
</form>


<?php

date_default_timezone_set('Asia/Dhaka');
$week = array("রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনিবার");
$digit = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯");
$month = array("স্বাধীনতা", "শপথ", "বেতারযুদ্ধ", "যুদ্ধ", "শোক", "কৌশলযুদ্ধ", "আকাশযুদ্ধ", "জেলহত্যা", "বিজয়", "ফিরেআসা", "নবযাত্রা", "ভাষা");
$day = array("০১", "০২", "০৩", "০৪", "০৫", "০৬", "০৭", "০৮", "০৯", "১০", "১১", "১২", "১৩", "১৪", "১৫", "১৬", "১৭", "১৮", "১৯", "২০", "২১", "২২", "২৩", "২৪", "২৫", "২৬", "২৭", "২৮", "২৯", "৩০", "৩১");


if(isset($_POST['submit'])){
    //get current English date
    $cDay = $_POST['day'];
    $cMonth = $_POST['month'];
    $cYear = $_POST['year'];


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

    $enMonth=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    echo "<div class='result'>";
    echo "<b>ইংরেজি তারিখ: </b>". $cDay. " ". $enMonth[$cMonth-1]. ", ". ($cYear+2000)." ইং<br>";
    echo "<b>মুজিব তারিখ: </b>". $day[$mujibDay-1]. " " . $month[$mujibMonth]. ", " . $digit[$c]. $digit[$b]. $digit[$a] . " মুজিববর্ষ ";
    echo "</div>";
}
?>

















