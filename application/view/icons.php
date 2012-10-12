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
			if ($(this).is(":checked")) {
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
			
			<label for="check_arrow">
				<li class="MSideBarItem">
					<input id="check_arrow" type="checkbox" value="section_arrow" checked="true" onclick="updateShow()"/>
					<span>Arrows</span>
				</li>
			</label>

			<label for="check_close">
				<li class="MSideBarItem">
					<input id="check_close" type="checkbox" value="section_close" checked="true" onclick="updateShow()"/>
					<span>Close</span>
				</li>
			</label>

			<label for="check_social">
				<li class="MSideBarItem">
					<input id="check_social" type="checkbox" value="section_social" checked="true" onclick="updateShow()"/>
					<span>Social</span>
				</li>
			</label>

			<label for="check_avatar">
				<li class="MSideBarItem">
					<input id="check_avatar" type="checkbox" value="section_avatar" checked="true" onclick="updateShow()"/>
					<span>Avatar</span>
				</li>
			</label>

			<label for="check_complete">
				<li class="MSideBarItem">
					<input id="check_complete" type="checkbox" value="section_complete" checked="true" onclick="updateShow()"/>
					<span>Complete</span>
				</li>
			</label>

			<label for="check_embed">
				<li class="MSideBarItem">
					<input id="check_embed" type="checkbox" value="section_embed" checked="true" onclick="updateShow()"/>
					<span>Embed</span>
				</li>
			</label>
			
			<label for="check_loading">
				<li class="MSideBarItem">
					<input id="check_loading" type="checkbox" value="section_loading" checked="true" onclick="updateShow()"/>
					<span>Loading</span>
				</li>
			</label>
			
			<label for="check_openShare">
				<li class="MSideBarItem">
					<input id="check_openShare" type="checkbox" value="section_openShare" checked="true" onclick="updateShow()"/>
					<span>Open Share</span>
				</li>
			</label>
			
			<label for="check_shareThis">
				<li class="MSideBarItem">
					<input id="check_shareThis" type="checkbox" value="section_shareThis" checked="true" onclick="updateShow()"/>
					<span>Share This</span>
				</li>
			</label>
			
			<label for="check_warning">
				<li class="MSideBarItem">
					<input id="check_warning" type="checkbox" value="section_warning" checked="true" onclick="updateShow()"/>
					<span>Warning</span>
				</li>
			</label>
			
			<label for="check_misc">
				<li class="MSideBarItem">
					<input id="check_misc" type="checkbox" value="section_misc" checked="true" onclick="updateShow()"/>
					<span>Misc</span>
				</li>
			</label>

		</ul></td>

		<td class="MWidthFull MPadding">
			
		<p><?php echo htmlentities(MLoad::css_framework_return('core/MIcons.css'));?></p>
			
		<section id="section_arrow" class="section">
			<h1>Arrows</h1>

			<div class="MWidget" style="position: relative">
				<div class="MIconArrorLeft"></div>
				<div class="MIconArrowRight"></div>
			</div>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<div class="MIconArrorLeft"></div>
<div class="MIconArrowRight"></div>');?></code></pre>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>
		
		<section id="section_close" class="section">
			<h1>Close</h1>
			<div class="MWidget" style="position: relative">
				<span class="MIconClose"></span>
			</div>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconClose"></span>');?></code></pre>
			
			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>
		
		<section id="section_social" class="section">
			<h1>Social</h1>
			
			<p class="MWidgetTitle">Facebook</p>
			
			<span class="MIconFacebook"></span>
			<span class="MIconFacebook30x30"></span>
			<span class="MIconFacebook50x50"></span>
			<span class="MIconFacebook150x150"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconFacebook"></span>
<span class="MIconFacebook30x30"></span>
<span class="MIconFacebook50x50"></span>
<span class="MIconFacebook150x150"></span>');?></code></pre>

			<div class="MContentSpacer"><hr /></div>
			
			<p class="MWidgetTitle">Twitter</p>
			
			<span class="MIconTwitter"></span>
			<span class="MIconTwitter30x30"></span>
			<span class="MIconTwitter50x50"></span>
			<span class="MIconTwitter150x150"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconTwitter"></span>
<span class="MIconTwitter30x30"></span>
<span class="MIconTwitter50x50"></span>
<span class="MIconTwitter150x150"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>

		<section id="section_avatar" class="section">
			<h1>Avatar</h1>
			
			<span class="MAvatar"></span>
			<span class="MAvatar30x30"></span>
			<span class="MAvatar50x50"></span>
			<span class="MAvatar150x150"></span>
			<span class="MAvatar200x200"></span>
			<span class="MAvatar400x400"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MAvatar"></span>
<span class="MAvatar30x30"></span>
<span class="MAvatar50x50"></span>
<span class="MAvatar150x150"></span>
<span class="MAvatar200x200"></span>
<span class="MAvatar400x400"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>		

		<section id="section_complete" class="section">
			<h1>Complete</h1>
			
			<span class="MIconComplete"></span>
			<span class="MIconComplete30x30"></span>
			<span class="MIconComplete50x50"></span>
			<span class="MIconComplete150x150"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconComplete"></span>
<span class="MIconComplete30x30"></span>
<span class="MIconComplete50x50"></span>
<span class="MIconComplete150x150"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>

		<section id="section_embed" class="section">
			<h1>Embed</h1>
			
			<span class="MIconEmbed"></span>
			<span class="MIconEmbed30x30"></span>
			<span class="MIconEmbed50x50"></span>
			<span class="MIconEmbed150x150"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconEmbed"></span>
<span class="MIconEmbed30x30"></span>
<span class="MIconEmbed50x50"></span>
<span class="MIconEmbed150x150"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>

		<section id="section_loading" class="section">
			<h1>Loading</h1>
			
			<span class="MIconLoadingBlack"></span>
			<span class="MIconLoadingBlack50x50"></span>
			<span class="MIconLoadingBlack150x150"></span>
			<span class="MIconLoadingWhite"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconLoadingBlack"></span>
<span class="MIconLoadingBlack50x50"></span>
<span class="MIconLoadingBlack150x150"></span>
<span class="MIconLoadingWhite"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>

		<section id="section_lock" class="section">
			<h1>Lock</h1>
			
			<span class="MIconLock"></span>
			<span class="MIconLock64x64"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconLock"></span>
<span class="MIconLock64x64"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>

		<section id="section_openShare" class="section">
			<h1>Open Share</h1>
			
			<span class="MIconOpenShare"></span>
			<span class="MIconOpenShare30x30"></span>
			<span class="MIconOpenShare50x50"></span>
			<span class="MIconOpenShare150x150"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconOpenShare"></span>
<span class="MIconOpenShare30x30"></span>
<span class="MIconOpenShare50x50"></span>
<span class="MIconOpenShare150x150"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>

		<section id="section_shareThis" class="section">
			<h1>Share This</h1>
			
			<span class="MIconShareThis"></span>
			<span class="MIconShareThis30x30"></span>
			<span class="MIconShareThis50x50"></span>
			<span class="MIconShareThis150x150"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconShareThis"></span>
<span class="MIconShareThis30x30"></span>
<span class="MIconShareThis50x50"></span>
<span class="MIconShareThis150x150"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>

		<section id="section_warning" class="section">
			<h1>Warning</h1>
			
			<span class="MIconWarning"></span>
			<span class="MIconWarning30x30"></span>
			<span class="MIconWarning50x50"></span>
			<span class="MIconWarning150x150"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconWarning"></span>
<span class="MIconWarning30x30"></span>
<span class="MIconWarning50x50"></span>
<span class="MIconWarning150x150"></span>');?></code></pre>

			<div class="MContentSpacer"></div>
			<div class="MContentSpacer"></div>
		</section>
		
		<section id="section_misc" class="section">
			<h1>Misc</h1>
			
			<span class="MIconAdd"></span>
			<span class="MBackground"></span>
			<span class="MIconDocument"></span>
			<span class="MIconEdit"></span>
			<span class="MIconPoster"></span>
			<span class="MIconList"></span>
			<span class="MIconHD"></span>
			<span class="MIconGrid"></span>
			
			<br />
			<a class="showCode">Code</a>
			<pre class="hidden"><code><?php echo htmlentities('<span class="MIconAdd"></span>
<span class="MBackground"></span>
<span class="MIconDocument"></span>
<span class="MIconEdit"></span>
<span class="MIconPoster"></span>
<span class="MIconList"></span>
<span class="MIconHD"></span>
<span class="MIconGrid"></span>');?></code></pre>

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

		</section>
		
		</td>
	</tr>
</table>

