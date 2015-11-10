console.log( 'execute' );
tinymce.PluginManager.add('myplugin', function(editor, url) {
    console.log( 'execute js' );
	// Add a button that opens a window
    console.log( editor );
    console.log( url );
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
