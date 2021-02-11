/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	config.extraPlugins = 'tabletoolstoolbar';
	config.extraPlugins = 'tableresize';
	config.extraPlugins = 'widget';
	config.extraPlugins = 'widgetselection';
	config.extraPlugins = 'lineutils';
	config.extraPlugins = 'html5audio';
	
	config.extraPlugins = 'jsplus_table_new,jsplus_table_conf,jsplus_table_row_conf,jsplus_table_col_conf,jsplus_table_cell_conf,jsplus_table_row_move_up,jsplus_table_row_move_down,jsplus_table_col_move_left,jsplus_table_col_move_right,jsplus_table_add_row_up,jsplus_table_add_row_down,jsplus_table_add_col_left,jsplus_table_add_col_right,jsplus_table_add_cell_left,jsplus_table_add_cell_right,jsplus_table_delete_col,jsplus_table_delete_row,jsplus_table_delete_cell,jsplus_table_merge_cells,jsplus_table_merge_cell_right,jsplus_table_merge_cell_down,jsplus_table_split_cell_hor,jsplus_table_split_cell_vert';

	
	config.contentsCss = 'fonts.css';
	config.font_names = 'Traditional Arabic/Traditional Arabic;' + config.font_names;
	
	config.filebrowserBrowseUrl = 'http://alquranervasha.com/assets/fileman/index.html?integration=ckeditor';
	config.filebrowserImageBrowseUrl = 'http://alquranervasha.com/assets/fileman/index.html?integration=ckeditor&type=image';

};
