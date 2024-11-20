<!-- SignUp Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="signupModalLabel">SignUp for an iDiscuss Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- FORM for login modal code -->
            <form action="/iDiscuss/partials/_handleSignup.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="signupEmail" class="form-label">Username</label>
                        <!-- <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"> -->
                        <input type="text" class="form-control" id="signupEmail" name="signupEmail"
                            aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="signupPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword">
                    </div>
                    <div class="mb-3">
                        <label for="signupcPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
                    </div>
                    <button type="submit" class="btn btn-success">SignUp</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
            <!-- FORM code ends -->
        </div>
    </div>
</div>