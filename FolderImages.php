<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Image picker widget
 *
 * @author  	James Doyle
 * @package		PyroCMS
 */
class Widget_FolderImages extends Widgets
{


	/**
	 * The widget title
	 *
	 * @var array
	 */
	public $title = 'Folder Images';

	/**
	 * The translations for the widget description
	 *
	 * @var array
	 */
	public $description = array(
		'en' => 'List images inside a folder'
		// ,
		// 'el' => 'Δημιουργήστε περιοχές με δικό σας κώδικα HTML',
		// 'br' => 'Permite criar blocos de HTML customizados',
		// 'pt' => 'Permite criar blocos de HTML customizados',
		// 'nl' => 'Maak blokken met maatwerk HTML',
		// 'ru' => 'Создание HTML-блоков с произвольным содержимым',
		// 'id' => 'Membuat blok HTML apapun',
		// 'fi' => 'Luo lohkoja omasta HTML koodista',
		// 'fr' => 'Créez des blocs HTML personnalisés',
		);

	/**
	 * The author of the widget
	 *
	 * @var string
	 */
	public $author = 'James Doyle';

	/**
	 * The author's website.
	 *
	 * @var string
	 */
	public $website = 'http://ohdoylerules.com/';

	/**
	 * The version of the widget
	 *
	 * @var string
	 */
	public $version = '1.0';

	/**
	 * The fields for customizing the options of the widget.
	 *
	 * @var array
	 */
	public $fields = array(
		array(
			'field' => 'folder_id',
			'label' => 'Image',
			'rules' => 'required'
			),
		array(
			'field' => 'link',
			'label' => 'Link',
			'rules' => 'required'
			),
		array(
			'field' => 'link_target',
			'label' => 'Link Target',
			'rules' => 'required'
			)
		);

	public function get_folders() {
		$this->load->model('files/file_folders_m');
		$folders = $this->file_folders_m->get_all();
		$folder_array = array();
		foreach ($folders as $folder) {
			$folder_array[$folder->id] = $folder->name;
		}
		return $folder_array;
	}

	public function form($options)
	{
		$folder_id = $this->get_folders();

		return array(
			'options' => $options,
			'folder_id' => $folder_id,
      'link' => array(0 => 'No', 1 => 'Yes'),
			'link_target' => array('_self' => 'Same Window', '_blank' => 'New Window')
			);
	}

	/**
	 * The main function of the widget.
	 *
	 * @param array $options The options for displaying an HTML widget.
	 * @return array
	 */
	public function run($options)
	{
		// Store the feed items
		return array('folder_id' => $options['folder_id'], 'link' => (int)$options['link'], 'link_target' => $options['link_target']);
	}

}
