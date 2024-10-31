jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.nffw_plugin', {
        init : function(ed, url) {
                // Register command for when button is clicked
                ed.addCommand('nffw_insert_shortcode', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();

                    if( selected ){
                        //If text is selected when button is clicked
                        //Wrap shortcode around it.
                        content =  '[fbox page="'+selected+'" hight="'+selected+'" width="'+selected+'" hide_cover="'+selected+'" show_faces="'+selected+'" show_posts="'+selected+'"]';
						
                    }else{
                        content =  '[fbox page="https://www.facebook.com/nike/" hight="700" width="350" hide_cover="false" show_faces="true" show_posts="true"]';
                    }

                    tinymce.execCommand('mceInsertContent', false, content);
                });

            // Register buttons - trigger above command when clicked
            ed.addButton('nffw_button', {title : 'facebook likebox shortcode', cmd : 'nffw_insert_shortcode', image: url + '../../images/gfycat-btn.png' });
        },   
    });

    // Register the TinyMCE plugin
    tinymce.PluginManager.add('nffw_button', tinymce.plugins.nffw_plugin);
});
