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

    public static function getCodeQR() {
        return Storage::get('picture.png');
    }
}
