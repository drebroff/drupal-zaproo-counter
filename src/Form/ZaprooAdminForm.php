<?php
namespace Drupal\zaproo_counter\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
* Configure example settings for this site.
*/
class ZaprooAdminForm extends ConfigFormBase {

/**
* Config settings.
*
* @var string
*/
const SETTINGS = 'zaproo_counter.settings';

/**
* {@inheritdoc}
*/
public function getFormId() {
  return 'zaproo_counter_admin_settings';
}

/**
* {@inheritdoc}
*/
protected function getEditableConfigNames() {
  return [
  static::SETTINGS,
  ];
}

/**
* {@inheritdoc}
*/
public function buildForm(array $form, FormStateInterface $form_state) {
  $config = $this->config(static::SETTINGS);

  $form['zaproo_counter_state'] = [
  '#type' => 'checkbox',
  '#title' => $this->t('Enabled'),
  '#default_value' => $config->get('zaproo_counter_state'),
  ];


  return parent::buildForm($form, $form_state);
}

/**
* {@inheritdoc}
*/
public function submitForm(array &$form, FormStateInterface $form_state) {
  // Retrieve the configuration.
  $this->configFactory->getEditable(static::SETTINGS)
  // Set the submitted configuration setting.
  ->set('zaproo_counter_state', $form_state->getValue('zaproo_counter_state'))

  ->save();

  parent::submitForm($form, $form_state);
  drupal_flush_all_caches();

}

}
