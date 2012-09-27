<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">
	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>

	<h1 class="MToolBarTitle left" MTip="NW" title="Toobar titles are always added to an h1 tag.">Toolbar Title</h1>

	<div class="MToolBarSeperator left"></div>

	<button class="MButton left" MTip="NW" title="I'm an &lt;button&gt; tag.">
		Button
	</button>

	<a class="left"><img src="<?php echo MLoad::icon_framework('embed_16x16.png'); ?>" alt="Embed" class="toolbar_icon"/>Toolbar Link with Icon</a>

	<div class="right">
		<span class="MButtonRed left" MTip="NE" title="I'm an &lt;span&gt; tag.">Button Red</span>
		<div class="MToolBarSpacer left"></div>
		<button class="MButtonBlue left" MTip="NE" title="I'm an &lt;button&gt; tag.">
			Button Blue
		</button>
	</div>

	<div class="MToolBarSeperator right"></div>

	<div id="display_options" class="right">
		<span class="bold left">Toolbar Label:</span>
		<a class="left">Toolbar Link</a>
		<a class="left" onclick="MSystemMessage.init('A new message')">New System Message</a>
	</div><!-- display_options -->

</nav><!-- MToolBar -->

<div id="MSystemMessageContainer"></div><!-- MSystemMessageContainer -->

