<?php include "header.php"; ?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
        	<?php 
        		if(isset($_REQUEST['msg'])){
        			echo "<div class='display-4 alert alert-info'>".$_REQUEST['msg']."</div>";
        		}
        	?>
    
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Register Form</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="contact" id="contact" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact'" placeholder="Enter contact">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="address" id="address" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'" placeholder=" Enter address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>
<?php include "footer.php"; ?>
<?php
    if(isset($_POST['submit']))
    {       
        $name = $_REQUEST['name'];
        $contact = $_REQUEST['contact'];
        $email = $_REQUEST['email'];
        $password =$_REQUEST['password'];
        $address = $_REQUEST['address'];
       
        include "config.php";
        
        $query = "insert into `user`(`name`,`contact`,`email`,`password`,`address`,`status`)values('$name','$contact','$email','$password','$address','Active')";

        $result = mysqli_query($con,$query);

        if ($result > 0) {
            echo "<script>window.location.assign('login.php?msg=Register Successfully')</script>";
        } else {
            echo "<script>window.location.assign('register.php?msg= Error!!!!! Try again')</script>";
        }

    }
?>