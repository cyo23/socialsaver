<style>
 body {
     background: rgb(131,58,180);
     background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
 }

</style>

<div>
 <!-- content -->

</div>

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModal" aria-hidden="true">
    <div    class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postModalLabel">New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="post" class="form-label">What's on your mind?</label>
                    <textarea class="form-control" id="post" rows="5"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save post</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#btnPost').on('click', function () {
        console.log("hello world");
    });
</script>