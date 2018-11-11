<div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">

                  <?php 
      
                    // echo $this->fetch('login'); 
                    echo $this->Form->create('Player'); 
                  
                  ?>

                <i class="fa fa-envelope prefix"></i>
                 <?php 
          
                    echo $this->Form->control('p_username', ['class' => 'form-control', 'type' => 'text', 'id' => 'username']); 
                  ?>

                  <label for="username">Username <font color="red">*</font></label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>
        
                <?php
                  
                  echo $this->Form->control('password', ['class' => 'form-control', 'type' => 'password', 'id' => 'pass']);
                
                ?>

                <label for="pass">Password <font color="red">*</font></label>
              </div>
              <div class="text-center mt-2">
                 <?php 
      
                    echo $this->Form->button('Login', ['class' => 'btn btn-info btn-block my-4 waves-effect']);
                   
                    echo $this->Form->end(); 

                  ?> 
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>