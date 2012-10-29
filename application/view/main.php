<style>
	#MStage{
		background: #000000;
	}
	#MStage h1{
		font-size: 7em;
	}
</style>

<div id="MStage">
	<div class="MContentSpacer"></div>
	
	<div class="MContent840">
		<img src="<?php echo MLoad::img_application('mogul_logo_white.png')?>" />
			
			<h1 class="MTextWhite right">
				Mogul MVC
			</h1>
		
		<div class="clear"></div>
		
	</div>
	
	<div class="shadow-top"></div>
</div><!-- MStage -->

<nav class="MToolBar">
	<div class="MContent700 MTextCentered">
		<a href="/css_typography">Typography</a>
		<a href="/css_icons">Icons</a>
		<a href="/css_classes">CSS Classes</a>
		<a href="/js_classes">JavaScript Classes</a>
		<a href="/js_managers">JavaScript Managers</a>
	</div>
</nav>

<div class="MContent840">
	
	<div class="MTextCenter">
		<p style="font-size: 2em;">Mogul MVC is an MVC framework and UI library written in<br /><a href="http://www.php.net/">PHP</a>, <a href="http://jquery.com/">jQuery</a>, and <a href="http://sass-lang.com/">Sass</a></p>
		<p>It's designed to be fast, have a small footprint, work on shared hosting, and not require the installation of any additional software.</p>
		<p>It's designed to have as few abstraction layers as possible, while also helping you orgaize your web application.</p>
		<p class="MTextBold">Mogul MVC is not Open-Source yet.<br />But...</p>
	</div>
	
	<div class="MContentSpacer"></div>
	<div class="MTextCenter">
		<span class="MNoteY MTextBold">If you're interested in Mogul MVC please read "Why Use Mogul MVC?".</span>	
	</div>
	<div class="MContentSpacer"></div>
	<div class="MContentSpacer"></div>
	
	<div class="MTabWidget">
		<ul class="MTabContainer">
			<li class="MTab">
				<a href="#mogul_libraries">Mogul Libraries</a>
			</li>
			<li class="MTab">
				<a href="#why_use">Why Use Mogul MVC?</a>
			</li>
		</ul>
		<hr />
		<div>
			<div id="mogul_libraries">
				
				<h3>Mogul MVC is a combination of several Mogul libraries.</h3>
				
				<li class="MListItem">
					<span class="MTextBold">Mogul AS</span>
					<span> - An ActionScript library that attempts to stay stylistically consistent with Mogul CSS, Mogul JS, and Mogul MVC.</span>
				</li>
				
				<li class="MListItem">
					<span class="MTextBold">Mogul CSS</span>
					<span> - A Sass based CSS library that is used by Mogul JS and Mogul MVC for styling. It attempts to stay stylistically consistent with Mogul AS.</span>
				</li>
			
				<li class="MListItem">
					<span class="MTextBold">Mogul Icons</span>
					<span> - An icon set containing anything from social icons to ui element icons.</span>
				</li>
				
				<li class="MListItem">
					<span class="MTextBold">Mogul Icons</span>
					<span> - A JavaScript and jQuery Utility and Interface library that uses the Mogul CSS library for styling. The code attempts to stay stylistically consistent with Mogul AS, and the Mogul MVC, which extends it.</span>
				</li>
				
			</div>
			<div id="why_use">
				
				<div class="left" style="width: 50%">
					<p>Here are the reason's you shouldn use Mogul MVC.</p>
					<span class="MTextGreen MTextBold" style="font-size: 1.8em">PROS</span>
					<li class="MListItem">
						<span class="MTextBold">CSS UI</span>
						<span> - Mogul MVC includes a CSS library of commonly used UI elements.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Automatic CSS and JavaScript Minification</span>
						<span> - When in production mode Mogul MVC will automatically create a single CSS and single JavaScript file for your entire project and cache it for quick loading.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Speed</span>
						<span> - Mogul MVC is a "Use at Will" framework. You specify the components and librarues to load so only what needs to be loaded is loaded.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">CLI Tools</span>
						<span> - CLI tools make it easy to build new componets. They write the boring for you.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Easy to Learn</span>
						<span> - Mogul MVC is pretty simple and easy to learn.</span>
					</li>				
				</div>
				
				<div class="right" style="width: 50%">
					<p>Here are the reason's you shouldn't use Mogul MVC.</p>
					<span class="MTextRed MTextBold" style="font-size: 1.8em">CONS</span>
					<li class="MListItem">
						<span class="MTextBold">Support</span>
						<span> - I wrote Mogul MVC for me and my projects. Thus, there is no large coporation or community backing Mogul MVC.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Age</span>
						<span> - Mogul MVC is a young framework compared to others like <a href="http://codeigniter.com/">Codeigniter</a>, and <a href="http://cakephp.org/">CakePHP</a> and hasn't been tested by a large community.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">Datebase</span>
						<span> - Mogul MVC's database system is not as sophisticated as <a href="http://rubyonrails.org/">Ruby on Rail</a>'s ActiveRecord system.</span>
					</li>
					<li class="MListItem">
						<span class="MTextBold">JavaScript UI</span>
						<span> - Mogul MVC's JavaScript UI library is not as robust as <a href="http://jqueryui.com/">jQuery UI</a> or <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</span>
						</li>
					<li class="MListItem">
						<span class="MTextBold">Open Source</span>
						<span> - Mogul MVC is not Open-Source yet and won't be until it's great.</span>
					</li>
				</div>

				<p>If you want to help make Mogul MVC great e-mail me at <a href="mailto:alanjames1987@gmail.com?subject=Mogul MVC">AlanJames1987@gmail.com</a> for the source code.</p>
				
			</div>
		</div>
	</div>
	
</div>

<div class="MContentSpacer" style="height: 150px"></div>
