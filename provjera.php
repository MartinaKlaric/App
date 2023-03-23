<?php

function con_vow(string $word){

    $word=strtolower($word);
    $con=0;
    $vow=0;
    $vowel=["a", "e", "i", "o", "u"];

    foreach($vowel as $appearance){
        $vow += substr_count(strtolower($word), $appearance);
    }
    return $vow;
}

$_SESSION['error_message']=NULL;

$word=$_POST['word'];
$noChar=strlen($word);
[$noCon, $noVow]=consonants_vowels($_POST['word']);

if($noChar==0){
    $_SESSION['error_message']='Empty';
} elseif($noChar>$noCon+$noVow){
    $_SESSION['error_message']='NonLetterUsed';
} else{
    $wordsJson=file_get_contents('words.json');
    $words=json_decode($wordsJson, true);


    $words[]=[
        'word'=> $word,
        'noChar'=>$noChar,
        'noCon'=>$noCon,
        'noVow'=>$noVow
    ];

    $wordsJson=json_encode($words);
    file_put_contents('words.json', $wordsJson);
}

require 'index.php';
?>