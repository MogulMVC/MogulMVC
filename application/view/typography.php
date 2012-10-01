<script>
	function changeColor(color) {
		
		if(color == null){
			color = 'default';
		}
		
		$('#section_text').children().each(function() {
			$(this).removeClass();
			$(this).addClass(color);
		});
	}
</script>

<div class="MContent840">
	
	<div class="MContentSpacer"></div>
	
	<div class="MWell text_centered">
		<button class="MButton" value="" onclick="changeColor()">Default</button>
		<button class="MButtonRed" value="red" onclick="changeColor($(this).val())">Red</button>
		<button class="MButtonOrange" value="orange" onclick="changeColor($(this).val())">Orange</button>
		<button class="MButtonYellow" value="yellow" onclick="changeColor($(this).val())">Yellow</button>
		<button class="MButtonGreen" value="green" onclick="changeColor($(this).val())">Green</button>
		<button class="MButtonBlue" value="blue" onclick="changeColor($(this).val())">Blue</button>
		<button class="MButtonViolet" value="violet" onclick="changeColor($(this).val())">Violet</button>
	</div>
	
	<div class="MContentSpacer"></div>
	
	<div id="section_text">
		<h1>The quick brown fox jumps over the lazy dog</h1>
		<h2>The quick brown fox jumps over the lazy dog</h2>
		<h3>The quick brown fox jumps over the lazy dog</h3>
		<h4>The quick brown fox jumps over the lazy dog</h4>
		<h5>The quick brown fox jumps over the lazy dog</h5>
		<h6>The quick brown fox jumps over the lazy dog</h6>
	
		<p>The quick brown fox jumps over the lazy dog</p>
	</div>
	

	
</div>
