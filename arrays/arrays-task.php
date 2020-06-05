Реализуйте функцию apply, которая применяет указанную операцию к переданному массиву и возвращает новый массив. Всего нужно реализовать три операции:

    reset - Сброс массива
    remove - Удаление значения по индексу
    change - Обновление значения по индексу
    
//EXAMPLE 
<?php

use function App\Arrays\apply;

$cities = ['moscow', 'london', 'berlin', 'porto'];

// Сброс в пустой массив
apply($cities, 'reset'); // []

// удаление значения по индексу
apply($cities, 'remove', 1); // ['moscow', 'berlin', 'porto']
// изменение значения по индексу
apply($cities, 'change', 0, 'miami'); // ['miami', 'london', 'berlin', 'porto']

//SOLUTION
<?php

namespace App\Arrays;

function apply(array $arr, $operationName, $index = null, $value = null)
{
    // BEGIN (write your solution here)
    if ($operationName == 'reset') {
        $arr = [];
    } elseif ($operationName == 'remove') {
        unset($arr[$index]);
    } elseif ($operationName == 'change') {
        $arr[$index] = $value;
    }

    return $arr;
    // END
}


//TEST
use PHPUnit\Framework\TestCase;

use function App\Arrays\apply;

class ArraysTest extends TestCase
{
    public function testGet()
    {
        $cities = ['moscow', 'london', 'berlin', 'porto'];

        $result1 = apply($cities, 'reset');
        $this->assertEquals([], $result1);

        $result2 = apply($cities, 'remove', 1);
        $this->assertEquals(['moscow', 'berlin', 'porto'], array_values($result2));
        $result3 = apply($cities, 'change', 0, 'miami');
        $this->assertEquals(['miami', 'london', 'berlin', 'porto'], array_values($result3));
    }
}
