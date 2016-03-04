#Dropler

###Fork From:
[https://github.com/chriskiehl/Dropler](https://github.com/chriskiehl/Dropler)

###Changes:

I just did a change to be uploading with a local file, created by yourself. Here have an example  `ImageUpload-sample.php`

--------------

Dropler is a small, lightweight (and free!) CKEditor plugin for uploading images via drag and drop.  

<p align="center">
  <img src="https://cloud.githubusercontent.com/assets/1408720/7672034/0c3de41e-fcb2-11e4-96f5-06cabfd7845d.gif" />
</p> 

It's like [SimpleUploads](http://ckeditor.com/addon/simpleuploads) but free!  

--------

##Install: 

You can install it anually straight from github. 

Clone or download this respository and then follow the Manual Installation instructions from the official [CKEditor Documentation](http://docs.ckeditor.com/#!/guide/dev_plugins). Adding to CKEditor's Add-on repository pending. 

The super short version: Copy the `dropler` folder to the `plugins` directory of ckeditor. 

##Usage Instructions

First, add the plugin name to ckeditor's `extraPlugins` property inside of `config.js`:

    CKEDITOR.editorConfig = function( config ) {
      // rest of config
      config.extraPlugins = 'dropler';    <-- add the plugin
    })
    

Next, we need to supply a few configuation options depending on the backend service we're using. This is a simple javascript object consisting of 1. The name of the backend service, and 2. the settings it needs to function. 

Currently the plugin send POST data to a file and there upload to your server.

**Local:**

    CKEDITOR.editorConfig = function( config ) {
        // rest of config
        config.extraPlugins = 'dropler';

        // configure the backend service and credentials
        config.droplerConfig = {
            backend: 'basic',
            settings: {
                uploadUrl: 'file-created-by-yourself'
            }
        };
    });