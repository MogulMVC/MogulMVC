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

<table class="width_full">

	<tr class="width_full">

		<td id="MSideBarContainer">
		<ul id="MSideBar" class="MSideBarLeft">
			<li class="MButton width_full" onclick="changeColor('')">
				Default
			</li>
			<li class="MButtonRed width_full" onclick="changeColor('red')">
				Red
			</li>
			<li class="MButtonOrange width_full" onclick="changeColor('orange')">
				Orange
			</li>
			<li class="MButtonYellow width_full" onclick="changeColor('yellow')">
				Yellow
			</li>
			<li class="MButtonGreen width_full" onclick="changeColor('green')">
				Green
			</li>
			<li class="MButtonBlue width_full" onclick="changeColor('blue')">
				Blue
			</li>
			<li class="MButtonViolet width_full" onclick="changeColor('violet')">
				Violet
			</li>
		</ul></td>

		<td class="width_full padding">
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
				<br />
				<br />
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>

			<h1>Styles</h1>

			<p class="MWidgetTitle">
				Bold
			</p>
			<p class="bold">
				The quick brown fox jumps over the lazy dog
			</p>
			<a class="showCode">Code</a>
			<pre class="hidden"><?php echo htmlentities('<p class="bold">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					

			<div class="MContentSpacer">
				<hr />
			</div>

			<p class="MWidgetTitle">
				Italics
			</p>
			<p class="italics">
				The quick brown fox jumps over the lazy dog
			</p>
			<a class="showCode">Code</a>
			<pre class="hidden"><?php echo htmlentities('<p class="italics">The quick brown fox jumps over the lazy dog</p>'); ?></pre>					

		</section></td>

	</tr>

</table>
