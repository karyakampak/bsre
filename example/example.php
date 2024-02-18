<?php
// Include or require the file that contains the class definition
require_once '/Users/pusopskamsinas/Documents/Pribadi/Rust/BSrELib/composer/src/BSrE.php';

// Create an instance of the class
$BSrELib = new BSrE\BSrELib();

// Specify input and output file paths
$fileLib = '/Users/pusopskamsinas/Documents/Pribadi/Rust/BSrELib/target/release/libBSrELib.dylib';
$inputFilePath = '/Users/pusopskamsinas/Documents/Pribadi/Rust/BSrELib/composer/example/signed_bsre.pdf';
$inputImagePath = '/Users/pusopskamsinas/Documents/Pribadi/Rust/BSrELib/composer/example/visualku.png';
$inputP12Path = '/Users/pusopskamsinas/Documents/Pribadi/Rust/BSrELib/composer/example/usertesting.p12';
$outputFilePath = '/Users/pusopskamsinas/Documents/Pribadi/Rust/BSrELib/composer/example/signed_by_lib_php.pdf';
$nik = "3317080602970004";
$passphrase = "123456";
$rect = "[143 440 350 460]";
$page = 1;
$visibility = 0;

// Call the method
echo $BSrELib->tte($fileLib, $inputFilePath, $inputImagePath, $inputP12Path, $nik, $passphrase, $rect, $page, $visibility, $outputFilePath);
?>