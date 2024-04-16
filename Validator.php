<?php


class Validator 
{



    static public function string($data, $min_len = 0, $max_len = INF)
    {
        $data = trim($data);

        return is_string($data) 
                && strlen($data) >= $min_len 
                && strlen($data) <= $max_len;

    }

    static public function number($data, $min = 0, $max = INF)
    {
        $data = trim($data);

        // if(!is_numeric($data) || $data < $min || $data > $max)
        // {
        //     return false;
        // }else
        // {
        //     return true;
        // }

        return is_numeric($data) 
                && $data >= $min 
                && $data <= $max;
    }

    static public function date($data)
    {
        if(empty($data))
        {
            return false;
        }
        else if(str_contains($data, '-'))
        {
            list($year, $month, $day) = explode('-', $data);
            return checkdate($month, $day, $year);
        }
        else
        {
            return false;
        }

    }

    public static function picture($picture) {
        if (!isset($picture) || empty($picture)) {
            $errors['picture'] = 'No picture selected.';
            return false;
        }

        $allowedTypes = ['image/jpeg', 'image/png'];
        if (!in_array($picture['type'], $allowedTypes)) {
            $errors['picture'] = 'Invalid file type. Only JPEG and PNG files are allowed.';
            return false;
        }

        if ($picture['size'] > 5 * 1024 * 1024) {
            $errors['picture'] = 'File size exceeds the limit of 5MB.';
            return false;
        }

        return true;
    }
}