<?php


use PHPUnit\Framework\TestCase;
use \mafof\GrokAlghoritms\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function test()
    {
        // Отсортированный словарь =>
        $arrInput = [
           0 => 'Аптека',
           1 => 'Борода',
           2 => 'Веник',
           3 => 'Гироскоп',
           4 => 'Дом',
           5 => 'Ель',
           6 => 'Ёжик',
           7 => 'Жизнь',
           8 => 'Зил',
           9 => 'Интерьер',
           10 => 'Йод',
           11 => 'Карусель',
           12 => 'Лом',
           13 => 'Мойка',
           14 => 'Нос',
           15 => 'Один',
           16 => 'Поселок',
           17 => 'Рамблер',
           18 => 'Ява'
        ];

        $this->assertSame(4, BinarySearch::run('Дом'));
        $this->assertSame(null, BinarySearch::run('Дерево'));
    }
}
