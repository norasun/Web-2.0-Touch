<div class="toolbar">
	<h1>Animations</h1>
	<a class="button back" onclick="jsTouch.loadPage('pages/home.php', { transition: 'slide-right' });"><span></span>Back</a>
</div>
<div class="content">
<div>
	<h2>Flip Transitions</h2>
	<ul class="rounded">
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'flip-left' });">
			<img src="images/tabs/go-left.png" class="icon">Flip Left</a></li>
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'flip-right' });">
			<img src="images/tabs/go-right.png" class="icon">Flip Right</a></li>
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'flip-top' });">
			<img src="images/tabs/go-left.png" class="icon">Flip Top</a></li>
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'flip-bottom' });">
			<img src="images/tabs/go-right.png" class="icon">Flip Bottom</a></li>
	</ul>
	
	<h2>Disolve Transitions</h2>
	<ul class="rounded">
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'pop-in' });">
			<img src="images/tabs/go-left.png" class="icon">Pop In</a></li>
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'pop-out' });">
			<img src="images/tabs/go-right.png" class="icon">Pop Out</a></li>
	</ul>
	
	<h2>Slide Transitions</h2>
	<ul class="rounded">
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'slide-left' });">
			<img src="images/tabs/go-left.png" class="icon">Slide Left</a></li>
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'slide-right' });">
			<img src="images/tabs/go-right.png" class="icon">Slide Right</a></li>
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'slide-up' });">
			<img src="images/tabs/go-left.png" class="icon">Slide Up</a></li>
		<li><a onclick="jsTouch.loadPage('pages/animations.php', { transition: 'slide-down' });">
			<img src="images/tabs/go-right.png" class="icon">Slide Down</a></li>
	</ul>
	<div style="padding: 0px 15px">
		All animations are done with CSS3 which allows to utilize hardware acceleration.
	</div>
</div>
</div>