<table>

	<tr class="width_full">

		<td id="MSidebarContainer"><div id="MSidebarTriggerLeft"></div>
		<ul id="MSidebar" class="MSidebarLeft">

			<a href="#section_slider">
			<li>
				<span>Slider</span>
			</li> </a>

			<a href="#section_bar_indicators">
			<li>
				<span>Progress Indicators</span>
			</li> </a>

			<a href="#section_buttons">
			<li>
				<span>Buttons</span>
			</li> </a>

			<a href="#section_tabs">
			<li>
				<span>Tabs</span>
			</li> </a>

			<a href="#section_inputs">
			<li>
				<span>Inputs</span>
			</li> </a>

			<a href="#section_popup_container">
			<li>
				<span>Popup Container</span>
			</li> </a>

		</ul><!-- sidebar --></td>

		<td class="width_full" style="padding:30px;">
		<div class="width_full">

			<?php /** Sliders */ ?>
			<fieldset id="section_slider">

				<p class="MWidgetTitle">
					Slider
				</p>

				<input type="range" min="0" max="100" value="0" class="width_full" onchange='MProgressBar.setPercent("#someProgress", this.value);MRatingsBar.setPercent("#someMeter", this.value);'/>

				<div class="MContentSpacer"></div>

				<div class="MSlider width_full"></div>

			</fieldset><!-- section_slider -->

			<div class="MContentSpacer"></div>

			<?php /** Bars */ ?>
			<fieldset id="section_bar_indicators">
				<p class="MWidgetTitle">
					Bar Indicators
				</p>

				<progress id="someProgress" min="0" max="100" value="40"></progress>

				<div class="MContentSpacer"></div>

				<meter id="someMeter" min="0" max="100" value="40"></meter>

			</fieldset><!-- section_bar_indicators -->

			<div class="MContentSpacer"></div>

			<?php /** Buttons */ ?>
			<fieldset id="section_buttons" class="text_centered">
				<p class="MWidgetTitle">
					Basic Buttons
				</p>

				<table class="width_full">

					<tr>
						<th>&lt;a&gt;</th>
						<th>&lt;button&gt;</th>
						<th>&lt;div&gt;</th>
						<th>&lt;span&gt;</th>
					</tr>

					<tr>
						<td><a class="MButton" MTip="S" title="I'm an &lt;a&gt; tag.">Button</a></td>
						<td>
						<button MTip="S" title="I'm a &lt;button&gt; tag.">
							Button
						</button></td>
						<td>
						<div class="MButton" MTip="S" title="I'm a &lt;div&gt; tag.">
							Button
						</div></td>
						<td><span class="MButton" MTip="S" title="I'm a &lt;span&gt; tag.">Button</span></td>
					</tr>

					<tr>
						<td><a class="MButton" MTip="S" title="I'm an &lt;a&gt; tag disabled." disabled="true">Button Disabled</a></td>
						<td>
						<button MTip="S" title="I'm a &lt;button&gt; tag disabled." disabled="true">
							Button Disabled
						</button></td>
						<td>
						<div class="MButton" MTip="S" title="I'm a &lt;div&gt; tag disabled." disabled="true">
							Button Disabled
						</div></td>
						<td><span class="MButton" MTip="S" title="I'm a &lt;span&gt; tag disabled." disabled="true">Button Disabled</span></td>
					</tr>

					<tr>
						<td><a class="MButton" MTip="S" title="I'm an &lt;a&gt; tag disabled." disabled="true"><span class='MIconLoadingButton'></span>Button Loading</a></td>
						<td>
						<button MTip="S" title="I'm a &lt;button&gt; tag disabled." disabled="true">
							<span class='MIconLoadingButton'></span>Button Loading
						</button></td>
						<td>
						<div class="MButton" MTip="S" title="I'm a &lt;div&gt; tag disabled." disabled="true">
							<span class='MIconLoadingButton'></span>Button Loading
						</div></td>
						<td><span class="MButton" MTip="S" title="I'm a &lt;span&gt; tag disabled." disabled="true"><span class='MIconLoadingButton'></span>Button Loading</span></td>
					</tr>

					<tr>
						<td><a class="MButtonRed" MTip="S" title="I'm an &lt;a&gt; tag.">Button Red</a></td>
						<td>
						<button class="MButtonRed" MTip="S" title="I'm a &lt;button&gt; tag.">
							Button Red
						</button></td>
						<td>
						<div class="MButtonRed" MTip="S" title="I'm a &lt;div&gt; tag.">
							Button Red
						</div></td>
						<td><span class="MButtonRed" MTip="S" title="I'm a &lt;span&gt; tag.">Button Red</span></td>
					</tr>

					<tr>
						<td><a class="MButtonOrange" MTip="S" title="I'm an &lt;a&gt; tag.">Button Orange</a></td>
						<td>
						<button class="MButtonOrange" MTip="S" title="I'm a &lt;button&gt; tag.">
							Button Orange
						</button></td>
						<td>
						<div class="MButtonOrange" MTip="S" title="I'm a &lt;div&gt; tag.">
							Button Orange
						</div></td>
						<td><span class="MButtonOrange" MTip="S" title="I'm a &lt;span&gt; tag.">Button Orange</span></td>
					</tr>

					<tr>
						<td><a class="MButtonYellow" MTip="S" title="I'm an &lt;a&gt; tag.">Button Yellow</a></td>
						<td>
						<button class="MButtonYellow" MTip="S" title="I'm a &lt;button&gt; tag.">
							Button Yellow
						</button></td>
						<td>
						<div class="MButtonYellow" MTip="S" title="I'm a &lt;div&gt; tag.">
							Button Yellow
						</div></td>
						<td><span class="MButtonYellow" MTip="S" title="I'm a &lt;span&gt; tag.">Button Yellow</span></td>
					</tr>

					<tr>
						<td><a class="MButtonGreen" MTip="S" title="I'm an &lt;a&gt; tag.">Button Green</a></td>
						<td>
						<button class="MButtonGreen" MTip="S" title="I'm a &lt;button&gt; tag.">
							Button Green
						</button></td>
						<td>
						<div class="MButtonGreen" MTip="S" title="I'm a &lt;div&gt; tag.">
							Button Green
						</div></td>
						<td><span class="MButtonGreen" MTip="S" title="I'm a &lt;span&gt; tag.">Button Green</span></td>
					</tr>

					<tr>
						<td><a class="MButtonBlue" MTip="S" title="I'm an &lt;a&gt; tag.">Button Blue</a></td>
						<td>
						<button class="MButtonBlue" MTip="S" title="I'm a &lt;button&gt; tag.">
							Button Blue
						</button></td>
						<td>
						<div class="MButtonBlue" MTip="S" title="I'm a &lt;div&gt; tag.">
							Button Blue
						</div></td>
						<td><span class="MButtonBlue" MTip="S" title="I'm a &lt;span&gt; tag.">Button Blue</span></td>
					</tr>

					<tr>
						<td><a class="MButtonViolet" MTip="S" title="I'm an &lt;a&gt; tag.">Button Violet</a></td>
						<td>
						<button class="MButtonViolet" MTip="S" title="I'm a &lt;button&gt; tag.">
							Button Violet
						</button></td>
						<td>
						<div class="MButtonViolet" MTip="S" title="I'm a &lt;div&gt; tag.">
							Button Violet
						</div></td>
						<td><span class="MButtonViolet" MTip="S" title="I'm a &lt;span&gt; tag.">Button Violet</span></td>
					</tr>

				</table>

				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Input Buttons
				</p>

				<input type="button" value="Input Button"/>
				<input type="submit" value="Input Submit"/>
				<input type="reset" value="Input Reset"/>

				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Animated Buttons
				</p>

				<table class="width_full left">
					<tr>
						<td class="text_right" style="width:70px;"><span class="bold">&lt;a&gt;</span></td>
						<td><a  id="animated_button_a" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_a_reset').fadeIn(250);" MTip="W" title="I'm an &lt;a&gt; tag.">Change Text</a><a id="animated_button_a_reset" onclick="$('#animated_button_a').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
					<tr>
						<td class="text_right"><span class="bold">&lt;div&gt;</span></td>
						<td>
						<div id="animated_button_div" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_div_reset').fadeIn(250);" MTip="W" title="I'm a &lt;div&gt; tag.">
							Change Text
						</div><a id="animated_button_div_reset" onclick="$('#animated_button_div').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
					<tr>
						<td class="text_right"><span class="bold">&lt;span&gt;</span></td>
						<td><span id="animated_button_span" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_span_reset').fadeIn(250);" MTip="W" title="I'm a &lt;span&gt; tag.">Change Text</span><a id="animated_button_span_reset" onclick="$('#animated_button_span').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
				</table>

				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Upload Buttons
				</p>

				<form action="/action_button_upload_action" target="button_upload_frame_left" method="post" enctype="multipart/form-data" class="left" MTip="S" title="A very complex button floated left.">
					<input type="hidden" id="button_upload_data_left" name="data"/>
					<input type="file" id="button_upload_file_left" name="file" onchange="upload()"/>
				</form><!-- button_upload_form_left -->
				<iframe id="button_upload_frame_left" name="button_upload_frame_left" class="hidden"></iframe>

				<form action="/action_button_upload_action" target="button_upload_frame" method="post" enctype="multipart/form-data" class="right" MTip="S" title="A very complex button floated right.">
					<input type="hidden" id="button_upload_data" name="data"/>
					<input type="file" id="button_upload_file" name="file" onchange="upload()"/>
				</form><!-- button_upload_form -->
				<iframe id="button_upload_frame" name="button_upload_frame" class="hidden"></iframe>

				<form action="/action_button_upload_action" target="button_upload_frame_right" method="post" enctype="multipart/form-data" MTip="S" title="A very complex button.">
					<input type="hidden" id="button_upload_data_right" name="data"/>
					<input type="file" id="button_upload_file_right" name="file" onchange="upload()"/>
				</form><!-- button_upload_form_right -->
				<iframe id="button_upload_frame_right" name="button_upload_frame_right" class="hidden"></iframe>

			</fieldset><!-- section_buttons -->

			<div class="MContentSpacer"></div>

			<?php /** Tabs */ ?>
			<fieldset id="section_tabs">
				<p class="MWidgetTitle">
					Tabs
				</p>

				<div class="MContentSpacer"></div>

				<div class="MTabWidget">

					<ul class="MTabContainer">
						<li class="MTab">
							<a href="#tab_group2_1">Tab 1</a>
						</li>
						<li class="MTab">
							<a href="#tab_group2_2">Tab 2</a>
						</li>
					</ul><!-- tabs_container -->

					<div class="MTabBodyContainer">

						<div id="tab_group2_1">
							<p>
								This is a tab body
							</p>
						</div>

						<div id="tab_group2_2">
							<p>
								This is another tab body
							</p>
							<p>
								This is another tab body
							</p>
							<p>
								This is another tab body
							</p>
						</div>

					</div><!-- MTabBodyContainer -->

				</div><!-- MTabWidget -->

			</fieldset><!-- section_tabs -->

			<div class="MContentSpacer"></div>

			<?php /** Input Text */ ?>
			<fieldset id="section_inputs">
				<p class="MWidgetTitle">
					Input
				</p>

				<div class="width_full text_centered">

					<div class="MHBoxLayout">
						<div MTip="S" title="I'm a checkbox with label.">
							<input type="checkbox" id="checkbox1"/>
							<label for="checkbox1">Checkbox</label>
						</div>

						<div MTip="S" title="I'm a radio button with label." style="margin-left:30px;">
							<input type="radio" name="radio" id="radio1"/>
							<label for="radio1">Radio 1</label>
						</div>
						<div MTip="S" title="I'm a radio button with label." style="margin-left:10px;">
							<input type="radio" name="radio" id="radio2"/>
							<label for="radio2">Radio 2</label>
						</div>

						<select style="margin-left:30px;">
							<option>Select</option>
							<option>Option 1</option>
							<option>Option 2</option>
						</select>

					</div>

				</div>

				<div class="MContentSpacer"></div>
				<hr />
				<div class="MContentSpacer"></div>

				<input class="width_full" type="text" placeholder="Input Text"/>
				<div class="MContentSpacer"></div>
				<input class="width_full input_invisible" type="text" placeholder="Input with No Border"/>
				<div class="MContentSpacer"></div>
				<input class="width_full" type="text" placeholder="Input Text Disabled" disabled="true"/>

				<div class="MContentSpacer"></div>
				<hr />
				<div class="MContentSpacer"></div>
				<textarea class="width_full" placeholder="Textarea"></textarea>																																																																																										
			
 				<div class="MContentSpacer"></div>
				<textarea class="width_full input_invisible" placeholder="Textarea with No Border"></textarea>
				<div class="MContentSpacer"></div>
				<textarea class="width_full" placeholder="Textarea Disabled" disabled="true"></textarea>																																																																																												

			</fieldset><!-- section_inputs -->

			<div class="MContentSpacer"></div>

			<?php /** Popups */ ?>
			<fieldset id="section_popup_container">
				<p class="MWidgetTitle">
					Popup Container
				</p>

				<div id="elements_popup" class="hidden">

					<div class="MPopup">

						<span class="MIconClose" onclick="$('#elements_popup').hide();"></span>

						<p class="MWidgetTitle">
							Popup Container
						</p>

						<div class="MPopupMenu">

							<button id="elements_popup_button_apply" class="MButtonBlue right" onclick="massEditPosterApply()">
								Apply
							</button>

							<form id="elements_popup_form" name="elements_popup_form" class="MButtonUploadForm"  action="/action_image" target="elements_popup_frame" method="post" enctype="multipart/form-data">

								<input type="hidden" id="elements_popup_version" name="version"/>
								<input type="file" id="elements_popup_file" name="file" onchange="massEditPosterUpload()"/>

							</form>

							<iframe id="elements_popup_frame" name="elements_popup_frame" class="hidden"></iframe>

						</div><!-- popup_menu -->

						<hr class="clear"/>
						<br />

						<div class="MPopupPreviewContainer">

							<div id="elements_popup_error" class="hidden">
								<?php MLoad::element_framework('error_upload.php'); ?>
							</div><!-- elements_popup_error -->

							<div id="elements_popup_preview_bg" class="MPreviewBG">
								<div id="elements_popup_icon_loading" class="MLoadingBG">
									<div class="MIconLoadingWhite50"></div>
								</div><!-- elements_popup_icon_loading -->
								<img src="" id="elements_popup_preview" class="MPopupPreview"/>
							</div><!-- elements_popup_preview_bg -->

						</div><!-- MPopupPreviewContainer -->

					</div><!-- MPopupContainer -->

					<div onclick="$('#elements_popup').hide();" class="MModalBGBlack"></div>
				</div><!-- elements_popup -->

				<a onclick="$('#elements_popup').show();">Show Popup Container</a>
			</fieldset><!-- section_popup_container -->

			<div class="MContentSpacer"></div>

			<fieldset>

				<p class="MWidgetTitle">
					List Items
				</p>

				<div class="MHBoxLayout text_centered">
					<button onclick="MList.deselectAll();">
						Deselect All
					</button>
					<button onclick="MList.selectAll();">
						Select All
					</button>
				</div>

				<ul>
					<li class="MListItem">
						<input type="checkbox" />
						<span class="bold">List Item</span>
					</li>

					<li class="MListItem">
						<input type="checkbox" />
						<span class="bold">List Item</span>
					</li>

					<li class="MListItem">
						<input type="checkbox" />
						<span class="bold">List Item</span>
					</li>

					<li class="MListItem">
						<input type="checkbox" />
						<span class="bold">List Item</span>
					</li>
				</ul>

			</fieldset>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</div></td>

	</tr>

</table>
