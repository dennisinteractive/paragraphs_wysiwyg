<?php

namespace Drupal\paragraphs_wysiwyg\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\paragraphs\Entity\Paragraph;
use Drupal\paragraphs\Plugin\Field\FieldWidget\ParagraphsWidget;

/**
 * Plugin implementation of the 'entity_reference_revisions paragraphs' widget.
 *
 * @FieldWidget(
 *   id = "paragraphs_wysiwyg",
 *   label = @Translation("Paragraphs WYSIWYG"),
 *   description = @Translation("An experimental paragraphs WYSIWYG widget."),
 *   field_types = {
 *     "entity_reference_revisions"
 *   }
 * )
 */
class ParagraphsWysiwygWidget extends ParagraphsWidget {
  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $elements = [];
    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function formMultipleElements(FieldItemListInterface $items, array &$form, FormStateInterface $form_state) {
    $original_elements = parent::formMultipleElements($items,$form, $form_state);
    $elements['#field_name'] = $original_elements['#field_name'];

    $text = '';
    foreach ($items as $item) {
      if ($paragraph = Paragraph::load($item->getValue()['target_id'])) {
        if ($paragraph->getType() == 'text') {
          $text .= $paragraph->get('field_text')->getValue()[0]['value'];
        }
        else {
          $text .= '<drupal-entity data-embed-button="paragraphs_wysiwyg" data-entity-embed-display="view_mode:paragraph.preview" data-entity-type="paragraph" data-entity-uuid="' . $paragraph->uuid() . '"></drupal-entity>';
        }
      }
    }

    $elements['paragraphs_wysiwyg'] = [
      '#type' => 'text_format',
      '#title' => 'Body', //@todo allow this to be configured
      '#format' => 'paragraphs_wysiwyg', //@todo allow this to be configured
      '#field_name' => 'Body', //@todo allow this to be configured
      '#default_value' => $text,
    ];

    return $elements;
  }
}
