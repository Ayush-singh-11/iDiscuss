<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Login to iDiscuss</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- FORM for login modal code -->
            <form action="/iDiscuss/partials/_handleLogin.php" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Username</label>
                        <!-- <input type="email" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp"> -->
                        <input type="text" class="form-control" id="loginEmail" name="loginEmail"
                            aria-describedby="emailHelp">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass">
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
            <!-- FORM code ends -->
        </div>
    </div>
</div>