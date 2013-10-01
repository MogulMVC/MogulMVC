var Item = (function() {

	function Item(object) {

		if (object.property == undefined) {
			object.property = '';
		}

		var ui = document.createElement('DOM_ELEMENT_HERE');

		ui.id = 'SOMETHING_' + id;
		ui.className = 'CLASSES';

        ui.innerHTML = '' + 
			'';

		return ui;

	}

	return Item;

})(); 