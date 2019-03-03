/**
 * @file
 * Provides additional javascript for managing the paragraph wysiwyg dialog.
 */

(function($) {
  'use strict';

  $('.paragraphs-wysiwyg-add-type .form-submit').click(function() {
    this.form.elements.namedItem('selected_bundle').value = this.attributes['data-paragraph-bundle'].value;
  });

/*
  // Redirect to pararagraph add page.
  $('.entity-browser-paragraph-type-form.entity-browser-form').submit(function (evt) {
    evt.preventDefault();
    var element = '.paragraphs-wysiwyg-add-type .form-submit.clicked';
    var paragraphBundle = $(element).data('paragraphBundle');
    var url = $(element).data('url');
    if (typeof paragraphBundle == 'string') {
      window.location.replace(url);
    }
  });

  // Back button.
  $('#back').click(function() {
    iframe.contentWindow.history.go(-1);
  });
*/

  // /**
  //  * Attach behavior for passing dialog data from the iframe to the parent.
  //  */
  // $.fn.ParagraphWysiwygDialog = function(data) {
  //
  //   console.log('dialog js');
  //
  //   // Save the editor dialog.
  //   window.parent.Drupal.AjaxCommands.prototype.editorDialogSave(
  //     {},
  //     { values: { attributes: data } }
  //   );
  //
  //   // Close the modal dialog.
  //   window.parent.Drupal.AjaxCommands.prototype.closeDialog(
  //     {},
  //     { persist: false, selector: '#drupal-modal' }
  //   );
  // };

})(jQuery);
