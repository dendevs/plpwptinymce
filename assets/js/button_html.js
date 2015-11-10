tinymce.PluginManager.add('button_html', function(editor, url) {
	// Add a button that opens a window
    console.log( url );
	editor.addButton('button_html', {
		text: '',
        icon: 'icon button_html',
		onclick: function() {
			// Open window
			editor.windowManager.open({
				title: 'Créer un bouton',
				body: [
					{ type: 'textbox', name: 'title', label: 'Titre' },
					{ type: 'textbox', name: 'url', label: 'Url' },
					{ type: 'checkbox', name: 'blank', label: 'Ouvre un nouvel onglet' },
				],
				onsubmit: function(e) {
					// Insert content when the window form is submitted
                    console.log( e.data );
                    if( e.data.title != '' && e.data.url != '')
                    {
                        var clean_url = e.data.url.replace( 'http://www.', 'http://' );
                        var clean_url = clean_url.replace( 'https://www.', 'https://' );
                        clean_url = ( clean_url.search( 'http' ) != -1 ) ? clean_url : 'http://' + clean_url;

                        // blank html
                        var blank_html = "";
                        if( e.data.blank )
                        {
                            blank_html = " target='_blank'";
                        }

                        // button html
                        var button_html = "<button type='button'>" + e.data.title + "</button>";
                        
                        // final html
                        var link_html = "<a href='" + clean_url + "' " + blank_html + ">" + button_html + "</a>";

                        // send 
                        editor.insertContent( link_html );
                    }
                    else
                    {
                        tinyMCE.activeEditor.windowManager.alert( 'Missing args' );
                    }
                }
            });
        }
    });
});
