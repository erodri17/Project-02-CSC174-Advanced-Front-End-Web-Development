<ul class="topnav" id="myTopnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="action.php">Action Video Games</a></li>
  <li><a href="roleplaying.php">Role Playing Video Games</a></li>
  <li><a href="simulation.php">Simulation Video Games</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>




