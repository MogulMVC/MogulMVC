var Item = (function() {

	function Item(object) {

		// validate variables
		if (!data.hasOwnProperty('property')) {
			data.property = '';
		}
		
		// adjust variables
		object.property = object.property.toString();

		// create ui element
		var ui = document.createElement('DOM_ELEMENT_HERE');

		ui.id = 'SOMETHING_' + id;
		ui.className = 'CLASSES';

        ui.innerHTML = '' + 
			'';

		return ui;

	}

	return Item;

})(); 