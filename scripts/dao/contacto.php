<?PHP

include ''.dirname(__FILE__).'/../utils/conexion.php';
include ''.dirname(__FILE__).'/../utils/functions.php';

$nameContact =  base_de_datos_scape($_POST["nameContact"]);
$numberContact =  base_de_datos_scape($_POST["numberContact"]);
$emailContact =  base_de_datos_scape($_POST["emailContact"]);
$commentContact =  base_de_datos_scape($_POST["commentContact"]);

$obj = new stdclass();
$obj->success = "";
$obj->description = "";

if($nameContact!="" && $numberContact!="" && $emailContact!="" && $commentContact!=""){

    $query = $conn->query("INSERT INTO contactoForm (`name`,`number`,`mail`,`comments`) VALUES ('".$nameContact."','".$numberContact."','".$emailContact."','".$commentContact."')");
    if($query===true){
        $obj->success = "true";
        $obj->description = "";
    } else {
        $obj->success = "false";
        $obj->description = "Error. Contact your administrator";
    }
} else {
    $obj->success = "false";
    $obj->description = "Error. you didnt complete all the contact form. Please complete it.";
}
echo json_encode($obj);

?>