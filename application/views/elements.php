<script type="text/javascript">
  $(document).ready(function() {

    $("#sidebar").mouseleave(function(){
      sidebarLeftHide();
    });

    $("#sidebar_trigger_left").mouseover(function(){
      sidebarLeftShow();
    });
    
  });
</script>

<div id="toolbar_placeholder"></div>
<nav id="toolbar">
  <div class="toolbar_spacer left"></div>
  <div class="toolbar_spacer right"></div>

  <h1 class="toolbar_title left" tip="nw" title="Toobar titles are always added to an h1 tag.">Toolbar Title</h1>

  <div class="toolbar_seperator left"></div>

  <button class="button left" tip="nw" title="I'm an &lt;button&gt; tag.">Button</button>

  <a class="left"><img src="<?php echo MLoad::icon_framework("embed_16x16.png");?>" alt="Embed" class="toolbar_icon"/>Toolbar Link with Icon</a>

  <div class="right">
    <span class="button_red left" tip="ne" title="I'm an &lt;span&gt; tag.">Button Red</span>
    <div class="toolbar_spacer left"></div>
    <button class="button_blue left" tip="ne" title="I'm an &lt;button&gt; tag.">Button Blue</button>
  </div>

  <div class="toolbar_seperator right"></div>

  <div id="display_options" class="right">
    <span class="bold left">Toolbar Label:</span>
    <a class="left">Toolbar Link</a>
    <a class="left" onclick="$('#element_toolbar_message').show();">Show Toolbar Message</a>
  </div><!--display_options-->

  <div id="element_toolbar_message" class="toolbar_message shown">
    <span class="bold left">The framework fades toolbar messages out after 5 seconds.</span>
    <span onclick="$('#element_toolbar_message').hide();" class="icon_close left"/></span>
  </div><!--element_toolbar_message-->

</nav><!--toolbar-->


<div id="sidebar_trigger_left"></div>
<ul id="sidebar" style="left:-360px">

  <a onclick="$(window).scrollTo('#section_progress_indicators', speedSlow, {offset:-97});">
    <li>
      <span>Progress Indicators</span>
    </li>
  </a>
  
  <a onclick="$(window).scrollTo('#section_buttons', speedSlow, {offset:-97});">
    <li>
      <span>Buttons</span>
    </li>
  </a>
  
  <a onclick="$(window).scrollTo('#section_tabs', speedSlow, {offset:-97});">
    <li>
      <span>Tabs</span>
    </li>
  </a>
  
  <a onclick="$(window).scrollTo('#section_inputs', speedSlow, {offset:-97});">
    <li>
      <span>Inputs</span>
    </li>
  </a>
  
  <a onclick="$(window).scrollTo('#section_popup_container', speedSlow, {offset:-97});">
    <li>
      <span>Popup Container</span>
    </li>
  </a>

  <a onclick="$(window).scrollTo('#section_video_player', speedSlow, {offset:-97});">
    <li>
      <span>Video Player</span>
    </li>
  </a>

</ul><!--sidebar-->


<div class="content_spacer"></div><!--content_spacer-->

