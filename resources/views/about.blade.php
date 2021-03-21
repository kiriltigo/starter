@extends('layouts.master')

@section('title', 'About me')

@section('content')
    <div class="container">
        About Me
    </div>



    <?php
    /////////////////////////
        $str1 = 'string 1';
        $str2 = 'string 2';


        $num = 1;
        $varPrefix = ${'str'.$num};
    
        echo $varPrefix;
    
        ////////////////////////
        echo '</br>';

        $foo = new stdClass();
        $foo->bar = 'baz';
        echo $foo->bar;
        $quux = (object)['foo'=>'bar'];
        echo $quux->foo;

        ////////////////////////
    //     echo '</br>';


    //     $myGlobal = 'global';

    //     function test(){
    //         $myLocal = 'local';
    //         echo var_dump($myLocal);
    //         //echo var_dump($GLOBALS["myGlobal"]);
    //     }

    //     test();

    //    echo var_dump($myLocal);
    //    echo var_dump($myGlobal);
        ////////////////////////
    ?>
@endsection