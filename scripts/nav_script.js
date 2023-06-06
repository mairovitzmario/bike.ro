
window.addEventListener("load", (event) => {
  loadNavigationBar("navbar");
});


function loadNavigationBar(elementId) {
    fetch('nav.php')
      .then(response => response.text())
      .then(html => {
        const element = document.getElementById(elementId);
        if (element) {
          element.innerHTML = html;
        }
        
      })
      .catch(error => console.error(error));
  }
  
  function redirect() {
    user_data = "<?php echo $user_data; ?>";
    console.log(user_data);
    if(user_data == 'blank')
      location.href = 'user.php';
    else
      location.href = 'conectare.php';
  }
 