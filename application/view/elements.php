<script>
	$(document).ready(function() {
		$('.showCode').each(function(index) {
			$(this).click(function() {
				$(this).next().toggle()
			});
		});
	});

	function updateShow(id) {

		$('.section').hide();

		$('#MSideBar input').each(function() {
			if ($(this).is(":checked")) {
				$('#' + $(this).val()).show();
			}
		});

		checkNoShow();
	}

	function noShow() {
		MSideBar.deselectAll();

		$('.section').fadeOut(speedNorm, function() {
			checkNoShow();
		});
	}

	function allShow() {
		MSideBar.selectAll();

		$('.section').fadeIn(speedNorm, function() {
			checkNoShow();
		});
	}

	function checkNoShow() {

		var hiddenAll = true;

		$('#MSideBar input').each(function() {
			if ($(this).is(":checked")) {
				hiddenAll = false;
			}
		});

		if (hiddenAll) {
			$('#section_noShow').fadeIn(speedNorm);
		} else {
			$('#section_noShow').fadeOut(speedNorm);
		}
	}
</script>

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

		<td id="MSideBarContainer"><div id="MSideBarTriggerLeft"></div>
		<ul id="MSideBar" class="MSideBarLeft">

			<div class="MSideBarMenu">
				<button onclick="noShow()">
					Deselect All
				</button>
				<button onclick="allShow()">
					Select All
				</button>
			</div>

			<li>
				<input type="checkbox" value="section_slider" checked="true" onclick="updateShow()"/>
				<span>Slider</span>
			</li>

			<li>
				<input type="checkbox" value="section_bar" checked="true" onclick="updateShow()"/>
				<span>Bar</span>
			</li>

			<li>
				<input type="checkbox" value="section_button" checked="true" onclick="updateShow()"/>
				<span>Button</span>
			</li>

			<li>
				<input type="checkbox" value="section_input" checked="true" onclick="updateShow()"/>
				<span>Input</span>
			</li>

			<li>
				<input type="checkbox" value="section_list" checked="true" onclick="updateShow()"/>
				<span>List</span>
			</li>

			<li>
				<input type="checkbox" value="section_tab" checked="true" onclick="updateShow()"/>
				<span>Tab</span>
			</li>

			<li>
				<input type="checkbox" value="section_well" checked="true" onclick="updateShow()"/>
				<span>Well</span>
			</li>

			<li>
				<input type="checkbox" value="section_widget" checked="true" onclick="updateShow()"/>
				<span>Widget</span>
			</li>

			<li>
				<input type="checkbox" value="section_layout" checked="true" onclick="updateShow()"/>
				<span>Layout</span>
			</li>

			<li>
				<input type="checkbox" value="section_popup" checked="true" onclick="updateShow()"/>
				<span>Popup</span>
			</li>

		</ul><!-- sidebar --></td>

		<td class="width_full" style="padding:30px;">
		<div class="width_full">

			<?php /** Sliders */ ?>
			<section id="section_slider" class="section">
				<h1>Slider</h1>
				<span class="MNote" style="left: 80px;bottom: 60px;">A work in progress.</span>

				<input type="range" min="0" max="100" value="40" class="width_full" onchange='MProgressBar.setPercent("#someProgress", this.value);MRatingsBar.setPercent("#someMeter", this.value);'/>

				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_slider -->

			<?php /** Bars */ ?>
			<section id="section_bar" class="section">
				<h1>Bar</h1>

				<progress id="someProgress" min="0" max="100" value="40"></progress>
				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<progress min="0" max="100"></progress>'); ?></code></pre>
				<div class="MContentSpacer"></div>

				<meter id="someMeter" min="0" max="100" value="40"></meter>
				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<meter min="0" max="100"></meter>'); ?></code></pre>				

 				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_bar -->

			<?php /** Buttons */ ?>
			<section id="section_button" class="section">
				<h1>Button</h1>

				<table class="width_full text_centered">

					<tr>
						<th>&lt;a&gt;</th>
						<th><span class="MNote">&lt;button&gt; is prefered</span></th>
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

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<a class="MButton">Button</a>
<button class="MButton">Button</button>
<div class="MButton">Button</div>
<span class="MButton">Button</span>');
				?></code></pre>				


				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Input Buttons
				</p>

				<div class="text_centered">
					<input type="button" value="Button"/>
					<input type="submit" />
					<input type="reset" />
				</div>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<input type="button" value="Button"/>
