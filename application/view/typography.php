<script>
	$(document).ready(function() {
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

<table class="MWidthFull">

	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
				
				<div class="MVBoxLayout">
					<button class="MButton" onclick="changeColor('')">
						Default
					</button>
					<button class="MButtonRed" onclick="changeColor('red')">
						Red
					</button>
					<button class="MButtonOrange" onclick="changeColor('orange')">
						Orange
					</button>
					<button class="MButtonYellow" onclick="changeColor('yellow')">
						Yellow
					</button>
					<button class="MButtonGreen" onclick="changeColor('green')">
						Green
					</button>
					<button class="MButtonBlue" onclick="changeColor('blue')">
						Blue
					</button>
					<button class="MButtonViolet" onclick="changeColor('violet')">
						Violet
					</button>
				</div>
	
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="red bold"><?php echo htmlentities(MLoad::css_framework('core/MStyle.css', 'return', true));?></p>
			
			<section id="section_text">
				<h1>Headings</h1>
	
				<h1>The quick brown fox jumps over the lazy dog</h1>
				<h2>The quick brown fox jumps over the lazy dog</h2>
				<h3>The quick brown fox jumps over the lazy dog</h3>
				<h4>The quick brown fox jumps over the lazy dog</h4>
				<h5>The quick brown fox jumps over the lazy dog</h5>
				<h6>The quick brown fox jumps over the lazy dog</h6>
	
				<h1>Paragraph</h1>
	
				<p>The quick brown fox jumps over the lazy dog</p>
	
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<br />
					<br />
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
	
				<h1>Styles</h1>
	
				<p class="MWidgetTitle">Bold</p>
				<p class="bold">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="hidden"><?php echo htmlentities('<p class="bold">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					
	
				<div class="MContentSpacer">
					<hr />
				</div>
	
				<p class="MWidgetTitle">Italics</p>
				<p class="italics">The quick brown fox jumps over the lazy dog</p>
				<a class="showCode">Code</a>
				<pre class="hidden"><?php echo htmlentities('<p class="italics">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					
	
			</section>
		</td>

	</tr>

</table>
