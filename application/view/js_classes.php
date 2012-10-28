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

<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">
	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>
	<span>This is the MToolBar. It is an ID. Don't confuse it with the MToolBar class. This one is fixed position. You will probably use this one more.</span>
</nav>

<table class="MWidthFull">
	<tr class="MWidthFull">

		<td id="MSideBarContainer">
			<ul id="MSideBar" class="MSideBarLeft">
	
				<div class="MPaddingSmall">
					<input type="text" id="inputContent" class="MWidthFull" placeholder="Custom Messages / Value"/>
				</div>
	
				<hr />
	
				<li id="createButton" class="MSideBarListItem">
					<span>New Button</span>
				</li>
	
				<li id="createListItem" class="MSideBarListItem">
					<span>New List Item</span>
				</li>
	
				<li id="createNote" class="MSideBarListItem">
					<span>New Note</span>
				</li>
	
				<li id="createPopup" class="MSideBarListItem">
					<span>New Popup</span>
				</li>
	
				<li id="createProgressBar" class="MSideBarListItem">
					<span>New Progress Bar</span>
				</li>
	
				<li id="createRatingsBar" class="MSideBarListItem">
					<span>New Ratings Bar</span>
				</li>
	
				<li id="createSystemMessage" class="MSideBarListItem">
					<span>New System Message</span>
				</li>
	
			</ul>
		</td>

		<td class="MWidthFull MPadding">
			
			<p class="MTextRed MTextBold"><?php echo htmlentities(MLoad::js_framework('core/MScript.js', 'return', true));?></p>
			
			<div id="newContent"></div>
		</td>

	</tr>
</table>