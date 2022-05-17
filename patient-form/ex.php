<form role="form" method="POST" enctype="multipart/form-data" class="border border-2 p-5" id="addreceptionist">

    <div class="form-group">
        <label for="servtype">Name:</label><span class="spanerr"></span>
        <input type="text" class="form-control required" id="fname" name="fname" err="Name is required">
    </div>
    <div class="form-group">
        <label for="servtype">Email:</label><span class="spanerr"></span>
        <input type="mail" class="form-control required" id="mail" name="mail" err="Email is required">
    </div>
    <div class="form-group">
        <label for="servtype">Password:</label><span class="spanerr"></span>
        <input type="password" class="form-control required" id="pwd" name="pwd" err="Password is required">
    </div>
    <div class="form-group">
        <label for="servtype">Address:</label><span class="spanerr"></span>
        <input type="text" class="form-control required" id="adrs" name="adrs" err="Address is required">
    </div>
    <div class="form-group">
        <label for="servtype">Phone:</label><span class="spanerr"></span>
        <input type="text" class="form-control required" id="phone" name="phone" err="Phone is required">
    </div>
    <div class="form-group">
        <label for="servtype">Image:</label><span class="spanerr"></span>
        <input type="file" class="form-control required" id="recimage" name="recimage" err="Image is required">
    </div>
    <div class="text-center">
        <input type="hidden" class="form-control" value="1" name="type" />
        <input type="submit" class="btn btn-success"></input>
    </div>

</form>





<script>
$(document).ready(function() {
    $("form").submit(function(e) {
        e.preventDefault();
        $flag = true;
        let checkingbool = "";
        $(this).find(".required").each(function() {
            if ($(this).val() == "" || $(this).val() == null) {
                $flag = false;
                $(this).siblings(".spanerr").html($(this).attr('err'));
                checkingbool = "err";
            } else {
                $(this).siblings(".spanerr").html("");
                checkingbool = "noerr";
            }
        });
        return $flag;
    })
});
</script>