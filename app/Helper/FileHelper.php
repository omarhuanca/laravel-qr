<?php

namespace App\Helper;

use Illuminate\Support\Facades\Storage;

use LaravelQRCode\Facades\QRCode;

/**
 * FileHelper
 * 
 * @author Omar Huanca
 * @since 1.0
 */
class FileHelper {

    public static function constructImageFromBinary($mime) 
    {
        $contents = file_get_contents(Storage::get('file.png'));
        $base64   = base64_encode($contents);
        return ('data:' . $mime . ';charset=utf8;base64,' . $base64);
    }

    public static function getBinaryFile() {
        return Storage::get('file.png');
    }
}
