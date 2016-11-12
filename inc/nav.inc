<nav>		
	<ul class="c-nav c-nav--inline a-nav c-nav--high">				
		<li class="c-nav__item"><a class="c-link" href="index.php">Home</a></li>
		<li class="c-nav__item"><a class="c-link" href="action.php">Action Video Games</a></li>
		<li class="c-nav__item"><a class="c-link" href="roleplaying.php">Role Playing Video Games</a></li>
		<li class="c-nav__item"><a class="c-link" href="simulation.php">Simulation Video Games</a></li>			
	</ul>	
</nav>	



<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>

