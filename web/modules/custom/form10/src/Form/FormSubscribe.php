<?php

namespace Drupal\form10\Form;

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
      'form10.formsubscribe',
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
    $config = $this->config('form10.formsubscribe');
    $form['date'] = [
      '#type' => 'date',
      '#title' => $this->t('Date :'),
      '#default_value' => $config->get('date'),
    ];
    $form['noms'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Noms'),
      '#description' => $this->t('Votre nom'),
    ];
    $form['prenoms'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Prenoms'),
      '#description' => $this->t('Vos Prenoms'),
    ];
    $form['envoyer'] = [
      '#type' => 'submit',
      '#title' => $this->t('envoyer'),
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

    $this->config('form10.formsubscribe')
      ->set('date', $form_state->getValue('date'))
      ->set('noms', $form_state->getValue('noms'))
      ->set('prenoms', $form_state->getValue('prenoms'))
      ->set('envoyer', $form_state->getValue('envoyer'))
      ->save();
  }

}
