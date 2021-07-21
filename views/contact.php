<div class="container pt-3">
    <div class="row">
        <div class="col"></div>
        <div class="col-4">
            <h3 class="text-center">Contact me</h3>

            <form class="mt-3" method="POST" action="/contact">
                <div class="mb-3">
                    <label class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea rows="8" name="content" class="form-control"></textarea>
                </div>
                <div class="d-grid gap-2 mx-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>