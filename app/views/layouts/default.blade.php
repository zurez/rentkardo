<!DOCTYPE html>
<html>
@include("layouts.head")
<body>
@include("layouts.header")
<section>
	<div id="container">
		@yield('content')
	</div>
</section>
@include("layouts.footer")
</body>
</html>