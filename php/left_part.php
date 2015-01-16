<div class="profile block"> <!-- PROFILE (MIDDLE-CONTAINER) -->
    <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
    <div class="profile-picture big-profile-picture clear">
        <?php include 'call_user_img.php'  ?>
    </div>
    <h1 class="user-name"><?php echo $_SESSION['session_user'] ?></h1>
    <p class="text-center">
        <a id="changePic" class="scnd-font-color" href="#">Change Profile Photo</a>
    </p>
    <div id="picid" class="col-sm-12">
      <form action="imageInfo.php" enctype="multipart/form-data" method="POST">
        <p>
            <label>Select Photo 
                <!-- <input name="MAX_FILE_SIZE" value="102400" type="hidden"> -->
                <input type="file" name="myfile">
            </label>
        </p>
        <p><input type="submit" class="sign-in button" value="Save" name="submit"></p>
      </form>
    </div>

    <!-- <ul class="profile-options horizontal-list">
        <li><a class="comments" href="#40"><p><span class="icon fontawesome-comment-alt scnd-font-color"></span>23</li></p></a>
        <li><a class="views" href="#41"><p><span class="icon fontawesome-eye-open scnd-font-color"></span>841</li></p></a>
        <li><a class="likes" href="#42"><p><span class="icon fontawesome-heart-empty scnd-font-color"></span>49</li></p></a>
    </ul> -->
</div>
<script>
    $(document).ready(function(){
        $("#picid").hide();
        $("#changePic, .add-button").click(function(){
            $("#picid").slideToggle("slow");
      });
    });
</script>