
<script>
    $(function () {
        $("#menu").menu({
            position:{ my: "center bottom", at: "right-0 top+65" }
        });

    });
</script>
<style>
/*    ul{
        background-color: #ffffff;
        list-style: none;
    }
    a {
        text-decoration: none;
    }
    
    ul li.top{
        display: inline-block;
    }*/
.ui-menu:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}
.ui-menu .ui-menu-item {
    display: inline-block;
    float: left;
    margin: 0;
    padding: 0;
    width: auto;
}
.ui-menu-item .ui-menu-item {
  display: block;
}

li div a {
    text-decoration: none;
}
</style>
<ul id='menu'>
    <li class='top'><div><span class='ui-icon ui-icon-home'></span><a href="index.php">Home</a></div></li>
    <li class='top'>
        <div><span class='ui-icon ui-icon-person'></span>Accounts</div>
        <ul>
            <li><div><span class='ui-icon ui-icon-star'></span><a href = "createAccount.php">Create Account</a></div></li>
            <li><div><span class='ui-icon ui-icon-check'></span><a href = "accountSummary.php">Account Summary</a></div></li>
        </ul>

    </li>
    <li class='top'><div><span class="ui-icon ui-icon-info"></span><a href="#">About</a></div></li>
    <li class='top'><div><span class='ui-icon ui-icon-contact'></span><a href="contactInfo.php">Contact</a></div></li>
    <li class='top'><div><span class="ui-icon ui-icon-pin-w"></span><a href="viewPosts.php">View All Posts</a></div></li>
</ul>