<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    protected $helpers = ['array', 'xml'];

    public function index()
    {
        $data = [
            'foo' => [
                'buzz' => [
                    'fizz' => 11
                ],
                'bar' => [
                    'baz' => 23
                ]
            ]
        ];

        // $fizz = dot_array_search('foo.buzz.fizz', $data);

        // echo $fizz;


        // $string = '<p>Here is a paragraph & an entity (&#123;).</p>';
        // $string = xml_convert($string);
        // echo $string;

        return view('pages/helloworld', [
            'title' => '首頁',
            'data' => $data
        ]);
    }
}
