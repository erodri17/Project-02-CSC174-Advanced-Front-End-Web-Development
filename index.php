<!--
Name: TEAM02-Team Adonding Poncho
Project 2: Improving Customer Website
Institution: University of Rochester
Professor Kostin
Semester: Fall 2016
CSC174: Advanced Front End Deveploment
Team Members: Evan Basta, Joshua Anes, Ethan Pupkin, Rayan Ifthikhar
All Rights Reserved
-->

<!--Description-->

<!--The purpose of this assignment if for Team02-Team Adonding Poncho to make changes to the customer website as stated on our proposal. The customer on this team is Team10-One Man Army. The orginal source for this project can be found in the following repository: https://github.com/J-Zhang104/CSC174-Group-10 -->


<!--Header-->
	<?php include "inc/head.inc"; ?>
<!--End:Header-->

<!--Link to read Google font used in the CSS "Source Code Pro"-->
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
<!--End: Link to read Google font used in the CSS "Source Code Pro"-->

<!--Navigation -->
	<?php include "inc/nav.inc"; ?>
<!--End: Navigation -->

<!--Image Slider-->
<body class="parallax">
<!--Picture slider goes here-->
<div id="slides">
<div class="slides-container">
<img src="sliderImages/image1.jpg" width="1024" height="682" alt="video game 1">
<img src="sliderImages/image2.jpg" width="1024" height="682" alt="video game 2">
<img src="sliderImages/image3.jpg" width="1024" height="682" alt="video game 3">
<img src="sliderImages/image4.jpg" width="1024" height="682" alt="video game 4">
</div>
<nav class="slides-navigation">
<a href="#" class="next">Next</a>
<a href="#" class="prev">Previous</a>
</nav>
</div>->
<!--End: Picture slider goes here-->
<!---End: Image Slider->



<!--Below is one of the original scripts in the source code, it has commented out for future referece-->
<!--Beginning of Script--->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8">

</script>
<script>
$(function() {
$('#slides').superslides({
hashchange: true,
play: 4500
});
$('#slides').on('mouseenter', function() {
$(this).superslides('stop');
console.log('Stopped')
});
$('#slides').on('mouseleave', function() {
$(this).superslides('start');
console.log('Started')
});
});
</script>
<!--End: Beginning of Script--->

<!-- From: https://en.wikipedia.org/wiki/Video_game -->
<!--Above is one of the original scripts in the source code, it has commented out for future referece-->





<div class="o-container o-container--large">
<!--Block: About Video Games-->
<div class="o-grid o-grid--wrap o-grid--demo">
<div class= "o-grid__cell o-grid__cell--width-70 o-grid__cell--width-33@small">

<h2 class="c-heading c-heading--xlarge">About Video Games</h2>

<p>A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device such as a TV screen or computer monitor. The word video in video game traditionally referred to a raster display device, but as of the 2000s, it implies any type of display device that can produce two- or three-dimensional images. Some theorists categorize video games as an art form, but this designation is controversial.</p>

<p>The electronic systems used to play video games are known as platforms; examples of these are personal computers and video game consoles. These platforms range from large mainframe computers to small handheld computing devices. Specialized video games such as arcade games, in which the video game components are housed in a large, coin-operated chassis, while common in the 1980s in video arcades, have gradually declined in use due to the widespread availability of affordable home video game consoles (e.g., PlayStation 4 and Xbox One) and video games on desktop and laptop computers and smartphones.</p>

<p>The input device used for games, the game controller, varies across platforms. Common controllers include gamepads, joysticks, mouses, keyboards, the touchscreens of mobile devices and buttons. Players typically view the game on a video screen or television and there are often game sounds from loudspeakers. Some games in the 2000s include haptic, vibration-creating effects, force feedback peripherals and virtual reality headsets. In the 2010s, the video game industry is of increasing commercial importance, with growth driven particularly by the emerging Asian markets and mobile games, which are played on smartphones. As of 2015, video games generated sales of USD 74 billion annually worldwide, and were the third-largest segment in the U.S. entertainment market, behind broadcast and cable TV.</p>
<br>
		<br>
</div><!--End: <div class= "o-grid__cell o-grid__cell--width-70">  -->

