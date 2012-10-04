<script>
	$(document).ready(function() {
		$('#createButton').click(createButton);
		$('#createListItem').click(createListItem);
		$('#createNote').click(createNote);
		$('#createPopup').click(createPopup);
		$('#createProgressBar').click(createProgressBar);
		$('#createRatingsBar').click(createRatingsBar);
		$('#createSystemMessage').click(createSystemMessage);
	});

	function createButton() {
		var input = $('#inputContent').val();

		var object = new MButton();
		object.setText(input);
		$('#newContent').append(object.toHTML());
	};

	function createListItem() {
		var input = $('#inputContent').val();

		var object = new MListItem();
		console.log( typeof object.toHTML());
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

<table class="width_full">
	<tr class="width_full">

		<td id="MSideBarContainer">
		<ul id="MSideBar" class="MSideBarLeft">

			<div class="padding_small">
				<input type="text" id="inputContent" class="width_full" placeholder="Custom Messages / Value"/>
			</div>

			<hr />

			<li id="createButton">
				<span>New Button</span>
			</li>

			<li id="createListItem">
				<span>New List Item</span>
			</li>

			<li id="createNote">
				<span>New Note</span>
			</li>

			<li id="createPopup">
				<span>New Popup</span>
			</li>

			<li id="createProgressBar">
				<span>New Progress Bar</span>
			</li>

			<li id="createRatingsBar">
				<span>New Ratings Bar</span>
			</li>

			<li id="createSystemMessage">
				<span>New System Message</span>
			</li>

		</ul></td>

		<td class="width_full padding"><div class="MContentSpacer"></div><div id="newContent" style="padding"></div></td>

	</tr>
</table>