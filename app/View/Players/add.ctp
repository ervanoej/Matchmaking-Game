<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;">
            <?php echo $this->Form->create('Players'); ?>
            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <?php 
                            echo $this->Form->input('username', ['class' => 'form-control', 'type' => 'text', 'id' => 'materialRegisterFormFirstName']); 
                        ?>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                 <?php 
                            echo $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'id' => 'materialRegisterFormEmail']); 
                ?>
            </div>

            <!-- Password -->
            <div class="md-form">
                <?php 
                            echo $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'id' => 'materialRegisterFormPassword','aria-describedby' => 'materialRegisterFormPasswordHelpBlock']); 
                ?>
            </div>

            <!-- Phone number -->
            <div class="md-form">
                        <?php 
                            echo $this->Form->input('phone', ['class' => 'form-control', 'type' => 'number', 'id' => 'materialRegisterFormPhone', 'aria-describedby' => 'materialRegisterFormPhoneHelpBlock']); 
                        ?>
            </div>

          <?php echo $this->Form->input('role', array('type'=>'hidden', 'value'=>'players')); ?>

            <!-- Sign up button -->
       <?php 
            
            echo $this->Form->button('Sign up', ['class' => 'btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0', 'type' => 'submit']);
         
            echo $this->Form->end(); 

        ?> 

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
