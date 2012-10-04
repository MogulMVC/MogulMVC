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

		<td id="MSideBarContainer">
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
				<span>Upload Button</span>
			</li>

			<li>
				<input type="checkbox" value="section_list" checked="true" onclick="updateShow()"/>
				<span>List</span>
			</li>

			<li>
				<input type="checkbox" value="section_tab" checked="true" onclick="updateShow()"/>
				<span>Tab</span>
			</li>

		</ul><!-- sidebar --></td>

		<td class="width_full padding">
		<section>
			<p>
				This page contains all elements that can be added with HTML and are automatically transformed into themed or cross browser classes.
			</p>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>
		
		<section id="section_slider" class="section">
			<h1>Slider</h1>
			<span class="MNote" style="left: 80px;bottom: 60px;">A work in progress.</span>

			<input type="range" min="0" max="100" value="40" class="width_full" onchange='MProgressBar.setPercent("#someProgress", this.value);MRatingsBar.setPercent("#someMeter", this.value);'/>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_slider -->
		
		<section id="section_bar" class="section">
			<h1>Bar</h1>

			<p>
				<span class="bold">&lt;progress&gt;</span> tags are turn into MProgressBar classes, which work on all browsers.
			</p>
			
			<progress id="someProgress" min="0" max="100" value="40"></progress>
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<progress min="0" max="100"></progress>'); ?></code></pre>
			<div class="MContentSpacer"></div>

			<p>
				<span class="bold">&lt;meter&gt;</span> tags are turn into MRatingsBar classes, which also work on all browsers.
			</p>

			<meter id="someMeter" min="0" max="100" value="40"></meter>
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<meter min="0" max="100"></meter>'); ?></code></pre>																						
			<br />

 			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_bar -->
		
		<section id="section_button" class="section">
			<h1>Upload Button</h1>

			<p>
				<span class="bold">&lt;input type="file" /&gt;</span> tags are turn into MButtonUpload classes, which visually matches the MButtonBlue class.
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
			<br />

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_button -->
		
		<section id="section_list" class="section">
			<h1>List</h1>
			
			<p>
				<span class="bold">&lt;li&gt;</span> tags containing 1 checkbox turn blue when the checkbox is checked.
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
</ul>');?></code></pre>																																																		
			<br />
			
 			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_list -->
		
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
</div>');?></code></pre>																																																		
			<br />
			
 			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_tab -->
		
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

		</section><!-- section_noShow --></td>

	</tr>

</table>
