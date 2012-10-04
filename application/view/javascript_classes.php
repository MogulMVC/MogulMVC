<div class="MContent610">

	<div class="MContentSpacer"></div>

	<div class="MVBoxLayout">

		<input type="text" id="inputContent" />

		<button id="createButton">
			Create Button
		</button>

		<button id="createSystemMessage">
			Create System Message
		</button>

		<button id="createProgressBar">
			Create Progress Bar
		</button>

		<div class="MContentSpacer"></div>
		<hr />
		<div class="MContentSpacer"></div>

		<div id="newContent"></div>

	</div>

</div>

<script>
	(function() {
		$('#createButton').click(createButton);
		$('#createSystemMessage').click(createSystemMessage);
		$('#createProgressBar').click(createProgressBar);
	})();

	function createButton() {
		var input = $('#inputContent').val();

		var object = new MButton();
		object.setLabel(input);
		$('#newContent').append(object.toHTML());
	};
	
	function createSystemMessage() {
		var input = $('#inputContent').val();
		
		var object = new MSystemMessage();
		object.setMessage(input);
		$('#MSystemMessageContainer').append(object.toHTML());
	};

	function createProgressBar() {
		var input = $('#inputContent').val();
		
		var object = new MProgressBar();
		object.setPercent(input);
		$('#newContent').append(object.toHTML());
	};

</script>
