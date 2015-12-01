<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Font
    |--------------------------------------------------------------------------
    | Supported: "DroidSerif".
    |
    */
    'font' => 'DroidSerif',

    /*
    |--------------------------------------------------------------------------
    | Font size
    |--------------------------------------------------------------------------
    | Font size in pixels.
    | 
    |
    */
    'fontSize' => 20,

    /*
    |--------------------------------------------------------------------------
    | Letter spacing
    |--------------------------------------------------------------------------
    | Spacing between letters in pixels.
    |
    */
    'letterSpacing' => 2,

    /*
    |--------------------------------------------------------------------------
    | Code Length
    |--------------------------------------------------------------------------
    | You can specify an array or integer.
    |
    */
    'length' => [4, 5],

    /*
    |--------------------------------------------------------------------------
    | Displayed chars
    |--------------------------------------------------------------------------
    | Enter the different characters.
    |
    */
    'chars' => 'QSFHTRPAJKLMZXCVBNabdefhxktyzj23456789',

    /*
    |--------------------------------------------------------------------------
    | Image Size
    |--------------------------------------------------------------------------
    | Captcha image size can be controlled by setting the width 
    | and height properties.
    | 
    |
    */
    'width' => 197,
    'height' => 51,

    /*
    |--------------------------------------------------------------------------
    | Background Captcha
    |--------------------------------------------------------------------------
    | You can specify an array or string.
    |
    */
    'background' => 'f2f2f2',

    /*
    |--------------------------------------------------------------------------
    | Colors characters
    |--------------------------------------------------------------------------
    | You can specify an array or string.
    |
    */
    'colors' => '000000',

    /*
    |--------------------------------------------------------------------------
    | Scratches
    |--------------------------------------------------------------------------
    | The number of scratches displayed in the Captcha.
    |
    */
    'scratches' => 30,

    /*
    |--------------------------------------------------------------------------
    | Captcha style
    |--------------------------------------------------------------------------
    | Supported: "wave".
    |
    */
    'style' => 'wave',

    /*
    |--------------------------------------------------------------------------
    | Id of the Captcha code input textbox
    |--------------------------------------------------------------------------
    | After updating the Captcha focus will be set on an element with this id.
    |
    */
    'inputId' => 'captcha',

];