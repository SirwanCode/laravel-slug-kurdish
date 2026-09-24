<?php

namespace sirwancode\laravelslugkurdish;
use Illuminate\Support\Str;

class KuSlug  
{


   private static $separator='-';
   private static $unqLength=10;
   private static $lowercase=true;

   private static function setVariables()
   {
       self::$separator=  strlen( config('KuSlug.separator') ) < 1 ? '-' : substr( config('KuSlug.separator')  , 0 , 1);
       self::$unqLength=  config('KuSlug.unqLength') < 5 ? 5 : config('KuSlug.unqLength');
       self::$lowercase=  config('KuSlug.lowercase') ? true : false;
   }

   private static function normalizeSorani(string $text)
   {
    //english digit conversion
    $text= str_replace(
                      ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
                      ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'],
                      $text
    );
    //persian/arabic conversion
     $text = str_replace(
                      ['ك', 'ي', 'ى', 'ۀ'],
                      ['ک', 'ی', 'ی', 'ە'],
                      $text
    );
    //Tatweel removal
    $text = str_replace('ـ', '', $text);
   
    $sorani = [
        'ء', 'ئ', 'ا', 'ب', 'ە', 'پ', 'ت', 'ج', 'چ',
        'ح', 'خ', 'د', 'ڕ', 'ر', 'ز', 'ی', 'ژ', 'س', 'ش',
        'ع', 'غ', 'ف', 'ڤ', 'ق', 'ک', 'گ', 'ل', 'ڵ',
        'م', 'ن', 'ه', 'ۆ', 'و', 'ێ',
    
        // Arabic-Indic digits
        '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩',
    
        // Persian digits
        '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'
    ];

    $pattern = '/[^' . preg_quote( implode( '' , $sorani ) , '/') . '\s]/u';
    $text = preg_replace( $pattern , self::$separator , $text);
    
    return $text;

   }
   public static function sorani(string $text, bool $isUnique=false)
   {
       self::setVariables();
       $text= self::normalizeSorani($text);
       $text = preg_replace('/\s+/u', self::$separator , $text);
       $text = preg_replace('/'. self::$separator .'+/u', self::$separator, $text);
       $text = trim($text, self::$separator);
       if($isUnique)
       {
          $text= $text . self::$separator  . Str::random(self::$unqLength);
       }
       return $text;
   }
  
   private static function normalizeKurmanji(string $text)
   {
    
        $kurmanji = [
            'A', 'B', 'C', 'Ç', 'D', 'E', 'Ê', 'F', 'G', 'H',
            'I', 'Î', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q',
            'R', 'S', 'Ş', 'T', 'U', 'Û', 'V', 'W', 'X', 'Y', 'Z',
        
            'a', 'b', 'c', 'ç', 'd', 'e', 'ê', 'f', 'g', 'h',
            'i', 'î', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q',
            'r', 's', 'ş', 't', 'u', 'û', 'v', 'w', 'x', 'y', 'z',
        
            '0', '1', '2', '3', '4','5', '6', '7', '8', '9'
        ];
        $pattern = '/[^' . preg_quote( implode( '' , $kurmanji ) , '/') . '\s]/u';
        $text = preg_replace( $pattern , self::$separator , $text);
        return $text;
   }
   public static function kurmanji(string $text, bool $isUnique=false)
   {
       self::setVariables();   
       $text= self::normalizeKurmanji($text);
       $text = preg_replace('/\s+/u', self::$separator , $text);
       $text = preg_replace('/'. self::$separator .'+/u', self::$separator, $text);
       if (self::$lowercase)
       {
          $text=mb_strtolower($text, 'UTF-8');
       }
       $text = trim($text, self::$separator);
       if($isUnique)
       {
          $text= $text . self::$separator  . Str::random(self::$unqLength);
       }
       return $text;
   }
  

}