$(start);

function start(){
    $("btn").on("click",letter);
}

function letter(){
    let myInputVal = $("#letter").val();
    $("#output").load(`letter.php?count=${myInputVal}`);
}