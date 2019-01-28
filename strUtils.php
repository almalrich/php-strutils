<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 28/01/2019
 * Time: 15:39
 */

class strUtils
{
    private $str= "almalrich";
public function bold (){
    return "<b>".$this->str."</b>";

}
public function italic (){
    return "<i>".$this->str."</i>";
}

public function underline () {
    return "<u>".$this->str."</u>";
}

public function capitalize () {
    return"<span style='text-transform : capitalize'>".$this->str."</span>";
}

public function uglify () {
    return $this->bold()->str;
    return $this->underline()->str;
    return $this->italic()->str;

}

}