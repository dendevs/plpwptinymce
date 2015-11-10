tinymce.PluginManager.add('myplugin', function(editor, url) {
	// Add a button that opens a window
	editor.addButton('myplugin', {
		text: 'My button',
		icon: false,
		onclick: function() {
			// Open window
			editor.windowManager.open({
				title: 'Example plugin',
				body: [
					{type: 'textbox', name: 'title', label: 'Title'}
				],
				onsubmit: function(e) {
					// Insert content when the window form is submitted
					editor.insertContent('Title: ' + e.data.title);
				}
			});
		}
	});
});
