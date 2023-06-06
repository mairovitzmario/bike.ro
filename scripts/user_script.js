
function changeToTextbox() {
    let td = document.getElementById("address-bar");
    let txt = td.innerHTML;
    txt = txt.replace('<i class="material-icons" style="font-size:20px; cursor:pointer;" onclick="changeToTextbox()">edit</i>', '');
    td.innerHTML = '<form name="address-form" id="address-form" method="post" action=""><input type="text" id="address-textbox" name="address-textbox"> <input type="submit" id="confirm-button" name="confirm-button">';
    document.getElementById('address-textbox').value = txt;
}