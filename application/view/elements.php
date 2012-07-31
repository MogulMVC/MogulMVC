<script type="text/javascript">
  $(document).ready(function() {

    $("#MSidebar").mouseleave(function(){
      sidebarLeftHide();
    });

    $("#MSidebarTriggerLeft").mouseover(function(){
      sidebarLeftShow();
    });
    
  });
</script>

<div id="MToolbarPlaceholder"></div>
<nav id="MToolbar">
  <div class="MToolbarSpacer left"></div>
  <div class="MToolbarSpacer right"></div>

  <h1 class="MToolbarTitle left" MTip="NW" title="Toobar titles are always added to an h1 tag.">Toolbar Title</h1>

  <div class="MToolbarSeperator left"></div>

  <button class="MButton left" MTip="NW" title="I'm an &lt;button&gt; tag.">Button</button>

  <a class="left"><img src="<?php echo MLoad::icon_framework("embed_16x16.png");?>" alt="Embed" class="toolbar_icon"/>Toolbar Link with Icon</a>

  <div class="right">
    <span class="MButtonRed left" MTip="NE" title="I'm an &lt;span&gt; tag.">Button Red</span>
    <div class="MToolbarSpacer left"></div>
    <button class="MButtonBlue left" MTip="NE" title="I'm an &lt;button&gt; tag.">Button Blue</button>
  </div>

  <div class="MToolbarSeperator right"></div>

  <div id="display_options" class="right">
    <span class="bold left">Toolbar Label:</span>
    <a class="left">Toolbar Link</a>
    <a class="left" onclick="$('#element_toolbar_message').show();">Show Toolbar Message</a>
  </div><!--display_options-->

  <div id="element_toolbar_message" class="MToolbarMessage shown">
    <span class="bold left">The framework fades toolbar messages out after 5 seconds.</span>
    <span onclick="$('#element_toolbar_message').hide();" class="MIconClose left"/></span>
  </div><!--element_toolbar_message-->

</nav><!--MToolbar-->

<div id="MSidebarTriggerLeft"></div>
<ul id="MSidebar" class="MSidebarLeftHidden">

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

<div class="MContentSpacer"></div><!--MContentSpacer-->