<input type="submit" />
<input type="reset" />');
				?></code></pre>																																


				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Animated Buttons
				</p>

				<table class="width_full left">
					<tr>
						<td class="text_right" style="width:70px;"><span class="bold">&lt;a&gt;</span></td>
						<td><a id="animated_button_a" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_a_reset').fadeIn(250);" MTip="W" title="I'm an &lt;a&gt; tag.">Change Text</a><a id="animated_button_a_reset" onclick="$('#animated_button_a').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
					<tr>
						<td class="text_right"><span class="bold">&lt;button&gt;</span></td>
						<td>
						<button id="animated_button_button" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_button_reset').fadeIn(250);" MTip="W" title="I'm a &lt;span&gt; tag.">
							Change Text
						</button><a id="animated_button_button_reset" onclick="$('#animated_button_button').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
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

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('$(this).MHTMLAnimate("The text is now much longer and the button has animated to accomidate the new text.", 1000);'); ?></code></pre>				


				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					Upload Buttons
				</p>

				<div class="text_centered">
					<form action="/action_button_upload_action" target="button_upload_frame_left" method="post" enctype="multipart/form-data" class="left" MTip="SW" title="A very complex button floated left.">
						<input type="hidden" id="button_upload_data_left" name="data"/>
						<input type="file" id="button_upload_file_left" name="file" onchange="upload()"/>
					</form><!-- button_upload_form_left -->
					<iframe id="button_upload_frame_left" name="button_upload_frame_left" class="hidden"></iframe>

					<form action="/action_button_upload_action" target="button_upload_frame" method="post" enctype="multipart/form-data" class="right" MTip="SE" title="A very complex button floated right.">
						<input type="hidden" id="button_upload_data" name="data"/>
						<input type="file" id="button_upload_file" name="file" onchange="upload()"/>
					</form><!-- button_upload_form -->
					<iframe id="button_upload_frame" name="button_upload_frame" class="hidden"></iframe>

					<form action="/action_button_upload_action" target="button_upload_frame_right" method="post" enctype="multipart/form-data" MTip="S" title="A very complex button.">
						<input type="hidden" id="button_upload_data_right" name="data"/>
						<input type="file" id="button_upload_file_right" name="file" onchange="upload()"/>
					</form><!-- button_upload_form_right -->
					<iframe id="button_upload_frame_right" name="button_upload_frame_right" class="hidden"></iframe>
				</div>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<input type="file" />'); ?></code></pre>				

 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_button -->

			<?php /** Input */ ?>
			<section id="section_input" class="section">
				<h1>Input</h1>

				<div class="width_full text_centered">

					<span class="MNote">A work in progress.</span>

					<div class="MHBoxLayout">

						<div MTip="S" title="I'm a checkbox with label.">
							<input type="checkbox" id="checkbox1"/>
							<label for="checkbox1">Checkbox</label>
						</div>

						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>

						<div MTip="S" title="I'm a radio button with label.">
							<input type="radio" name="radio" id="radio1"/>
							<label for="radio1">Radio 1</label>
						</div>

						<div class="MHBoxSpacer"></div>

						<div MTip="S" title="I'm a radio button with label.">
							<input type="radio" name="radio" id="radio2"/>
							<label for="radio2">Radio 2</label>
						</div>

						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>

						<select>
							<option>Select</option>
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3 With More Text</option>
						</select>

						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>

						<input type="number" value="0" min="0" max="100"/>

					</div>

				</div>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<input type="checkbox" id="checkbox1"/>
<label for="checkbox1">Checkbox</label>

<input type="radio" name="radio" id="radio1"/>
<label for="radio1">Radio 1</label>

<input type="radio" name="radio" id="radio2"/>
<label for="radio2">Radio 2</label>
	
<select>
	<option>Select</option>
	<option>Option 1</option>
	<option>Option 2</option>
	<option>Option 3 With More Text</option>
</select>

<input type="number" value="0" min="0" max="100"/>');
				?></code></pre>																																

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
																																																																																														
 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_input -->

			<?php /** List */ ?>
			<section id="section_list" class="section">
				<h1>List</h1>

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

					<li class="MListSeperator"></li>

					<li class="MListItem">
						<input type="checkbox" />
						<span class="bold">List Item</span>
					</li>

					<li class="MListItem">
						<input type="checkbox" />
						<span class="bold">List Item</span>
					</li>
				</ul>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<ul>
	<li class="MListItem">
		<input type="checkbox" />
		<span class="bold">List Item</span>
	</li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span class="bold">List Item</span>
	</li>
	
	<li class="MListSeperator"></li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span class="bold">List Item</span>
	</li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span class="bold">List Item</span>
	</li>
