pyro-fodler-images-widget
=================

A small widget for PyroCMS. Allows you to list all the images from a specified folder.

![screenshot](https://github.com/james2doyle/pyro-folder-images-widget/raw/master/screenshot.png)

### Features

* select any folder in your files
* wrap images in links to images
* choose target "\_blank" or "\_self"

Output example:

```html
<div class="pyro-widget-image">
  <ul>
    <li><a href="http://example.com/uploads/default/files/3023bdcc200618a94ffb433700e6a512.jpg" target="_self"><img alt="image description" src="http://example.com/files/large/3023bdcc200618a94ffb433700e6a512.jpg" target="_self"></a></li>
    <li><a href="http://example.com/uploads/default/files/52cf8a1d01c35b7830729515e8f25afb.jpg"><img alt="image description" src="http://example.com/files/large/52cf8a1d01c35b7830729515e8f25afb.jpg"></a></li>
  </ul>
</div>
```

### Steps

* drop in widgets folder
* go to widgets section
* choose this widget
* drag to an area
* choose a folder from the dropdown
* style the widget with the ".pyro-widget-folder-image" class

### Widget display

You can always edit the `view/display.php` and modify it to fit your desires.

### To Do

* choose dimensions
* choose class for CSS
