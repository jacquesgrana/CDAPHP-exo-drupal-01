<?php declare(strict_types = 1);

namespace Drupal\digi_book\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Digi book type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "digi_book_type",
 *   label = @Translation("Digi book type"),
 *   label_collection = @Translation("Digi book types"),
 *   label_singular = @Translation("digi book type"),
 *   label_plural = @Translation("digi books types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count digi books type",
 *     plural = "@count digi books types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\digi_book\Form\DigiBookTypeForm",
 *       "edit" = "Drupal\digi_book\Form\DigiBookTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\digi_book\DigiBookTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer digi_book types",
 *   bundle_of = "digi_book",
 *   config_prefix = "digi_book_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/digi_book_types/add",
 *     "edit-form" = "/admin/structure/digi_book_types/manage/{digi_book_type}",
 *     "delete-form" = "/admin/structure/digi_book_types/manage/{digi_book_type}/delete",
 *     "collection" = "/admin/structure/digi_book_types",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   },
 * )
 */
final class DigiBookType extends ConfigEntityBundleBase {

  /**
   * The machine name of this digi book type.
   */
  protected string $id;

  /**
   * The human-readable name of the digi book type.
   */
  protected string $label;

}
