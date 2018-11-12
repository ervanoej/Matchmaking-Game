
<?php 
            	echo $this->fetch('add'); 
            	echo $this->Form->create('Player', [
            		'url' => ['controller' => 'players', 'action' => 'add']
            	]);

            ?>

            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                 <i class="fa fa-user prefix"></i>
                <?php echo $this->Form->control('p_username', ['class' => 'form-control', 'type' => 'text', 'id' => 'usernameReg']); ?>
                <label for="usernameReg">Username</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fa fa-user prefix"></i>
                <?php echo $this->Form->control('p_firstname', ['class' => 'form-control', 'type' => 'text', 'id' => 'firstnameReg']); ?>
                <label for="firstnameReg">First Name</label>
              </div>

              <div class="md-form form-sm mb-4">
                 <i class="fa fa-user prefix"></i>
                <?php echo $this->Form->control('p_lastname', ['class' => 'form-control', 'type' => 'text', 'id' => 'lastnameReg']); ?>
                <label for="lastnameReg">Last Name</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>
                <?php echo $this->Form->control('p_password', ['class' => 'form-control', 'type' => 'text', 'id' => 'passReg']); ?>
                <label for="passReg">Password</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fa fa-lock prefix"></i>     
                <?php echo $this->Form->control('p_birthday', ['class' => 'form-control', 'type' => 'date', 'id' => 'birthReg', 'placeholder' => 'birthday']); ?>
                <label for="birthReg"></label>
              </div>

              <div class="text-center form-sm mt-2">
				
        <?php 
        
          echo $this->Form->button('  Register', ['type' => 'submit', 'class' => 'btn btn-primary fa fa-send ml-2']);
        
          $this->Form->end();
        ?>
        
              </div>

            </div>