<!--This section is a div to put the images of the game controller and call of duty game to the right of the text under the "About Video Games" section"-->
<div class="o-grid__cell o-grid__cell--width 30 o-grid__cell--width-33@small">
<figure>
	<img class="o-image" src="images/controller.jpg" alt="A video game controller">
</figure>
<div class="c-card__content c-card__content--divider">SNES Video Game Controller. <a class="c-link" href="https://en.wikipedia.org/wiki/Video_game#/media/File:SNES-Controller.jpg"> Source</a></div>

<figure>
	<img class="o-image" src="images/iw.jpg" alt="Infinite Warfare">
</figure>
</div> <!--End: <div class="o-grid__cell o-grid__cell--width 30"> -->

<!--This section is a div to put the images of the game controller and call of duty game to the right of the text under the "About Video Games" section"-->

</div><!-- End: <div class="o-grid"> -->
<!--End-Block: About Video Games-->

<!--Block: Genres-->
<div class= "o-grid o-grid--wrap o-grid--demo">
<div class= "o-grid__cell o-grid__cell--width-70 o-grid__cell--width-33@small">
	<h2 class="c-heading c-heading--xlarge">Genres</h2>
	<p>A video game, like most other forms of media, may be categorized into genres. Video game genres are used to categorize video games based on their gameplay interaction rather than visual or narrative differences. A video game genre is defined by a set of gameplay challenges and are classified independent of their setting or game-world content, unlike other works of fiction such as films or books. For example, a shooter game is still a shooter game, regardless of whether it takes place in a fantasy world or in outer space.</p>

	<p>Because genres are dependent on content for definition, genres have changed and evolved as newer styles of video games have come into existence. Ever advancing technology and production values related to video game development have fostered more lifelike and complex games which have in turn introduced or enhanced genre possibilities (e.g., virtual pets), pushed the boundaries of existing video gaming or in some cases add new possibilities in play (such as that seen with titles specifically designed for devices like Sony's EyeToy). Some genres represent combinations of others, such as massively multiplayer online role-playing games, or, more commonly, MMORPGs. It is also common to see higher level genre terms that are collective in nature across all other genres such as with action, music/rhythm or horror-themed video games.
	</p>
		<br>
		<br>
	</div> <!-- End: <div class= "o-grid__cell o-grid__cell--width-70">-->
<!--This section is a div to put the images of the game controller and call of duty game to the right of the text under the "About Video Games" section"-->

	<div class= "o-grid__ cell o-grid__ cell-- width-30 o-grid__cell--width-33@small">
		<figure>
			<img class="o-image" src="images/mwr.jpg" alt="Modern Warfare Remastered">
		</figure>
	</div> <!-- o-grid 30-->

<!--This section is a div to put the images of the game controller and call of duty game to the right of the text under the "About Video Games" section"-->
</div class= "o-grid"><!--End: <div class= "o-grid"> -->
<!--End-Block: Genres-->

<!--Block: History-->
<div class= "o-grid o-grid--wrap o-grid--demo">
<div class= "o-grid__cell o-grid__cell--width-70 o-grid__cell--width-33@small">
		<h2 class="c-heading c-heading--xlarge">History</h2>

		<p>Early games used interactive electronic devices with various display formats. The earliest example is from 1947—a "Cathode ray tube Amusement Device" was filed for a patent on 25 January 1947, by Thomas T. Goldsmith Jr. and Estle Ray Mann, and issued on 14 December 1948, as U.S. Patent 2455992. Inspired by radar display technology, it consisted of an analog device that allowed a user to control a vector-drawn dot on the screen to simulate a missile being fired at targets, which were drawings fixed to the screen. Other early examples include: The Nimrod computer at the 1951 Festival of Britain; OXO a tic-tac-toe Computer game by Alexander S. Douglas for the EDSAC in 1952; Tennis for Two, an electronic interactive game engineered by William Higinbotham in 1958; Spacewar!, written by MIT students Martin Graetz, Steve Russell, and Wayne Wiitanen's on a DEC PDP-1 computer in 1961; and the hit ping pong-style Pong, a 1972 game by Atari. Each game used different means of display: NIMROD used a panel of lights to play the game of Nim, OXO used a graphical display to play tic-tac-toe Tennis for Two used an oscilloscope to display a side view of a tennis court, and Spacewar! used the DEC PDP-1's vector display to have two spaceships battle each other.</p>

		<p>In 1971, Computer Space, created by Nolan Bushnell and Ted Dabney, was the first commercially sold, coin-operated video game. It used a black-and-white television for its display, and the computer system was made of 74 series TTL chips. The game was featured in the 1973 science fiction film Soylent Green. Computer Space was followed in 1972 by the Magnavox Odyssey, the first home console. Modeled after a late 1960s prototype console developed by Ralph H. Baer called the "Brown Box", it also used a standard television. These were followed by two versions of Atari's Pong; an arcade version in 1972 and a home version in 1975 that dramatically increased video game popularity. The commercial success of Pong led numerous other companies to develop Pong clones and their own systems, spawning the video game industry.</p>

		<p>Video on the history of video games: <a class="c-link" href="https://www.youtube.com/watch?v=xmO2qvRgOV4">Chasing Ghosts: Beyong the Arcade (2:10 Mintues)</a></p>
		<br>
		<br>
	</div> <!-- End: <div class= "o-grid__cell o-grid__cell--width-70">-->
	</div><!--<div class= "o-grid">-->
<!--End-Block: History-->

<!--Block: Classifications-->
	<div class="o-grid o-grid--wrap o-grid--demo">
	<div class="o-grid__cell o-grid__cell--width-70 o-grid__cell--width-33@small">
		<h2 class="c-heading c-heading--xlarge">Classifications</h2>

		<h3 class="c-heading c-heading--large">Casual games</h3>
		<p>Casual games derive their name from their ease of accessibility, simple to understand gameplay and quick to grasp rule sets. Additionally, casual games frequently support the ability to jump in and out of play on demand. Casual games as a format existed long before the term was coined and include video games such as Solitaire or Minesweeper which can commonly be found pre-installed with many versions of the Microsoft Windows operating system. Examples of genres within this category are match three, hidden object, time management, puzzle or many of the tower defense style games. Casual games are generally available through app stores and online retailers such as PopCap, Zylom and GameHouse or provided for free play through web portals such as Newgrounds. While casual games are most commonly played on personal computers, phones or tablets, they can also be found on many of the on-line console system download services (e.g., the PlayStation Network, WiiWare or Xbox Live).</p>
		<br>
		<br>
	</div><!--End:<div class="o-grid__cell o-grid__cell--width-70">-->

	<div class= "o-grid__cell o-grid__cell--width-30 o-grid__cell--width@33small">
		<figure>
			<img class="o-image" src="images/bf1.jpg" alt="Battlefield One">
		</figure>
	</div><!--<div class= "o-grid__cell o-grid__cell--width-30">-->
</div><!--<div class="o-grid">-->
<!--End-Block: Classifications-->

<!--Block: Serious Games-->
	<div class= "o-grid o-grid--wrap o-grid--demo">
	<div class="o-grid__cell o-grid__ cell--width-70 o-grid__cell--width-33@small">
		<h3 class="c-heading c-heading--large">Serious Games</h3>

		<p>Serious games are games that are designed primarily to convey information or a learning experience of some sort to the player. Some serious games may even fail to qualify as a video game in the traditional sense of the term. Educational software does not typically fall under this category (e.g., touch typing tutors, language learning, etc.) and the primary distinction would appear to be based on the title's primary goal as well as target age demographics. As with the other categories, this description is more of a guideline than a rule.</p>

		<p>Serious games are games generally made for reasons beyond simple entertainment and as with the core and casual games may include works from any given genre, although some such as exergames, educational games, or propaganda games may have a higher representation in this group due to their subject matter. These games are typically designed to be played by professionals as part of a specific job or for skill set improvement. They can also be created to convey social-political awareness on a specific subject.</p>
		<br>
		<br>
	</div><!--End: <div class="o-grid__cell o-grid__ cell--width-70">-->
	<div class="o-grid__cell o-grid__cell--width-30 o-grid__cell--width-33@small">
		<figure>
			<img class="o-image" src="images/fh3.jpg" alt="Forza Horizon 3">
		</figure>
	</div><!--<div class="o-grid__cell o-grid__cell--width-30">-->
</div><!--<div class= "o-grid">-->
<!--End-Block: Serious Games-->

<!--Sixth block: Platforms-->
<div class="o-grid o-grid--wrap o-grid--demo">
	<div class="o-grid__ cell o-grid__cell--width-70 o-grid__cell--width-33@small">
		<h3 class="c-heading c-heading--large">Platforms</h3>

		<p>The term "platform" refers to the specific combination of electronic components or computer hardware which, in conjunction with software, allows a video game to operate. The term "system" is also commonly used. The distinctions below are not always clear and there may be games that bridge one or more platforms. In addition to personal computers, there are other devices which have the ability to play games but are not dedicated video game machines, such as smartphones, PDAs and graphing calculators.</p>

		<p>Examples of platforms: </p>
		<ul class="c-list">
			<li class="c-list__item">PC</li>
			<li class="c-list__item">Console</li>
			<li class="c-list__item">Handheld</li>
			<li class="c-list__item">Arcade</li>
			<li class="c-list__item">Web browser</li>
		</ul>
		<br>
		<br>
	</div><!--End: 	<div class="o-grid__ cell o-grid__cell--width-70">-->



	<div class="o- grid__cell o-grid__cell--width-30 o-grid__cell--width-33@small">
	</div><!--<div class="o- grid__cell o-grid__cell--width-30">-->
	</div> <!--End: <div class="o-grid">-->
<!--End: Sixth block: Platforms-->
<!--Block: Video Game Programming-->
	<div class= "o-grid o-grid--wrap o-grid--demo">
		<div class="o-grid__cell o-grid__cell--width-70 o-grid__cell--width33@small">
		<h2 class="c-heading c-heading--xlarge">Video Game Programming</h2>

			<p>Video game development and authorship, much like any other form of entertainment, is frequently a cross-disciplinary field. Video game developers, as employees within this industry are commonly referred, primarily include programmers and graphic designers. Over the years this has expanded to include almost every type of skill that one might see prevalent in the creation of any movie or television program, including sound designers, musicians, and other technicians; as well as skills that are specific to video games, such as the game designer. All of these are managed by producers. </p>

			<p>With the growth of the size of development teams in the industry, the problem of cost has increased. Development studios need to be able to pay their staff a competitive wage in order to attract and retain the best talent, while publishers are constantly looking to keep costs down in order to maintain profitability on their investment. Typically, a video game console development team can range in sizes of anywhere from 5 to 50 people, with some teams exceeding 100. In May 2009, one game project was reported to have a development staff of 450. The growth of team size combined with greater pressure to get completed projects into the market to begin recouping production costs has led to a greater occurrence of missed deadlines, rushed games and the release of unfinished products.</p>
			<br>
			<br>
		</div><!--<div class="o-grid__cell o-grid__ cell--width-70">-->
		<div class="o-grid__cell o-grid__cell--width-30 o-grid__cell--width-33@small">
			<div class="c-card c-card--higher c-card--primary">
				<div class="c-card__content c-card__content--divider">Example of Programming Code. <a class="c-link" href="http://throwingdigitalsheep.com/video-game-development-hard-with-sidenote-easy/"> Source</a></div>
				<figure>
					<img class="o-image" src="images/programming.png" alt="programming code">
				</figure>
			</div>
		</div>
	</div><!--End: <div class="o-grid__cell o-grid__cell--width-30">-->
<!--End-Block: Video Game Programming-->


<!--End-Block: Video Game Programming-->
<!--Block: Can playing video game make you smarter?-->
	<div class="o-grid o-grid--wrap o-grid--demo">
		<!--From: http://www.cbsnews.com/news/playing-video-games-could-make-you-smarter/  -->
		<div class="o-grid__cell o-grid__cell--width-70 o-grid__cell--width-33@small">
			<h2 class="c-heading c-heading--xlarge">Can playing video games make you smarter?</h2>

			<p>Taking out terrorists or shooting up zombies in video games could be more than just an adrenaline rush. It may actually make you smarter.</p>

			<p>A new study out this week in Proceedings of the National Academy of Sciences demonstrates for the first time that people who played action games like "Call of Duty" and "Unreal Tournament 2004" showed greater capacity to learn than those who played non-action games. Those improvements on a range of tasks were still with them when they were tested again a year later.</p>

			<p>"Prior research by our group and others has shown that action gamers excel at many tasks. In this new study, we show they excel because they are better learners," said Daphne Bavelier, a research professor in brain and cognitive sciences at the University of Rochester. "And they become better learners by playing the fast-paced action games."</p>

			<p>Bavelier said our brains keep predicting what will come next - whether when listening to a conversation, driving, or even preforming surgery. "In order to sharpen its prediction skills, our brains constantly build models, or 'templates,' of the world," she said. "The better the template, the better the performance. And now we know playing action video game actually fosters better templates."</p>

			<p>Ohio State professor Brad J. Bushman, who has done extensive research into the effects of violent video games on players, called it a "cool paper" but questioned whether the violence was necessary to produce learning.</p>

			<p>"I believe the findings. What I fear, however, is that people will use such findings to justify playing violent action games," Bushman said. "I would love to see studies test three types of video games: (1) violent action, (2) nonviolent action, and (3) non-action. Action and violence are confounded in many video games. My hypothesis is that it is the action that produces the learning rather than the violence. The key is to develop exciting, action-packed nonviolent games."</p>
			<br>
			<br>
		</div><!--<div class="o-grid__cell o-grid__cell--width-70">-->
		<div class="o-grid__cell o-grid__cell--width-30 o-grid__cell--width-33@small">
			<figure>
				<img class="o-image" src="images/wd2.jpg" alt="Watch Dogs 2">
			</figure>
		</div><!--<div class="o-grid__cell o-grid__cell--width-30">-->
		</div><!--End: <div class="o-grid">-->

		<!--	 <h3 class="c-heading c-heading--xlarge">Upcoming Video Games</h3>

		<iframe width="560" height="315" src="https://www.youtube.com/embed/irIkbTen53k" allowfullscreen></iframe>

		<iframe width="560" height="315" src="https://www.youtube.com/embed/l-eMi1xJ2dM" allowfullscreen></iframe>

		<iframe width="560" height="315" src="https://www.youtube.com/embed/c7nRTF2SowQ" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/fTSUgXkfooA" allowfullscreen></iframe>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/2ISYN1AshZY" allowfullscreen></iframe>

		<iframe width="560" height="315" src="https://www.youtube.com/embed/hh9x4NqW0Dw" allowfullscreen></iframe>
		-->
<!--End-Block: Can playing video game make you smarter?-->
</body><!---End: body-->

<!--Footer-->
<footer>
	<div class="o-grid">
	<h2 class="c-heading c-heading--xlarge">Works Cited</h2>
	<ul class="c-list">
		<li class="c-list__item">"Video Game". Wikipedia. 20 September 2016. Web. 26 September 2016. <a class="c-link" href="https://en.wikipedia.org/wiki/Video_game">https://en.wikipedia.org/wiki/Video_game</a>.</li>
		<li class="c-list__item">"Can Playing Video Games Make you Smarter?" CBS News. 12 November 2014. Web. 26 September 2016. <a class="c-link" href="http://www.cbsnews.com/news/playing-video-games-could-make-you-smarter/">http://www.cbsnews.com/news/playing-video-games-could-make-you-smarter/</a>.</li>
		<li class="c-list__item"><a class="c-link" href="https://www.youtube.com/watch?v=irIkbTen53k">https://www.youtube.com/watch?v=irIkbTen53k</a></li>
		<li class="c-list__item"><a class="c-link" href="https://www.youtube.com/watch?v=l-eMi1xJ2dM">https://www.youtube.com/watch?v=l-eMi1xJ2dM</a></li>
		<li class="c-list__item"><a class="c-link" href="https://www.youtube.com/watch?v=c7nRTF2SowQ">https://www.youtube.com/watch?v=c7nRTF2SowQ</a></li>
		<li class="c-list__item"><a class="c-link" href="https://www.youtube.com/watch?v=fTSUgXkfooA">https://www.youtube.com/watch?v=fTSUgXkfooA</a></li>
		<li class="c-list__item"><a class="c-link" href="https://www.youtube.com/watch?v=2ISYN1AshZY">https://www.youtube.com/watch?v=2ISYN1AshZY</a></li>
		<li class="c-list__item"><a class="c-link" href="https://www.youtube.com/watch?v=hh9x4NqW0Dw">https://www.youtube.com/watch?v=hh9x4NqW0Dw</a></li>
	</ul>
</footer>
<!--End: Footer-->

<!--Footer include file-->
<?php include "inc/footer.inc"; ?>
<!--End: Footer include file-->

</div><!--End:<div class="o-grid">-->