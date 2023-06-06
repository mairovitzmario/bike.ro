function createRequestCos (prodID) {
    $.ajax({
        url:"phpscripts/add_to_cart.php",  
        type: "post",    
        dataType: 'json',
        data: {productID: prodID},
        success:function(result){
            console.log('succes');
        }
    });

    var popup = document.getElementById('popup1');
    var overlay = document.querySelector('.overlay');
    popup.style.display = 'block';
    overlay.style.display = 'block';
}

function notLoggedIn() {
    var popup = document.getElementById('popup2');
    var overlay = document.querySelector('.overlay');
    popup.style.display = 'block';
    overlay.style.display = 'block';
}

function closePopup() {
    var popup1 = document.getElementById('popup1');
    var popup2 = document.getElementById('popup2');
    var overlay = document.querySelector('.overlay');
    popup1.style.display = 'none';
    popup2.style.display = 'none';
    overlay.style.display = 'none';
}