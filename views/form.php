<ul>
  <li>
    <label>Folder</label>
    <?php echo form_dropdown('folder_id', $folder_id, $options['folder_id']); ?>
  </li>
  <li>
    <label>Wrap Images With Links</label>
    <?php echo form_dropdown('link', $link, $options['link']); ?>
  </li>
  <li>
    <label>Link Target</label>
    <?php echo form_dropdown('link_target', $link_target, $options['link_target']); ?>
  </li>
</ul>
