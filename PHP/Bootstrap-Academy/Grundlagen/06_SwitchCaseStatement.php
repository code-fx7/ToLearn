<!-- Das Switch-Case-Statement
 -->
 <?php
$test_txt = "Muscheln";
switch($test_txt) {
    case "Spaghetti";
        echo "Dein Lieblingsessen sind also Spaghetti.";
        break;
    case "Muscheln";
        echo "Dein Lieblingsessen sind also Muscheln.";
        break;
    default:
        echo "DeinLieblingsessen ist also irgendwas anderes.";    
}