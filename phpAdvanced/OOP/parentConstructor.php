<?php
class Name
{
    var $_firstName;
    var $_lastName;
    function Name($first_name, $last_name)
    {
        $this->_firstName = $first_name;
        $this->_lastName = $last_name;
    }
    function toString() {
        return($this->_lastName .", " .$this->_firstName);
    }
}
class NameSub1 extends Name
{
    var $_middleInitial;
    function NameSub1($first_name, $middle_initial, $last_name) {
        Name::Name($first_name, $last_name);
        $this->_middleInitial = $middle_initial;
    }
    function toString() {
        return(Name::toString() . " " . $this->_middleInitial);
    }
}

$ins=new Name('ali','jamali');
echo $ins->toString().'<br >';
$ins=new NameSub1('ali','raza','jamali');
echo $ins->toString();

?>