</ul>');
				?></code></pre>																																

 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_list -->

			<?php /** Tab */ ?>
			<section id="section_tab" class="section">
				<h1>Tab</h1>

				<div class="MTabWidget">
					<ul class="MTabContainer">
						<li class="MTab">
							<a href="#tab_body_1">Tab 1</a>
						</li>
						<li class="MTab">
							<a href="#tab_body_2">Tab 2</a>
						</li>
					</ul><!-- tabs_container -->
					<div class="MTabBodyContainer">
						<div id="tab_body_1">
							<p>
								This is a tab body
							</p>
						</div>
						<div id="tab_body_2">
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

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<div class="MTabWidget">
	<ul class="MTabContainer">
		<li class="MTab">
			<a href="#tab_body_1">Tab 1</a>
		</li>
		<li class="MTab">
			<a href="#tab_body_2">Tab 2</a>
		</li>
	</ul>
	<div class="MTabBodyContainer">
		<div id="tab_body_1">
			<p>This is a tab body</p>
		</div>
		<div id="tab_body_2">
			<p>This is another tab body</p>
			<p>This is another tab body</p>
			<p>This is another tab body</p>
		</div>
	</div>
</div>');
				?></code></pre>																																

 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_tab -->

			<?php /** Well */ ?>
			<section id="section_well" class="section">
				<h1>Well</h1>

				<div class="MWell">
					<p>
						I'm in a well.
					</p>
				</div>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<div class="MWell"></div>'); ?></code></pre>																																

 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section>

			<?php /** Widget */ ?>
			<section id="section_widget" class="section">
				<h1>Widget</h1>

				<div class="MWidget">
					<p>
						I'm in a widget.
					</p>
				</div>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<div class="MWidget"></div>'); ?></code></pre>																				
				
 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section>

			<?php /** Layouts */ ?>
			<section id="section_layout" class="section">
				<h1>Layout</h1>

				<p class="MWidgetTitle">
					MVBoxLayout
				</p>

				<div class="MHBoxLayout">
					<button>
						MHBoxLayout
					</button>
					<button>
						MHBoxLayout
					</button>
					<button>
						MHBoxLayout
					</button>
				</div>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<div class="MHBoxLayout">
	<button>Button</button>
	<button>Button</button>
	<button>Button</button>
</div>');
				?></code></pre>																																


				<div class="MContentSpacer">
					<hr />
				</div>

				<p class="MWidgetTitle">
					MHBoxLayout
				</p>

				<div class="MVBoxLayout">
					<button>
						Button
					</button>
					<button>
						Button
					</button>
					<button>
						Button
					</button>
				</div>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<div class="MVBoxLayout">
	<button>Button</button>
	<button>Button</button>
	<button>Button</button>
</div>');
				?></code></pre>																																

 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section>

			<?php /** Popup */ ?>
			<section id="section_popup" class="section">
				<h1>Popup</h1>

				<button class="MButtonBlue" onclick="$('#elements_popup').show();">
					Show Popup Container
				</button>

				<div id="elements_popup" class="hidden">

					<div class="MPopup">

						<span class="MIconClose" onclick="$('#elements_popup').hide();"></span>

						<p class="MWidgetTitle">
							Popup
						</p>

						<div class="MPopupMenu">

							<button id="elements_popup_button_apply" class="MButtonBlue right">
								Apply
							</button>

							<form id="elements_popup_form" name="elements_popup_form" class="MButtonUploadForm"  action="/action_image" target="elements_popup_frame" method="post" enctype="multipart/form-data">
								<input type="hidden" id="elements_popup_version" name="version"/>
								<input type="file" id="elements_popup_file" name="file"/>
							</form>

							<iframe id="elements_popup_frame" name="elements_popup_frame" class="hidden"></iframe>

						</div><!-- MPopupMenu -->

						<hr class="clear"/>
						<br />

						<p class="text_centered bold">
							Content Goes Here
						</p>

					</div><!-- MPopupContainer -->

					<div onclick="$('#elements_popup').hide();" class="MModalBGBlack"></div>
				</div><!-- elements_popup -->

				<br />

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('<div class="MPopup"></div>'); ?></code></pre>																																

 <div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_popup -->

			<section id="section_noShow" class="text_centered hidden">
				<h1>Select a Section from the Sidebar</h1>
				<p>
					or
				</p>
				<button class="MButtonGreen" onclick="allShow()">
					Show All
				</button>

				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_noShow -->

		</div></td>

	</tr>

</table>
