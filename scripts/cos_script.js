function createRequestCos (IDp, setValue) {
    if(setValue!=0) {
        let inputID = 'qnt' + setValue.toString();
        setValue = Number(document.getElementById(inputID).value);
        if(setValue>99)
            setValue=99;
    }
    
    $.ajax({
        url:"phpscripts/edit_cart.php",    
        type: "post",    
        dataType: 'json',
        data: {prodID: IDp, value:setValue},
        success:function(result){
            console.log('3');
        }
    });
    location.reload();
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function confirmOrder() {
    location.href="phpscripts/send_order.php";
}