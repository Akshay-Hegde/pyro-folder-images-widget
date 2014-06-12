<div class="pyro-widget-folder-image">
  <?php if ($options['show_title'] == '1'): ?>
    <h3><?php echo $options['widget']['instance_title']; ?></h3>
  <?php endif ?>
  <ul>
    <?php if ($options['link'] == '1'): ?>
      {{ files:listing folder="<?php echo $options['folder_id'] ?>" type="i" }}
        <li><a href="{{ url:site }}uploads/default/files/{{ filename }}" target="<?php echo $options['link_target'] ?>" title="View {{ name }}">{{ files:image id=id }}</a></li>
      {{ /files:listing }}
    <?php else: ?>
      {{ files:listing folder="<?php echo $options['folder_id'] ?>" type="i" }}
        <li>{{ files:image id=id }}</li>
      {{ /files:listing }}
    <?php endif; ?>
  </ul>
</div>
