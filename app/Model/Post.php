<?php 
App::uses('AppModel', 'Model');

/**
 *	Post Model 
 */
class Post extends AppModel
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	
public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }


}

 ?>