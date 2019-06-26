<?php

namespace Drupal\formd8\Form;

use \Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormBase;

/**
 * Description of FormSuscribe
 *
 * @author Gipcom
 */
class FormSubscribe extends FormBase{

     /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId(){
  return'subscribe_form';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state){
            $form['first_name'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('First Name'),
            '#size' => 60,
            '#maxlength' => 128,
        );
        return$form;

    }

  /**
   * Form validation handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function validateForm(array &$form, FormStateInterface $form_state){}

  /**
   * Form submission handler.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state){}
}