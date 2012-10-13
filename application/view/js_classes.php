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

		var object = new MButton(input);
		$('#newContent').append(object);
	};

	function createListItem() {
		var object = new MListItem();
		$('#newContent').append(object);
	};

	function createNote() {
		var input = $('#inputContent').val();

		var object = new MNote(input);
		$('#newContent').append(object);
	};

	function createPopup() {
		var input = $('#inputContent').val();

		var object = new MPopup(input);
		$('#newContent').append(object);
	};

	function createProgressBar() {
		var input = $('#inputContent').val();

		var object = new MProgressBar(input);
		$('#newContent').append(object);
	};

	function createRatingsBar() {
		var input = $('#inputContent').val();

		var object = new MRatingsBar(input);
		$('#newContent').append(object);
	};

	function createSystemMessage() {
		var input = $('#inputContent').val();

		var object = new MSystemMessage(input);
		$('#MSystemMessageContainer').append(object);

	};
</script>

<table class="MWidthFull">
	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
	
				<div class="MPaddingSmall">
					<input type="text" id="inputContent" class="MWidthFull" placeholder="Custom Messages / Value"/>
				</div>
	
				<hr />
	
				<li id="createButton" class="MSideBarItem">
					<span>New Button</span>
				</li>
	
				<li id="createListItem" class="MSideBarItem">
					<span>New List Item</span>
				</li>
	
				<li id="createNote" class="MSideBarItem">
					<span>New Note</span>
				</li>
	
				<li id="createPopup" class="MSideBarItem">
					<span>New Popup</span>
				</li>
	
				<li id="createProgressBar" class="MSideBarItem">
					<span>New Progress Bar</span>
				</li>
	
				<li id="createRatingsBar" class="MSideBarItem">
					<span>New Ratings Bar</span>
				</li>
	
				<li id="createSystemMessage" class="MSideBarItem">
					<span>New System Message</span>
				</li>
	
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="red bold"><?php echo htmlentities(MLoad::js_framework('core/MScript.js', 'return', true));?></p>
			
			<div id="newContent"></div>
		</td>

	</tr>
</table>