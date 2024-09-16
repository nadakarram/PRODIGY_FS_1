import './bootstrap';

$btn=document.getElementById("btn")
$r=document.getElementById("opop")
$r.display="none"
    $btn.onClick=(e)=>{
        e.preventDefault()
        $r.display="block"
        


    }