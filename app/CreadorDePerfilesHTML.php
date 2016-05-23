<?php

/**
 * Created by PhpStorm.
 * User: roger
 * Date: 18/04/16
 * Time: 16:58
 */
class CreadorDePerfiles
{
    public function show()
    {
        return "<div>
             Id: <b> " . $this->id . "</b><br>
             Nom: " . $this->name . "
             </div>";
    }
}