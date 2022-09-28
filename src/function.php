<?php

function sayHello(string $name = "Dr. Manhattan") : string
{
    return "Hello $name";
}

function whoAmI(string $name, array $watchmen = ['Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl']) : string|null
{
    if(in_array($name, $watchmen)) {
        return "$name est un watchmen";
    }
    return "c'est un intrus";
}

function callByFullName(string $name, string $lastName) : string
{
 return "Hello $name $lastName, warm welcome!";
}