<div class="content_900">
  
  <!--Progress Indicators-->
  <fieldset id="section_progress_indicators">
    <p class="widget_title">Progress Indicators</p>

    <div id="progress_bg" class="progress_bg">
      <div id="progress_fg" class="progress_fg" style="width:40%">
	<span id="progress_indicator" class="progress_indicator">40%</span>
      </div>
    </div>

    <div class="content_spacer"></div>

    <div id="ratings_bg" class="ratings_bg" tip="s" title="40%">
      <div id="ratings_fg" class="ratings_fg" style="width:40%"></div>
    </div>

    <div class="content_spacer"></div>

    <div id="ratings_warning" class="ratings_warning" tip="s" title="Not Enough Data"></div>

  </fieldset>

  <div class="content_spacer"></div>

  <!--Buttons-->
  <fieldset id="section_buttons" class="text_centered">
    <p class="widget_title">Basic Buttons</p>

    <table class="width_full">

      <tr>
	<th>&lt;a&gt;</th>
	<th>&lt;button&gt;</th>
	<th>&lt;div&gt;</th>
	<th>&lt;span&gt;</th>
      </tr>

      <tr>
	<td><a class="button" tip="s" title="I'm an &lt;a&gt; tag.">Button</a></td>
	<td><button tip="s" title="I'm a &lt;button&gt; tag.">Button</button></td>
	<td><div class="button" tip="s" title="I'm a &lt;div&gt; tag.">Button</div></td>
	<td><span class="button" tip="s" title="I'm a &lt;span&gt; tag.">Button</span></td>
      </tr>

      <tr>
	<td><a class="button" tip="s" title="I'm an &lt;a&gt; tag disabled." disabled="true">Button Disabled</a></td>
	<td><button tip="s" title="I'm a &lt;button&gt; tag disabled." disabled="true">Button Disabled</button></td>
	<td><div class="button" tip="s" title="I'm a &lt;div&gt; tag disabled." disabled="true">Button Disabled</div></td>
	<td><span class="button" tip="s" title="I'm a &lt;span&gt; tag disabled." disabled="true">Button Disabled</span></td>
      </tr>

      <tr>
	<td><a class="button" tip="s" title="I'm an &lt;a&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</a></td>
	<td><button tip="s" title="I'm a &lt;button&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</button></td>
	<td><div class="button" tip="s" title="I'm a &lt;div&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</div></td>
	<td><span class="button" tip="s" title="I'm a &lt;span&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</span></td>
      </tr>

      <tr>
	<td><a class="button_red" tip="s" title="I'm an &lt;a&gt; tag.">Button Red</a></td>
	<td><button class="button_red" tip="s" title="I'm a &lt;button&gt; tag.">Button Red</button></td>
	<td><div class="button_red" tip="s" title="I'm a &lt;div&gt; tag.">Button Red</div></td>
	<td><span class="button_red" tip="s" title="I'm a &lt;span&gt; tag.">Button Red</span></td>
      </tr>

      <tr>
	<td><a class="button_orange" tip="s" title="I'm an &lt;a&gt; tag.">Button Orange</a></td>
	<td><button class="button_orange" tip="s" title="I'm a &lt;button&gt; tag.">Button Orange</button></td>
	<td><div class="button_orange" tip="s" title="I'm a &lt;div&gt; tag.">Button Orange</div></td>
	<td><span class="button_orange" tip="s" title="I'm a &lt;span&gt; tag.">Button Orange</span></td>
      </tr>

      <tr>
	<td><a class="button_yellow" tip="s" title="I'm an &lt;a&gt; tag.">Button Yellow</a></td>
	<td><button class="button_yellow" tip="s" title="I'm a &lt;button&gt; tag.">Button Yellow</button></td>
	<td><div class="button_yellow" tip="s" title="I'm a &lt;div&gt; tag.">Button Yellow</div></td>
	<td><span class="button_yellow" tip="s" title="I'm a &lt;span&gt; tag.">Button Yellow</span></td>
      </tr>

      <tr>
	<td><a class="button_green" tip="s" title="I'm an &lt;a&gt; tag.">Button Green</a></td>
	<td><button class="button_green" tip="s" title="I'm a &lt;button&gt; tag.">Button Green</button></td>
	<td><div class="button_green" tip="s" title="I'm a &lt;div&gt; tag.">Button Green</div></td>
	<td><span class="button_green" tip="s" title="I'm a &lt;span&gt; tag.">Button Green</span></td>
      </tr>

      <tr>
	<td><a class="button_blue" tip="s" title="I'm an &lt;a&gt; tag.">Button Blue</a></td>
	<td><button class="button_blue" tip="s" title="I'm a &lt;button&gt; tag.">Button Blue</button></td>
	<td><div class="button_blue" tip="s" title="I'm a &lt;div&gt; tag.">Button Blue</div></td>
	<td><span class="button_blue" tip="s" title="I'm a &lt;span&gt; tag.">Button Blue</span></td>
      </tr>

      <tr>
	<td><a class="button_violet" tip="s" title="I'm an &lt;a&gt; tag.">Button Violet</a></td>
	<td><button class="button_violet" tip="s" title="I'm a &lt;button&gt; tag.">Button Violet</button></td>
	<td><div class="button_violet" tip="s" title="I'm a &lt;div&gt; tag.">Button Violet</div></td>
	<td><span class="button_violet" tip="s" title="I'm a &lt;span&gt; tag.">Button Violet</span></td>
      </tr>

    </table>

    <div class="content_spacer">
      <hr />
    </div>

    <p class="widget_title">Input Buttons</p>

    <input type="button" value="Input Button"/>
    <input type="submit" value="Input Submit"/>
    <input type="reset" value="Input Reset"/>

    <div class="content_spacer">
      <hr />
    </div>
    
    <p class="widget_title">Animated Buttons</p>
    
    <table class="width_full left">
      <tr>
	<td class="text_right" style="width:70px;"><span class="bold">&lt;a&gt;</span></td>
	<td>
	  <a  id="animated_button_a" class="button left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_a_reset').fadeIn(250);" tip="w" title="I'm an &lt;a&gt; tag.">Change Text</a>
	  <a id="animated_button_a_reset" onclick="$('#animated_button_a').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a>
	</td>
      </tr>
      <tr>
	<td class="text_right"><span class="bold">&lt;div&gt;</span></td>
	<td>
	  <div id="animated_button_div" class="button left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_div_reset').fadeIn(250);" tip="w" title="I'm a &lt;div&gt; tag.">Change Text</div>
	  <a id="animated_button_div_reset" onclick="$('#animated_button_div').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a>
	</td>
      </tr>
      <tr>
	<td class="text_right"><span class="bold">&lt;span&gt;</span></td>
	<td>
	  <span id="animated_button_span" class="button left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_span_reset').fadeIn(250);" tip="w" title="I'm a &lt;span&gt; tag.">Change Text</span>
	  <a id="animated_button_span_reset" onclick="$('#animated_button_span').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a>
	</td>
      </tr>
    </table>
    
    <div class="content_spacer">
      <hr />
    </div>
    
    <p class="widget_title">Upload Buttons</p>

    <div id="button_upload_left" class="button_upload button_blue left" tip="s" title="A very complex button floated left. It can be any color.">
      <form id="button_upload_form_left" name="button_upload_form_left" class="button_upload_form" action="/action_button_upload_action" target="button_upload_frame_left" method="post" enctype="multipart/form-data">
	<input type="hidden" id="button_upload_data_left" name="data"/>    
	<input type="file" id="button_upload_file_left" name="file" onchange="upload()"/>
      </form><!--button_upload_form-->
      <iframe id="button_upload_frame_left" name="button_upload_frame_left" class="hidden"></iframe>
      <span>Button Upload</span>
    </div><!--button_upload-->

    <div id="button_upload_right" class="button_upload button_blue right" tip="s" title="A very complex button floated right. It can be any color.">
      <form id="button_upload_form_right" name="button_upload_form_right" class="button_upload_form" action="/action_button_upload_action" target="button_upload_frame_right" method="post" enctype="multipart/form-data">
	<input type="hidden" id="button_upload_data_right" name="data"/>    
	<input type="file" id="button_upload_file_right" name="file" onchange="upload()"/>
      </form><!--button_upload_form-->
      <iframe id="button_upload_frame_right" name="button_upload_frame_right" class="hidden"></iframe>
      <span>Button Upload</span>
    </div><!--button_upload-->
    
    <div id="button_upload" class="button_upload button_blue" tip="s" title="A very complex button. It can be any color.">
      <form id="button_upload_form" name="button_upload_form" class="button_upload_form" action="/action_button_upload_action" target="button_upload_frame" method="post" enctype="multipart/form-data">
	<input type="hidden" id="button_upload_data" name="data"/>    
	<input type="file" id="button_upload_file" name="file" onchange="upload()"/>
      </form><!--button_upload_form-->
      <iframe id="button_upload_frame" name="button_upload_frame" class="hidden"></iframe>
      <span>Button Upload</span>
    </div><!--button_upload-->

  </fieldset>

  <div class="content_spacer"></div>

  <!--Tabs-->
  <fieldset id="section_tabs">
    <p class="widget_title">Tabs</p>

    <span onclick="tabSwitch('tab_group_1','tab_body_1', this.id);" id="tab_1" class="tab_group_1 tab tab_selected left">Tab 1</span>
    <span onclick="tabSwitch('tab_group_1','tab_body_2', this.id);" id="tab_2" class="tab_group_1 tab left">Tab 2</span>

    <div id="tab_body_1" class="tab_group_1 tab_body tab_body_selected left">
      <p>This is a tab body</p>
    </div><!--tab_body_1-->

    <div id="tab_body_2" class="tab_group_1 tab_body left">
      <p>This is another tab body</p>
      <p>This is another tab body</p>
      <p>This is another tab body</p>
    </div><!--tab_body_2-->
    
    <div class="content_spacer"></div>
    <hr />
    <div class="content_spacer"></div>
    
    <div id="tab_group_2" class="eztab_group">

      <ul class="eztab_container">
	<li class="eztab"><a href="#tab_group2_1">Tab 1</a></li>
	<li class="eztab"><a href="#tab_group2_2">Tab 2</a></li>
      </ul><!--tabs_container-->

      <div class="eztab_body_container">

	<div id="tab_group2_1">
	  <p>This is a tab body</p>
	</div>

	<div id="tab_group2_2">
	  <p>This is another tab body</p>
	  <p>This is another tab body</p>
	  <p>This is another tab body</p>
	</div>

      </div><!--tab_body_container-->

    </div><!--tab_group_2-->

  </fieldset>

  <div class="content_spacer"></div>

	<!--Input-->
  <fieldset id="section_inputs">
    <p class="widget_title">Input</p>

    <div class="width_full text_centered">
      <table cellpadding="15" style="margin:0 auto;">
	<tr>
	  <td>
	    <div class="left" tip="s" title="I'm a checkbox with label.">
	      <input type="checkbox" id="checkbox1"/>
	      <label for="checkbox1">Checkbox</label>
	    </div>
	  </td>
	  <td>
	    <div class="left" tip="s" title="I'm a radio button with label.">
	      <input type="radio" name="radio" id="radio1"/>
	      <label for="radio1">Radio 1</label>
	    </div>
	    <div class="left" tip="s" title="I'm a radio button with label." style="margin-left:10px;">
	      <input type="radio" name="radio" id="radio2"/>
	      <label for="radio2">Radio 2</label>
	    </div>
	  </td>
	  <td>
	    <select>
	      <option>Select</option>
	      <option>Option 1</option>
	      <option>Option 2</option>
	    </select>
	  </td>
	</tr>
      </table>
    </div>
    
    <div class="content_spacer"></div>
    <hr />
    <div class="content_spacer"></div>

    <input class="width_full" type="text" prompt="Input Text"/>
    <div class="content_spacer"></div>
    <input class="width_full input_invisible" type="text" prompt="Input with No Border"/>
    <div class="content_spacer"></div>
    <input class="width_full" type="text" prompt="Input Text Disabled" disabled="true"/>
    
    <div class="content_spacer"></div>
    <hr />
    <div class="content_spacer"></div>
    
    <textarea class="width_full" prompt="Textarea"></textarea>
    <div class="content_spacer"></div>
    <textarea class="width_full input_invisible" prompt="Textarea with No Border"></textarea>
    <div class="content_spacer"></div>
    <textarea class="width_full" prompt="Textarea Disabled" disabled="true"></textarea>

  </fieldset>

  <div class="content_spacer"></div>

  <fieldset id="section_popup_container">
    <p class="widget_title">Popup Container</p>

    <div id="elements_popup" class="hidden">

      <div class="popup_container">

	<span class="icon_close" onclick="$('#elements_popup').hide();"></span>

	<p class="widget_title">Popup Container</p>

	<div class="popup_menu">

	  <button id="elements_popup_button_apply" class="button button_blue right" onclick="massEditPosterApply()">Apply</button>

	  <div id="elements_popup_form_container" class="button button_upload left">

	    <form id="elements_popup_form" name="elements_popup_form" class="button_upload_form"  action="/action_image" target="elements_popup_frame" method="post" enctype="multipart/form-data">

	      <input type="hidden" id="elements_popup_version" name="version"/>
	      <input type="file" id="elements_popup_file" name="file" onchange="massEditPosterUpload()"/>

	    </form>

	    <iframe id="elements_popup_frame" name="elements_popup_frame" class="hidden"></iframe>

	    <span>Upload</span>

	  </div><!--elements_popup_form_container-->

	</div><!--popup_menu-->

	<hr class="clear"/><br />

	<div class="popup_preview_container">

	  <div id="elements_popup_error" class="hidden">
	    <?php //MLoad::element_framework("error_upload.php");?>
	  </div><!--elements_popup_error-->

	  <div id="elements_popup_preview_bg" class="preview_bg">
	    <div id="elements_popup_icon_loading" class="loading_bg">
	      <div class="icon_loading_white_50"></div>
	    </div><!--elements_popup_icon_loading-->
	    <img src="" id="elements_popup_preview" class="popup_preview"/>
	  </div><!--elements_popup_preview_bg-->

	</div><!--popup_preview_container-->

      </div><!--popup_container-->
      <div onclick="$('#elements_popup').hide();" class="modal_bg_black"></div>
    </div><!--elements_popup-->

    <a onclick="$('#elements_popup').show();">Show Popup Container</a>
  </fieldset>
  
  <div class="content_spacer"></div>
  
  <fieldset id="section_video_player" class="text_centered">
    <p class="widget_title">Video Player</p>
    <?php MSWF::video_player("427", "240");?>
  </fieldset>

</div><!--content_900-->

<div class="content_spacer"></div>
<div class="content_spacer"></div>
<div class="content_spacer"></div>
<div class="content_spacer"></div>
<div class="content_spacer"></div>