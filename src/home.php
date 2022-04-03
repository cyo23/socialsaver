<style>
 body {
     background: rgb(131,58,180);
     background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
 }

</style>

<div>
    <div class="text-center">
        <h1 class="text-white fw-bolder" style="margin-top: 6rem">Welcome to SocialSaver</h1>
        <label for="input-tags" class="text-white fst-italic fs-4">
            Please select the tags you are interested in
        </label>
        <input type="text" id="input-tags"/>
        <!-- add submit button -->
        <button id="btnSubmit" type="button" class="btn btn-outline-success">Submit</button>
    </div>


</div>

<script>


    /* Event handler to handle a button click on btnSubmit */
    $('#btnSubmit').on('click', function() {

        // 1. get all the tags entered
        var tags = $('#input-tags').val();
        if (tags === '') {
            alert("Please enter at least 1 tag");
            return;
        }
        // 2. save the tags to local storage under the name 'tags'
        localStorage.setItem("tags", tags);

        // send user to posts pag
        window.location = '/index.php?page=posts';
    });

    // I want you to do the following when all data is loaded into the browser
    $(document).ready(function() {
        var tags = localStorage.getItem("tags");
        if (tags) {
            $('#input-tags').val(tags);
        }
        $("#input-tags").selectize({
            delimiter: ",",
            persist: false,
            create: function (input) {
                return {
                    value: input,
                    text: input,
                };
            },
        });
    });
</script>