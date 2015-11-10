tinymce.PluginManager.add('button_html', function(editor, url) {
	// Add a button that opens a window
	editor.addButton('button_html', {
		text: 'Button',
		icon: false,
		onclick: function() {
			// Open window
			editor.windowManager.open({
				title: 'Créer un bouton',
				body: [
					{ type: 'textbox', name: 'title', label: 'Title' }
				],
				onsubmit: function(e) {
					// Insert content when the window form is submitted
					editor.insertContent('Title: ' + e.data.title);
				}
			});
		}
	});
});
