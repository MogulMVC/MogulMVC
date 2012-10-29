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
			if ($(this).is(':checked')) {
				$('#' + $(this).val()).show();
			}
		});

		checkNoShow();
	};

	function noShow() {
		MSideBar.deselectAll();

		$('.section').fadeOut(speedNorm, function() {
			checkNoShow();
		});
	};

	function allShow() {
		MSideBar.selectAll();

		$('.section').fadeIn(speedNorm, function() {
			checkNoShow();
		});
	};

	function checkNoShow() {

		var hiddenAll = true;

		$('#MSideBar input').each(function() {
			if ($(this).is(':checked')) {
				hiddenAll = false;
			}
		});

		if (hiddenAll) {
			$('#section_noShow').fadeIn(speedNorm);
		} else {
			$('#section_noShow').fadeOut(speedNorm);
		}
	};
</script>

<div id="MToolBarPlaceholder"></div>
<nav id="MToolBar">
	<div class="MToolBarSpacer left"></div>
	<div class="MToolBarSpacer right"></div>
	<span>This is the MToolBar. It is an ID. Don't confuse it with the MToolBar class. This one is fixed position. You will probably use this one more.</span>
</nav>

<table>

	<tr class="MWidthFull">

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

			<label for="check_slider">
				<li class="MSideBarListItem">
					<input id="check_slider" type="checkbox" value="section_slider" checked="true" onclick="updateShow()"/>
					<span>Slider</span>
				</li> 
			</label>

			<label for="check_bar">
				<li class="MSideBarListItem">
					<input id="check_bar" type="checkbox" value="section_bar" checked="true" onclick="updateShow()"/>
					<span>Bar</span>
				</li>
			</label>

			<label for="check_button">
				<li class="MSideBarListItem">
					<input id="check_button" type="checkbox" value="section_button" checked="true" onclick="updateShow()"/>
					<span>Upload Button</span>
				</li>
			</label>

			<label for="check_list">
				<li class="MSideBarListItem">
					<input id="check_list" type="checkbox" value="section_list" checked="true" onclick="updateShow()"/>
					<span>List</span>
				</li>
			</label>

			<label for="check_tab">
				<li class="MSideBarListItem">
					<input id="check_tab" type="checkbox" value="section_tab" checked="true" onclick="updateShow()"/>
					<span>Tab</span>
				</li>
			</label>

		</ul><!-- sidebar --></td>

		<td class="MWidthFull MPadding">
			
		<p class="MTextRed MTextBold"><?php echo htmlentities(MLoad::js_framework('core/MScript.js', 'return', true));?></p>
			
		<section>
			<p>This page contains all elements that can be added with HTML and are automatically transformed into themed or cross browser classes.</p>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>
		
		<section id="section_slider" class="section">
			<h1>Slider</h1>
			<span class="MNoteY" style="left: 80px;bottom: 60px;">A work in progress.</span>

			<input type="range" min="0" max="100" value="40" class="MWidthFull" onchange='MProgressBar.setPercent("#someProgress", this.value);MRatingsBar.setPercent("#someMeter", this.value);'/>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_slider -->
		
		<section id="section_bar" class="section">
			<h1>Bar</h1>

			<p><span class="MTextBold">&lt;progress&gt;</span> tags are turn into MProgressBar classes, which work on all browsers.</p>
			
			<progress id="someProgress" min="0" max="100" value="40"></progress>
			<a class="showCode">Code</a>
			<pre class="MHidden"><code><?php echo htmlentities('<progress min="0" max="100"></progress>'); ?></code></pre>
			<div class="MContentSpacer"></div>

			<p><span class="MTextBold">&lt;meter&gt;</span> tags are turn into MRatingsBar classes, which also work on all browsers.</p>

			<meter id="someMeter" min="0" max="100" value="40"></meter>
			<a class="showCode">Code</a>
			<pre class="MHidden"><code><?php echo htmlentities('<meter min="0" max="100"></meter>'); ?></code></pre>																						
			<br />

 			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_bar -->
		
		<section id="section_button" class="section">
			<h1>Upload Button</h1>

			<p><span class="MTextBold">&lt;input type="file" /&gt;</span> tags are turn into MButtonUpload classes, which visually matches the MButtonBlue class.</p>

			<div class="MTextCentered">
				<form action="/action_button_upload_action" target="button_upload_frame_left" method="post" enctype="multipart/form-data" class="left" data-mtip="SW" title="A very complex button floated left.">
					<input type="hidden" id="button_upload_data_left" name="data"/>
					<input type="file" id="button_upload_file_left" name="file" onchange="upload()"/>
				</form><!-- button_upload_form_left -->
				<iframe id="button_upload_frame_left" name="button_upload_frame_left" class="MHidden"></iframe>

				<form action="/action_button_upload_action" target="button_upload_frame" method="post" enctype="multipart/form-data" class="right" data-mtip="SE" title="A very complex button floated right.">
					<input type="hidden" id="button_upload_data" name="data"/>
					<input type="file" id="button_upload_file" name="file" onchange="upload()"/>
				</form><!-- button_upload_form -->
				<iframe id="button_upload_frame" name="button_upload_frame" class="MHidden"></iframe>

				<form action="/action_button_upload_action" target="button_upload_frame_right" method="post" enctype="multipart/form-data" data-mtip="S" title="A very complex button.">
					<input type="hidden" id="button_upload_data_right" name="data"/>
					<input type="file" id="button_upload_file_right" name="file" onchange="upload()"/>
				</form><!-- button_upload_form_right -->
				<iframe id="button_upload_frame_right" name="button_upload_frame_right" class="MHidden"></iframe>
			</div>

			<a class="showCode">Code</a>
			<pre class="MHidden"><code><?php echo htmlentities('<input type="file" />'); ?></code></pre>
			<br />

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_button -->
		
		<section id="section_list" class="section">
			<h1>List</h1>
			
			<p><span class="MTextBold">&lt;li&gt;</span> tags containing 1 checkbox turn blue when the checkbox is checked.</p>

			<div class="MHBoxLayout MTextCentered">
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
					<span>List Item</span>
				</li>

				<li class="MListItem">
					<input type="checkbox" />
					<span>List Item</span>
				</li>

				<li class="MListSeperator"></li>

				<li class="MListItem">
					<input type="checkbox" />
					<span>List Item</span>
				</li>

				<li class="MListItem">
					<input type="checkbox" />
					<span>List Item</span>
				</li>
			</ul>

			<a class="showCode">Code</a>
			<pre class="MHidden"><code><?php echo htmlentities('<ul>
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
	</li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
	</li>
	
	<li class="MListSeperator"></li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
	</li>
	
	<li class="MListItem">
		<input type="checkbox" />
		<span>List Item</span>
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
						<p>This is a tab body</p>
					</div><!-- tab_body_1 -->
					<div id="tab_body_2">
						<p>This is another tab body</p>
						<p>This is another tab body</p>
						<p>This is another tab body</p>
					</div><!-- tab_body_2 -->

				</div><!-- MTabBodyContainer -->
			</div><!-- MTabWidget -->

			<a class="showCode">Code</a>
			<pre class="MHidden"><code><?php echo htmlentities('<div class="MTabWidget">
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
		
		<section id="section_noShow" class="MTextCentered MHidden">
			<h1>Select a Section from the Sidebar</h1>
			<p>or</p>
			<button class="MButtonGreen" onclick="allShow()">
				Show All
			</button>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>

		</section><!-- section_noShow --></td>

	</tr>

</table>
