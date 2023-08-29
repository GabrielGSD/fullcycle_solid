<?php

class Video
{
    private $type;

    public function calculaInteresse()
    {
        if ($this->type == "Movie") {
            // calcula interesse baseado em filme
        } else if ($this->type == "TVShow") {
            // calcula o interesse baseado em serie
        }
    }
}