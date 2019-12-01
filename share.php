<?php
include ("top.php");
?>
<main>
<!-- Content Start-->
    <section>
        <h2>Share</h2>
        <p>This is a platform where you can share your experiences in Japan. Food, Scenes or other funny things all can be shared here. Hurry to share with us!</p>
        <figure>
          <img alt="Background" src="">
        </figure>
    </section>

    <article class="user-share-container"><!--使用栅格-->
        <section class="user-share-item"> <!--使用栅格-->
        <?php
        //使用数据库将用户提交的分享print出
        ?>
        </section>
    </article>

    <form action="#" class="user-share-form" method="POST">
        <!--用户分享提交-->
        <fieldset>
            <legend>Basic Info</legend>

            <p>
                <label for="txtNickname">Your Nickname</label>
                <input type="text" name="txtNickname" key="txtNickname" value="">
            </p>

            <p>
                <label>Country</label>
                <select class="selectpicker countrypicker" data-live-search="true" data-default="United States" data-flag="true"></select>
            </p>
        </fieldset>

        <fieldset>
            <legend>Share Content</legend>

            <p>
                <label>Type</label>
                <input type="radio" name="radType" value="radTokyo" id="radTokyo">Food
                <input type="radio" name="radType" value="radScene" id="radScene">Scene
                <input type="radio" name="radType" value="radRail" id="radRail">Rail
                <input type="radio" name="radType" value="radAnime" id="radAnime">Anime
                <input type="radio" name="radType" value="radOther" id="radOther">Other
            </p>

            <p>
                <label for="txtTitle">Title | Name</label>
                <input type="text" name="txtTitle" key="txtTitle" id="txtTitle">
            </p>

            <p>
                <label>Cover Image</label>
                <input type="file" value="fileCover" name="fileCover" id="fileCover">
            </p>

            <p>
                <label>Content</label>
                <textarea rows="10" cols="50" placeholder="Tell us some detail about your share."></textarea>
            </p>

        </fieldset>

        <input type="submit" name="">
    </form>
<!-- Content End-->
</main>
<?php
include ("footer.php");
?>
