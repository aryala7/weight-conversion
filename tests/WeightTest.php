<?php

it('can convert kilograms to pounds', function () {
    $pounds = \Aryala7\WeightConversion\Weight::kilograms(100)->toPounds();
    expect($pounds)->toEqual(2.2046);
});
