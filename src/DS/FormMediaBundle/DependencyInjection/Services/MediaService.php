<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 07/06/2015
 * Time: 02:29 AM
 */

namespace DS\FormMediaBundle\DependencyInjection\Services;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class MediaService {
    public function thumbCreate($data, $fileMime) {
        if ($data != null) {
            $img = @imagecreatefromstring(base64_decode($data));

            if ($img) {
                $thumbWidth = 120;
                $thumbHeigth = 120;

                $thumb = imagecreatetruecolor($thumbWidth, $thumbHeigth);
                imagecopyresampled($thumb, $img, 0, 0, 0, 0, $thumbWidth, $thumbHeigth, imagesx($img), imagesy($img));

                ob_start();
                imagejpeg($thumb, null, 100);
                $data = ob_get_clean();

                $base64Thumb = 'data:image/jpeg;base64,' . base64_encode($data);

                return  $base64Thumb;
            }
       }

    }
}