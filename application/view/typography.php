<script>
	$(document).ready(function(){
		$('.showCode').each(function(index) {
		  $(this).click(function() {
			  $(this).next().toggle()
		  });
		});
	});

	function changeColor(color) {

		if (color == null) {
			color = 'default';
		}

		$('#section_text').children().each(function() {
			$(this).removeClass('red orange yellow green blue violet');
			$(this).addClass(color);
		});
	}
</script>

<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">
	
	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>
	
	<button class="MButton" value="" onclick="changeColor()">
		Default
	</button>
	<button class="MButtonRed" value="red" onclick="changeColor($(this).val())">
		Red
	</button>
	<button class="MButtonOrange" value="orange" onclick="changeColor($(this).val())">
		Orange
	</button>
	<button class="MButtonYellow" value="yellow" onclick="changeColor($(this).val())">
		Yellow
	</button>
	<button class="MButtonGreen" value="green" onclick="changeColor($(this).val())">
		Green
	</button>
	<button class="MButtonBlue" value="blue" onclick="changeColor($(this).val())">
		Blue
	</button>
	<button class="MButtonViolet" value="violet" onclick="changeColor($(this).val())">
		Violet
	</button>
</nav>

<div class="MContent840">
	
	<div class="MContentSpacer"></div>

	<section id="section_text">
		<h1>Headings</h1>
		
		<h1>The quick brown fox jumps over the lazy dog</h1>
		<h2>The quick brown fox jumps over the lazy dog</h2>
		<h3>The quick brown fox jumps over the lazy dog</h3>
		<h4>The quick brown fox jumps over the lazy dog</h4>
		<h5>The quick brown fox jumps over the lazy dog</h5>
		<h6>The quick brown fox jumps over the lazy dog</h6>

		<h1>Paragraph</h1>

		<p>
			The quick brown fox jumps over the lazy dog
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			<br /><br />
			Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		
		<h1>Styles</h1>
		
		<p class="MWidgetTitle">Bold</p>
		<p class="bold">The quick brown fox jumps over the lazy dog</p>
		<a class="showCode">Code</a>
		<pre class="hidden"><?php echo htmlentities('<p class="bold">The quick brown fox jumps over the lazy dog</p>');?></pre>
		
		<div class="MContentSpacer"><hr /></div>
		
		<p class="MWidgetTitle">Italics</p>
		<p class="italics">The quick brown fox jumps over the lazy dog</p>
		<a class="showCode">Code</a>
		<pre class="hidden"><?php echo htmlentities('<p class="italics">The quick brown fox jumps over the lazy dog</p>');?></pre>
		
	</section>
	
</div>

<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
