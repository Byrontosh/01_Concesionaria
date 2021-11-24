<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function personal()
    {
        $persons =
        [
            ['Nombre' => 'Byron',
            'Apellido' => 'Loarte',
            "Contacto"=>'0995644186',
            "Web"=>'https://github.com/Byrontosh',
            "img"=>'https://avatars.githubusercontent.com/u/26908663?s=400&u=49f94b29390632f362a4f9cb7cdd79a42cab1baa&v=4'
            ],

            ["Nombre"=>'Janneth',
            "Apellido"=>'Peña',
            "Contacto"=>'0995644186',
            "Web"=>'https://github.com/Janneth',
            "img"=>'https://avatars.githubusercontent.com/u/38837073?v=4'
        ],
            ["Nombre"=>'Luis',
            "Apellido"=>'Pérez',
            "Contacto"=>'0995644186',
            "Web"=>'https://github.com/Luis',
            "img"=>'https://avatars.githubusercontent.com/u/73706516?v=4'
            ]
        ];


        return view('personal',compact('persons'));
    }
}
