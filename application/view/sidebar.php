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
				
				<div class="MTabWidget">
					<ul class="MSideBarMenu">
						<li class="MTab">
							<a href="#tab_body_1">Tab 1</a>
						</li>
						<li class="MTab">
							<a href="#tab_body_2">Tab 2</a>
						</li>
					</ul>
					<div>
						<div id="tab_body_1">
							<p>This is a tab body</p>
						</div>
						<div id="tab_body_2">
							<p>This is another tab body</p>
							<p>This is another tab body</p>
							<p>This is another tab body</p>
						</div>
					</div>
				</div>
				
			</ul>
		</td>
		<td class="MWidthFull MPadding">
			
			<pre><code><?php echo htmlentities('<ul id="MSideBar" class="MSideBarLeft">
	<div class="MTabWidget">
		<ul class="MSideBarMenu">
			<li class="MTab">
				<a href="#tab_body_1">Tab 1</a>
			</li>
			<li class="MTab">
				<a href="#tab_body_2">Tab 2</a>
			</li>
		</ul>
		<div>
			<div id="tab_body_1">
				<p>This is a tab body</p>
			</div>
			<div id="tab_body_2">
				<p>This is another tab body</p>
				<p>This is another tab body</p>
				<p>This is another tab body</p>
			</div>
		</div>
	</div>
</ul>');?></code></pre>
			
		</td>
	</tr>
</table>