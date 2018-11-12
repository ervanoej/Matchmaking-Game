<?php

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class Player extends AppModel {


public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A password is required'
            )
        ),
        'email' => array(
            'email' => array(
                 'rule'    => array('email', true),
                'message' => 'Please supply a valid email address.'
            ),
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A email is required'
            )
        ),
        'phone' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'A phone is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('players', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }

   

}
