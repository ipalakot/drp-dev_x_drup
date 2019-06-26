<?php

namespace Drupal\form9\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FormSubscribe.
 */
class FormSubscribe extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'form9.formsubscribe',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_subscribe';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('form9.formsubscribe');
    $form['date'] = [
      '#type' => 'date',
      '#title' => $this->t('Date'),
      '#default_value' => $config->get('date'),
    ];
    $form['nom'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Nom'),
    ];
    $form['prenoms'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Prenoms'),
      '#description' => $this->t('Prenoms'),
    ];
    $form['envoyer'] = [
      '#type' => 'submit',
      '#title' => $this->t('envoyer'),
      '#description' => $this->t('Click to send'),
      '#default_value' => $config->get('envoyer'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('form9.formsubscribe')
      ->set('date', $form_state->getValue('date'))
      ->set('nom', $form_state->getValue('nom'))
      ->set('prenoms', $form_state->getValue('prenoms'))
      ->set('envoyer', $form_state->getValue('envoyer'))
      ->save();
  }

}
