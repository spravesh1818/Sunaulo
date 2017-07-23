<style>
.dropbtn {
    
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    
}

.dropdown {
    position: ;
    display: inline-block;
}

.dropdown-content {
    display: none;
    background-color: grey;
    position: absolute;
    
    min-width: 160px;
    overflow: hidden;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 10;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    position: relative;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
<div class="mobile_menu_container">
    <a href="#" class="mobile-menuitch">
        <div class="w3-container">
  
  <div class="w3-container" style="padding-left: 0px; padding-right: 0px; width: 100%">
<div class="dropdown">

<button onclick="myFunction()" class="dropbtn"><i class="fa fa-navicon" style="font-size:30px;color:black"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <a href={{route('home')}}>Home</a>
    <a>News</a>
    <a>Contact</a>
  </div>
</div>
</div>
</div>
</a>


<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
