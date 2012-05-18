<script type="text/javascript">
  $(document).ready(function(){
    $("#tab_group_1").easytabs();
    $("#tab_group_2").easytabs();
  });
</script>

<div class="content_spacer"></div>

<div class="content_900">

  <style>

  .ntab_container{
    margin:0;
    padding:0;
  }

  .ntab{
    -moz-user-select:none;
    -o-user-select:none;
    -webkit-user-select:none;
    background:#C8C8C8;
    border-color:#646464;
    border-style:solid;
    border-top-left-radius:.4em;
    border-top-right-radius:.4em;
    border-width:.1em 1px 0 1px;
    box-shadow:0 0.2em 0.35em rgba(0, 0, 0, 0.25);
    color:#323232;
    cursor:pointer;
    display:inline-block;
    padding:0;
    user-select:none;

    box-shadow:0 0 10px rgba(0,125,250,1);

  }

  .ntab a{
    color:#323232;
    display:block;
    padding-left:.8em;
    padding-right:.8em;
  }

  .ntab.active{
    background:#e6e6e6;
    position:relative;
  }

  .ntab_body_container{
    background:#e6e6e6;
    background:-moz-linear-gradient(top, #e6e6e6 0%, #c8c8c8 100%);
    background:-ms-linear-gradient(top, #e6e6e6 0%,#c8c8c8 100%);
    background:-o-linear-gradient(top, #e6e6e6 0%,#c8c8c8 100%);
    background:-webkit-linear-gradient(top, #e6e6e6 0%,#c8c8c8 100%);
    background:linear-gradient(top, #e6e6e6 0%,#c8c8c8 100%);
    border-color:#646464;
    border-radius:0 .4em .4em .4em;
    border-style:solid;
    border-width:0 1px 1px 1px;
    padding:20px;
    position:relative;
  }

  </style>

  <fieldset>

  <div id="tab_group_1">

    <ul class='ntab_container'>
      <li class='ntab'><a href="#tab_group1_1">Tab 1</a></li>
      <li class='ntab'><a href="#tab_group1_2">Tab 2</a></li>
    </ul><!--tabs_container-->

    <div class='ntab_body_container'>

      <div id="tab_group1_1">
	<p>This is a tab body</p>
      </div>

      <div id="tab_group1_2">
	<p>This is another tab body</p>
	<p>This is another tab body</p>
	<p>This is another tab body</p>
      </div>

    </div><!--tab_body_container-->

  </div><!--tab_group_1-->

  </fieldset>

</div><!--content_900-->