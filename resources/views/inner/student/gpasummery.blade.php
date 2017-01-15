@extends('layouts.admin')


@section('content')

<?php
$f1_s1_sub=array("Data Structure and Algorithm","Mathematical methods","Programming","Information Systems","Automata");
$GPA = array("A+"=>"4.00", "A"=>"4.00","A-"=>"3.75", "B+"=>"3.50","B"=>"3.25", "B-"=>"3.00",);
$i=0;
$sum=0;
?>


<div id="page-wrapper">
<h2>1st Year</h2>
<section class="white_backg">
<br></br>



<div class="container" >


                    <h3>1st Semester</h3>

                    @foreach ($subgpa as $sub)

                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $GPA[$sub->result]*25;?>%">
                        <span><?php echo $f1_s1_sub[$i]." ---> [ ". $sub->result." ]  ----> ".$GPA[$sub->result];$i++;?> </span>
                      </div>
                      <?php
                      $sum=$sum+$GPA[$sub->result];
                      ?>
                    </div>
                    @endforeach


                    <h3>1st year 1st semester GPA is
                    <?php

                    $foo = "$sum"/"$i";
                    echo number_format((float)$foo, 4, '.', '');

                    ?>
                    </h3>

                    <div class="c100 p25">
                    <span><?php echo number_format((float)$foo, 4, '.', ''); ?></span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                    </div>
</div>



</section>

</div>

@endsection
