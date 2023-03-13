<?php

namespace NumberToWords\NumberTransformer;

class BulgarianNumberTransformerTest extends NumberTransformerTest
{
    protected function setUp(): void
    {
        $this->numberTransformer = new BulgarianNumberTransformer();
    }

    public function providerItConvertsNumbersToWords(): array
    {
        return [
            [0, 'нула'],
            [1, 'едно'],
            [2, 'две'],
            [3, 'три'],
            [4, 'четири'],
            [5, 'пет'],
            [6, 'шест'],
            [7, 'седем'],
            [8, 'осем'],
            [9, 'девет'],
            [11, 'единадесет'],
            [12, 'дванадесет'],
            [16, 'шестнадесет'],
            [19, 'деветнадесет'],
            [20, 'двадесет'],
            [21, 'двадесет и едно'],
            [26, 'двадесет и шест'],
            [30, 'тридесет'],
            [31, 'тридесет и едно'],
            [40, 'четиридесет'],
            [43, 'четиридесет и три'],
            [50, 'петдесет'],
            [55, 'петдесет и пет'],
            [60, 'шестдесет'],
            [67, 'шестдесет и седем'],
            [70, 'седемдесет'],
            [79, 'седемдесет и девет'],
            [100, 'сто'],
            [101, 'сто и едно'],
            [199, 'сто деветдесет и девет'],
            [203, 'двеста и три'],
            [287, 'двеста осемдесет и седем'],
            [300, 'триста'],
            [356, 'триста петдесет и шест'],
            [410, 'четиристотин и десет'],
            [434, 'четиристотин тридесет и четири'],
            [578, 'петстотин седемдесет и осем'],
            [689, 'шестстотин осемдесет и девет'],
            [729, 'седемстотин двадесет и девет'],
            [894, 'осемстотин деветдесет и четири'],
            [999, 'деветстотин деветдесет и девет'],
            [1000, 'хиляда'],
            [1001, 'хиляда и едно'],
            [1097, 'хиляда и деветдесет и седем'],
            [1104, 'хиляда сто и четири'],
            [1243, 'хиляда двеста четиридесет и три'],
            [2385, 'две хиляди триста осемдесет и пет'],
            [3766, 'три хиляди седемстотин шестдесет и шест'],
            [4196, 'четири хиляди сто деветдесет и шест'],
            [5846, 'пет хиляди осемстотин четиридесет и шест'],
            [6459, 'шест хиляди четиристотин петдесет и девет'],
            [7232, 'седем хиляди двеста тридесет и две'],
            [8569, 'осем хиляди петстотин шестдесет и девет'],
            [9539, 'девет хиляди петстотин тридесет и девет']
        ];
    }
}
