<div class="MContent610">

	<div class="MContentSpacer"></div>

	<div class="MVBoxLayout">

		<input type="text" id="inputContent" />

		<button id="createButton">
			Create Button
		</button>

		<button id="createListItem">
			Create List Item
		</button>

		<button id="createNote">
			Create Note
		</button>

		<button id="createPopup">
			Create Popup
		</button>

		<button id="createProgressBar">
			Create Progress Bar
		</button>

		<button id="createRatingsBar">
			Create Ratings Bar
		</button>

		<button id="createSystemMessage">
			Create System Message
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
		$('#createListItem').click(createListItem);
		$('#createNote').click(createNote);
		$('#createPopup').click(createPopup);
		$('#createProgressBar').click(createProgressBar);
		$('#createRatingsBar').click(createRatingsBar);
		$('#createSystemMessage').click(createSystemMessage);
	})();

	function createButton() {
		var input = $('#inputContent').val();

		var object = new MButton();
		object.setText(input);
		$('#newContent').append(object.toHTML());
	};

	function createListItem() {
		var input = $('#inputContent').val();

		var object = new MListItem();
		$('#newContent').append(object.toHTML());
	};

	function createNote() {
		var input = $('#inputContent').val();

		var object = new MNote();
		object.setText(input);
		$('#newContent').append(object.toHTML());
	};

	function createPopup() {
		var input = $('#inputContent').val();

		var object = new MPopup();
		$('#newContent').append(object.toHTML());
	};

	function createProgressBar() {
		var input = $('#inputContent').val();

		var object = new MProgressBar();
		object.setPercent(input);
		$('#newContent').append(object.toHTML());
	};

	function createRatingsBar() {
		var input = $('#inputContent').val();

		var object = new MRatingsBar();
		object.setPercent(input);
		$('#newContent').append(object.toHTML());
	};
	
	function createSystemMessage() {
		var input = $('#inputContent').val();

		var object = new MSystemMessage();
		object.setText(input);
		$('#MSystemMessageContainer').append(object.toHTML());
	};

</script>
