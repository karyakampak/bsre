<?php
namespace BSrE;

class BSrELib {
    public static function hello($fileLib, $inputFilePath, $inputImagePath, $inputP12Path, $nik, $passphrase, $rect, $page, $visibility, $outputFilePath) {
        $ffi = FFI::cdef("
            void process_files(char *inputFilePath, char *inputImagePath, char *inputP12Path, char *nik, char *passphrase, char *rect, int page, int visibility, char *outputFilePath);
        ", $fileLib);

        // Call the process_files function from the Rust dynamic library
        $ffi->process_files($inputFilePath, $inputImagePath, $inputP12Path, $nik, $passphrase, $rect, $page, $visibility, $outputFilePath);

        return "Success";
    }
}