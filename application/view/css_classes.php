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
	
				<label for="check_button">
					<li class="MSideBarItem">
						<input id="check_button" type="checkbox" value="section_button" checked="true" onclick="updateShow()"/>
						<span>Button</span>
					</li>
				</label>
	
				<label for="check_input">
					<li class="MSideBarItem">
						<input id="check_input" type="checkbox" value="section_input" checked="true" onclick="updateShow()"/>
						<span>Input</span>
					</li>
				</label>
	
				<label for="check_well">
					<li class="MSideBarItem">
						<input id="check_well" type="checkbox" value="section_well" checked="true" onclick="updateShow()"/>
						<span>Well</span>
					</li>
				</label>
	
				<label for="check_widget">
					<li class="MSideBarItem">
						<input id="check_widget" type="checkbox" value="section_widget" checked="true" onclick="updateShow()"/>
						<span>Widget</span>
					</li>
				</label>
	
				<label for="check_layout">
					<li class="MSideBarItem">
						<input id="check_layout" type="checkbox" value="section_layout" checked="true" onclick="updateShow()"/>
						<span>Layout</span>
					</li>
				</label>
	
			</ul><!-- sidebar -->
		</td>

		<td class="width_full padding">
		<div class="width_full">

			<p><?php echo htmlentities(MLoad::css_framework_return('core/MStyle.css'));?></p>

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
						<td><a class="MButton" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button</a></td>
						<td>
						<button data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button
						</button></td>
						<td>
						<div class="MButton" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button
						</div></td>
						<td><span class="MButton" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button</span></td>
					</tr>

					<tr>
						<td><a class="MButton" data-mtip="S" title="I'm an &lt;a&gt; tag disabled." disabled="true">Button Disabled</a></td>
						<td>
						<button data-mtip="S" title="I'm a &lt;button&gt; tag disabled." disabled="true">
							Button Disabled
						</button></td>
						<td>
						<div class="MButton" data-mtip="S" title="I'm a &lt;div&gt; tag disabled." disabled="true">
							Button Disabled
						</div></td>
						<td><span class="MButton" data-mtip="S" title="I'm a &lt;span&gt; tag disabled." disabled="true">Button Disabled</span></td>
					</tr>

					<tr>
						<td><a class="MButtonRed" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Red</a></td>
						<td>
						<button class="MButtonRed" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Red
						</button></td>
						<td>
						<div class="MButtonRed" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Red
						</div></td>
						<td><span class="MButtonRed" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Red</span></td>
					</tr>

					<tr>
						<td><a class="MButtonOrange" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Orange</a></td>
						<td>
						<button class="MButtonOrange" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Orange
						</button></td>
						<td>
						<div class="MButtonOrange" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Orange
						</div></td>
						<td><span class="MButtonOrange" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Orange</span></td>
					</tr>

					<tr>
						<td><a class="MButtonYellow" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Yellow</a></td>
						<td>
						<button class="MButtonYellow" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Yellow
						</button></td>
						<td>
						<div class="MButtonYellow" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Yellow
						</div></td>
						<td><span class="MButtonYellow" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Yellow</span></td>
					</tr>

					<tr>
						<td><a class="MButtonGreen" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Green</a></td>
						<td>
						<button class="MButtonGreen" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Green
						</button></td>
						<td>
						<div class="MButtonGreen" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Green
						</div></td>
						<td><span class="MButtonGreen" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Green</span></td>
					</tr>

					<tr>
						<td><a class="MButtonBlue" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Blue</a></td>
						<td>
						<button class="MButtonBlue" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Blue
						</button></td>
						<td>
						<div class="MButtonBlue" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Blue
						</div></td>
						<td><span class="MButtonBlue" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Blue</span></td>
					</tr>

					<tr>
						<td><a class="MButtonViolet" data-mtip="S" title="I'm an &lt;a&gt; tag.">Button Violet</a></td>
						<td>
						<button class="MButtonViolet" data-mtip="S" title="I'm a &lt;button&gt; tag.">
							Button Violet
						</button></td>
						<td>
						<div class="MButtonViolet" data-mtip="S" title="I'm a &lt;div&gt; tag.">
							Button Violet
						</div></td>
						<td><span class="MButtonViolet" data-mtip="S" title="I'm a &lt;span&gt; tag.">Button Violet</span></td>
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
						<td><a id="animated_button_a" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_a_reset').fadeIn(250);" data-mtip="W" title="I'm an &lt;a&gt; tag.">Change Text</a><a id="animated_button_a_reset" onclick="$('#animated_button_a').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
					<tr>
						<td class="text_right"><span class="bold">&lt;button&gt;</span></td>
						<td>
						<button id="animated_button_button" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_button_reset').fadeIn(250);" data-mtip="W" title="I'm a &lt;span&gt; tag.">
							Change Text
						</button><a id="animated_button_button_reset" onclick="$('#animated_button_button').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
					<tr>
						<td class="text_right"><span class="bold">&lt;div&gt;</span></td>
						<td>
						<div id="animated_button_div" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_div_reset').fadeIn(250);" data-mtip="W" title="I'm a &lt;div&gt; tag.">
							Change Text
						</div><a id="animated_button_div_reset" onclick="$('#animated_button_div').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
					<tr>
						<td class="text_right"><span class="bold">&lt;span&gt;</span></td>
						<td><span id="animated_button_span" class="MButton left" onclick="$(this).MHTMLAnimate('The text is now much longer and the button has animated to accomidate the new text.', 1000);$('#animated_button_span_reset').fadeIn(250);" data-mtip="W" title="I'm a &lt;span&gt; tag.">Change Text</span><a id="animated_button_span_reset" onclick="$('#animated_button_span').MHTMLAnimate('Change Text', 1000);$(this).fadeOut(250);" class="hidden right">Reset</a></td>
					</tr>
				</table>

				<a class="showCode">Code</a>
				<pre class="hidden"><code><?php echo htmlentities('$(this).MHTMLAnimate("The text is now much longer and the button has animated to accomidate the new text.", 1000);'); ?></code></pre>				

 				<div class="MContentSpacer"></div>
				<div class="MContentSpacer"></div>

			</section><!-- section_button -->

			<?php /** Input */ ?>
			<section id="section_input" class="section">
				<h1>Input</h1>

				<div class="width_full text_centered">

					<span class="MNote">A work in progress.</span>

					<div class="MHBoxLayout">

						<div data-mtip="S" title="I'm a checkbox with label.">
							<input type="checkbox" id="checkbox1"/>
							<label for="checkbox1">Checkbox</label>
						</div>

						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>
						<div class="MHBoxSpacer"></div>

						<div data-mtip="S" title="I'm a radio button with label.">
							<input type="radio" name="radio" id="radio1"/>
							<label for="radio1">Radio 1</label>
						</div>

						<div class="MHBoxSpacer"></div>

						<div data-mtip="S" title="I'm a radio button with label.">
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

			</section><!-- section_layout -->

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