<div class="MContent900">
  
  <!--Progress Indicators-->
  <fieldset id="section_progress_indicators">
    <p class="MWidgetTitle">Progress Indicators</p>

    <div class="MProgressBarContainer">
      <div id="progress_bg" class="MProgressBarBG">
	<div id="progress_fg" class="MProgressBarFG" style="width:40%">
	  <span id="progress_indicator" class="MProgressBarIndicator">40%</span>
	</div><!--progress_fg-->
      </div><!--progress_bg-->
    </div>

    <div class="MContentSpacer"></div>

    <div id="ratings_bg" class="MRatingsBarBG" MTip="S" title="40%">
      <div id="ratings_fg" class="MRatingsBarFG" style="width:40%"></div>
    </div>

    <div class="MContentSpacer"></div>

    <div id="ratings_warning" class="MRatingsBarWarning" MTip="S" title="Not Enough Data"></div>

  </fieldset>

  <div class="MContentSpacer"></div>

  <!--Buttons-->
  <fieldset id="section_buttons" class="text_centered">
    <p class="MWidgetTitle">Basic Buttons</p>

    <table class="width_full">

      <tr>
	<th>&lt;a&gt;</th>
	<th>&lt;button&gt;</th>
	<th>&lt;div&gt;</th>
	<th>&lt;span&gt;</th>
      </tr>

      <tr>
	<td><a class="MButton" MTip="S" title="I'm an &lt;a&gt; tag.">Button</a></td>
	<td><button MTip="S" title="I'm a &lt;button&gt; tag.">Button</button></td>
	<td><div class="MButton" MTip="S" title="I'm a &lt;div&gt; tag.">Button</div></td>
	<td><span class="MButton" MTip="S" title="I'm a &lt;span&gt; tag.">Button</span></td>
      </tr>

      <tr>
	<td><a class="MButton" MTip="S" title="I'm an &lt;a&gt; tag disabled." disabled="true">Button Disabled</a></td>
	<td><button MTip="S" title="I'm a &lt;button&gt; tag disabled." disabled="true">Button Disabled</button></td>
	<td><div class="MButton" MTip="S" title="I'm a &lt;div&gt; tag disabled." disabled="true">Button Disabled</div></td>
	<td><span class="MButton" MTip="S" title="I'm a &lt;span&gt; tag disabled." disabled="true">Button Disabled</span></td>
      </tr>

      <tr>
	<td><a class="MButton" MTip="S" title="I'm an &lt;a&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</a></td>
	<td><button MTip="S" title="I'm a &lt;button&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</button></td>
	<td><div class="MButton" MTip="S" title="I'm a &lt;div&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</div></td>
	<td><span class="MButton" MTip="S" title="I'm a &lt;span&gt; tag disabled." disabled="true"><span class='icon_loading_button'></span>Button Loading</span></td>
      </tr>

      <tr>
	<td><a class="MButtonRed" MTip="S" title="I'm an &lt;a&gt; tag.">Button Red</a></td>
	<td><button class="MButtonRed" MTip="S" title="I'm a &lt;button&gt; tag.">Button Red</button></td>
	<td><div class="MButtonRed" MTip="S" title="I'm a &lt;div&gt; tag.">Button Red</div></td>
	<td><span class="MButtonRed" MTip="S" title="I'm a &lt;span&gt; tag.">Button Red</span></td>
      </tr>

      <tr>
	<td><a class="MButtonOrange" MTip="S" title="I'm an &lt;a&gt; tag.">Button Orange</a></td>
	<td><button class="MButtonOrange" MTip="S" title="I'm a &lt;button&gt; tag.">Button Orange</button></td>
	<td><div class="MButtonOrange" MTip="S" title="I'm a &lt;div&gt; tag.">Button Orange</div></td>
	<td><span class="MButtonOrange" MTip="S" title="I'm a &lt;span&gt; tag.">Button Orange</span></td>
      </tr>

      <tr>
	<td><a class="MButtonYellow" MTip="S" title="I'm an &lt;a&gt; tag.">Button Yellow</a></td>
	<td><button class="MButtonYellow" MTip="S" title="I'm a &lt;button&gt; tag.">Button Yellow</button></td>
	<td><div class="MButtonYellow" MTip="S" title="I'm a &lt;div&gt; tag.">Button Yellow</div></td>
	<td><span class="MButtonYellow" MTip="S" title="I'm a &lt;span&gt; tag.">Button Yellow</span></td>
      </tr>

      <tr>
	<td><a class="MButtonGreen" MTip="S" title="I'm an &lt;a&gt; tag.">Button Green</a></td>
	<td><button class="MButtonGreen" MTip="S" title="I'm a &lt;button&gt; tag.">Button Green</button></td>
	<td><div class="MButtonGreen" MTip="S" title="I'm a &lt;div&gt; tag.">Button Green</div></td>
	<td><span class="MButtonGreen" MTip="S" title="I'm a &lt;span&gt; tag.">Button Green</span></td>
      </tr>

      <tr>
	<td><a class="MButtonBlue" MTip="S" title="I'm an &lt;a&gt; tag.">Button Blue</a></td>
	<td><button class="MButtonBlue" MTip="S" title="I'm a &lt;button&gt; tag.">Button Blue</button></td>
	<td><div class="MButtonBlue" MTip="S" title="I'm a &lt;div&gt; tag.">Button Blue</div></td>
	<td><span class="MButtonBlue" MTip="S" title="I'm a &lt;span&gt; tag.">Button Blue</span></td>
      </tr>

      <tr>
	<td><a class="MButtonViolet" MTip="S" title="I'm an &lt;a&gt; tag.">Button Violet</a></td>
	<td><button class="MButtonViolet" MTip="S" title="I'm a &lt;button&gt; tag.">Button Violet</button></td>
	<td><div class="MButtonViolet" MTip="S" title="I'm a &lt;div&gt; tag.">Button Violet</div></td>
	<td><span class="MButtonViolet" MTip="S" title="I'm a &lt;span&gt; tag.">Button Violet</span></td>
      </tr>

    </table>

    <div class="MContentSpacer">
      <hr />
    </div>

    <p class="MWidgetTitle">Input Buttons</p>

    <input type="button" value="Input Button"/>
    <input type="submit" value="Input Submit"/>
    <input type="reset" value="Input Reset"/>

    <div class="MContentSpacer">
      <hr />
    </div>
    
    <p class="MWidgetTitle">Animated Buttons</p>
    
    <table class="width_full left">
      <tr>
	<td class="text_right" style="width:70px;"><span class="bold">&lt;a&gt;</span></td>
	<td>
	  <a  id="animated_button_a" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_a_reset').fadeIn(250);" MTip="W" title="I'm an &lt;a&gt; tag.">Change Text</a>
	  <a id="animated_button_a_reset" onclick="$('#animated_button_a').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a>
	</td>
      </tr>
      <tr>
	<td class="text_right"><span class="bold">&lt;div&gt;</span></td>
	<td>
	  <div id="animated_button_div" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_div_reset').fadeIn(250);" MTip="W" title="I'm a &lt;div&gt; tag.">Change Text</div>
	  <a id="animated_button_div_reset" onclick="$('#animated_button_div').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a>
	</td>
      </tr>
      <tr>
	<td class="text_right"><span class="bold">&lt;span&gt;</span></td>
	<td>
	  <span id="animated_button_span" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_span_reset').fadeIn(250);" MTip="W" title="I'm a &lt;span&gt; tag.">Change Text</span>
	  <a id="animated_button_span_reset" onclick="$('#animated_button_span').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a>
	</td>
      </tr>
    </table>
    
    <div class="MContentSpacer">
      <hr />
    </div>
    
    <p class="MWidgetTitle">Upload Buttons</p>

    <div id="button_upload_left" class="MButtonUpload MButtonBlue left" MTip="S" title="A very complex button floated left. It can be any color.">
      <form id="button_upload_form_left" name="button_upload_form_left" class="MButtonUploadForm" action="/action_button_upload_action" target="button_upload_frame_left" method="post" enctype="multipart/form-data">
	<input type="hidden" id="button_upload_data_left" name="data"/>    
	<input type="file" id="button_upload_file_left" name="file" onchange="upload()"/>
      </form><!--button_upload_form_left-->
      <iframe id="button_upload_frame_left" name="button_upload_frame_left" class="hidden"></iframe>
      <span>Button Upload</span>
    </div><!--button_upload_left-->

    <div id="button_upload_right" class="MButtonUpload MButtonBlue right" MTip="S" title="A very complex button floated right. It can be any color.">
      <form id="button_upload_form_right" name="button_upload_form_right" class="MButtonUploadForm" action="/action_button_upload_action" target="button_upload_frame_right" method="post" enctype="multipart/form-data">
	<input type="hidden" id="button_upload_data_right" name="data"/>    
	<input type="file" id="button_upload_file_right" name="file" onchange="upload()"/>
      </form><!--button_upload_form_right-->
      <iframe id="button_upload_frame_right" name="button_upload_frame_right" class="hidden"></iframe>
      <span>Button Upload</span>
    </div><!--button_upload_right-->
    
    <div id="button_upload" class="MButtonUpload MButtonBlue" MTip="S" title="A very complex button. It can be any color.">
      <form id="button_upload_form" name="button_upload_form" class="MButtonUploadForm" action="/action_button_upload_action" target="button_upload_frame" method="post" enctype="multipart/form-data">
	<input type="hidden" id="button_upload_data" name="data"/>    
	<input type="file" id="button_upload_file" name="file" onchange="upload()"/>
      </form><!--button_upload_form-->
      <iframe id="button_upload_frame" name="button_upload_frame" class="hidden"></iframe>
      <span>Button Upload</span>
    </div><!--button_upload-->

  </fieldset>

  <div class="MContentSpacer"></div>

  <!--Tabs-->
  <fieldset id="section_tabs">
    <p class="MWidgetTitle">Tabs</p>

    <span onclick="tabSwitch('tab_group_1','tab_body_1', this.id);" id="tab_1" class="tab_group_1 MTab MTabSelected left">Tab 1</span>
    <span onclick="tabSwitch('tab_group_1','tab_body_2', this.id);" id="tab_2" class="tab_group_1 MTab left">Tab 2</span>

    <div id="tab_body_1" class="tab_group_1 MTabBody MTabBodySelected left">
      <p>This is a tab body</p>
    </div><!--tab_body_1-->

    <div id="tab_body_2" class="tab_group_1 MTabBody left">
      <p>This is another tab body</p>
      <p>This is another tab body</p>
      <p>This is another tab body</p>
    </div><!--tab_body_2-->
    
    <div class="MContentSpacer"></div>
    <hr />
    <div class="MContentSpacer"></div>
    
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

  <div class="MContentSpacer"></div>

  <!--Input-->
  <fieldset id="section_inputs">
    <p class="MWidgetTitle">Input</p>

    <div class="width_full text_centered">
      <table cellpadding="15" style="margin:0 auto;">
	<tr>
	  <td>
	    <div class="left" MTip="S" title="I'm a checkbox with label.">
	      <input type="checkbox" id="checkbox1"/>
	      <label for="checkbox1">Checkbox</label>
	    </div>
	  </td>
	  <td>
	    <div class="left" MTip="S" title="I'm a radio button with label.">
	      <input type="radio" name="radio" id="radio1"/>
	      <label for="radio1">Radio 1</label>
	    </div>
	    <div class="left" MTip="S" title="I'm a radio button with label." style="margin-left:10px;">
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
    
    <div class="MContentSpacer"></div>
    <hr />
    <div class="MContentSpacer"></div>

    <input class="width_full" type="text" prompt="Input Text"/>
    <div class="MContentSpacer"></div>
    <input class="width_full input_invisible" type="text" prompt="Input with No Border"/>
    <div class="MContentSpacer"></div>
    <input class="width_full" type="text" prompt="Input Text Disabled" disabled="true"/>
    
    <div class="MContentSpacer"></div>
    <hr />
    <div class="MContentSpacer"></div>
    
    <textarea class="width_full" prompt="Textarea"></textarea>
    <div class="MContentSpacer"></div>
    <textarea class="width_full input_invisible" prompt="Textarea with No Border"></textarea>
    <div class="MContentSpacer"></div>
    <textarea class="width_full" prompt="Textarea Disabled" disabled="true"></textarea>

  </fieldset>

  <div class="MContentSpacer"></div>

  <fieldset id="section_popup_container">
    <p class="MWidgetTitle">Popup Container</p>

    <div id="elements_popup" class="hidden">

      <div class="MPopupContainer">

	<span class="MIconClose" onclick="$('#elements_popup').hide();"></span>

	<p class="MWidgetTitle">Popup Container</p>

	<div class="MPopupMenu">

	  <button id="elements_popup_button_apply" class="MButtonBlue right" onclick="massEditPosterApply()">Apply</button>

	  <div id="elements_popup_form_container" class="MButtonUpload left">

	    <form id="elements_popup_form" name="elements_popup_form" class="MButtonUploadForm"  action="/action_image" target="elements_popup_frame" method="post" enctype="multipart/form-data">

	      <input type="hidden" id="elements_popup_version" name="version"/>
	      <input type="file" id="elements_popup_file" name="file" onchange="massEditPosterUpload()"/>

	    </form>

	    <iframe id="elements_popup_frame" name="elements_popup_frame" class="hidden"></iframe>

	    <span>Upload</span>

	  </div><!--elements_popup_form_container-->

	</div><!--popup_menu-->

	<hr class="clear"/><br />

	<div class="MPopupPreviewContainer">

	  <div id="elements_popup_error" class="hidden">
	    <?php MLoad::element_framework("error_upload.php");?>
	  </div><!--elements_popup_error-->

	  <div id="elements_popup_preview_bg" class="MPreviewBG">
	    <div id="elements_popup_icon_loading" class="MLoadingBG">
	      <div class="MIconLoadingWhite50"></div>
	    </div><!--elements_popup_icon_loading-->
	    <img src="" id="elements_popup_preview" class="MPopupPreview"/>
	  </div><!--elements_popup_preview_bg-->

	</div><!--MPopupPreviewContainer-->

      </div><!--MPopupContainer-->
      
      <div onclick="$('#elements_popup').hide();" class="MModalBGBlack"></div>
    </div><!--elements_popup-->

    <a onclick="$('#elements_popup').show();">Show Popup Container</a>
  </fieldset>
  
  <div class="MContentSpacer"></div>
  
  <fieldset id="section_video_player" class="text_centered">
    <p class="MWidgetTitle">Video Player</p>
    <?php MSWF::video_player("427", "240");?>
  </fieldset>

</div><!--MContent900-->

<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>
<div class="MContentSpacer"></div>