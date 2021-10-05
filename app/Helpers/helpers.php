<?php


function menuNavegation($data)
{
    return request()->routeIs($data)?'active':'';
}


