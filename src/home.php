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
    </div>


</div>

<script>
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
</script>