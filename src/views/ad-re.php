<?php include ROOT_DIR.'/src/views/header.php'; ?>
    <title>Admin-Register - web3</title>
   

<body class="bg-gradient-primary" style="margin-top: 80px;" >
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;<?php echo BASE_URL.'/assets/img/log2.jpg' ?>&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Admin Account!</h4>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first_name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email">
                                </div>
                                <!-- code -->
                                <div class="form-group">
                                    <input class="form-control form-control-user" type="name" id="exampleInput" aria-describedby="textHelp" placeholder="Enter The id Code " name="name">
                                </div>
                                 <!-- role -->
                                 <div class="form-group">
                                    <input class="form-control form-control-user" type="role" id="exampleRoleInput" aria-describedby="roleHelp" placeholder="Enter The Role " name="role">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat">
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block text-white btn-user" type="submit">Register Account</button>
                                <hr>

                            </form>
                            <div class="text-center"><a class="small" href="<?php echo BASE_URL . '/admin' ?>">If you are admin Click here</a></div>
                            <div class="text-center"><a class="small" href="<?php echo BASE_URL ?>">Back To Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ROOT_DIR.'/src/views/footer.php'; ?>