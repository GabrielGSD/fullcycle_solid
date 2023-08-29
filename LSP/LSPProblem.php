<?php

class Movie
{
    public function play()
    {
        // play no video
    }

    public function increaseVolume()
    {
        // aumenta o volume
    }
}

class TheLionKing extends Movie
{

}

//Filme sem som do Charlie Chaplin
// **ERRADO** usar o extends para herdar de Movie
class ModernTimes extends Movie
{
    public function increaseVolume()
    {
        // Erro, filme sem som
    }
}