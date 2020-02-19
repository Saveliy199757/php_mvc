<?php

require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

session_start();

$router = new Router;
$router->run();

$p = array(
    0 => array(
        'id' => 105,
        'code' => P_105,
        'name' => Дополнительно,
        'type' => text,
        'values' => array(
            0 => array(
                'id' => 49,
                'name' => "Без наличника",
            ),
            1 => array(
                'id' => 36,
                'name' => "Наличник + 1 300.00 Р"
            ),
            2 => array(
                'id' => 35,
                'name' => "Дверная коробка  +  1 300.00 Р"
            ),
            3 => array(
                'id' => 0,
                'name' => "-",
                'stub' => 1
            )


        )
    ),
    1 => array(
        'id' => 169,
        'code' => P_169,
        'name' => 'Дробная планка (расширитель дверной коробки)',
        'type' => text,
        'values' => array(
            0 => array(
                'id' => 43,
                'name' => 'Без дробной планки'
            ),
            1 => array(
                'id' => 44,
                'name' => 'Глубина 100  +  1 300.00 Р'
            ),
            2 => array(
                'id' => 45,
                'name' => 'Глубина 150  +  1 300.00 Р'
            ),
            3 => array(
                'id' => 46,
                'name' => 'Глубина 200  +  1 300.00 Р'
            ),
            4 => array(
                'id' => 0,
                'name' => '-',
                'stub' => 1,

            )
        )
    )
);
$arData['offers'] = array(
    0 => array(
        'id' => 737,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 7600,
                    'display' => 7600
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 7600,
                    'display' => 7600,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 35,
            'P_169' => 46
        )
    ),

    1 => array(
        'id' => 736,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 7600,
                    'display' => 7600
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 7600,
                    'display' => 7600,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 35,
            'P_169' => 44
        )
    ),
    2 => array(
        'id' => 738,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 7600,
                    'display' => 7600
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 7600,
                    'display' => 7600,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 35,
            'P_169' => 45
        )
    ),
    3 => array(
        'id' => 739,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 6300,
                    'display' => 6300
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 6300,
                    'display' => 6300,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 35,
            'P_169' => 43
        )
    ),
    4 => array(
        'id' => 740,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 6300,
                    'display' => 6300
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 6300,
                    'display' => 6300,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 36,
            'P_169' => 43
        )
    ),
    5 => array(
        'id' => 741,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 7600,
                    'display' => 7600
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 7600,
                    'display' => 7600,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 36,
            'P_169' => 44
        )
    ),
    6 => array(
        'id' => 742,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 7600,
                    'display' => 7600
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 7600,
                    'display' => 7600,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 36,
            'P_169' => 45
        )
    ),
    7 => array(
        'id' => 743,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 5000,
                    'display' => 5000
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 5000,
                    'display' => 5000,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 49,
            'P_169' => 43
        )
    ),
    8 => array(
        'id' => 744,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 6300,
                    'display' => 6300
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 6300,
                    'display' => 6300,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 49,
            'P_169' => 44
        )
    ),
    9 => array(
        'id' => 745,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 6300,
                    'display' => 6300
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 6300,
                    'display' => 6300,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 49,
            'P_169' => 45
        )
    ),
    10 => array(
        'id' => 746,
        'prices' => array(
            0 => array(
                'title' => 'Базовая',
                'base' => array(
                    'value' => 6300,
                    'display' => 6300
                ),
                'discount' => array(
                    'percent' => 0,
                    'value' => 6300,
                    'display' => 6300 ,
                    'difference' => 0
                )

            )
        ),
        'available' => 1,
        'quantity' => array(
            'value' => 2,
            'ratio' => 1,
            'trace' => 1
        ),
        'values' => array(
            'P_105' => 49,
            'P_169' => 46
        )
    ),
);
