<div class="container pt-3">
    <div class="row">
        <div class="col"></div>

        <div class="col-4">
            <h3 class="text-center">Register</h3>

            <form class="mt-3" method="POST" action="/register">
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>
                <div class="d-grid gap-2 mx-auto">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>

        <div class="col"></div>
    </div>
</div>