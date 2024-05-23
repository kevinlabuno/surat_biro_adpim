
<!DOCTYPE html>
<html lang="en">

<body>
  <div id="pspdfkit" style="height: 100vh"></div>  

<script src="{{asset('assets/pspdfkit.js')}}"></script>
<script type="text/javascript">
	PSPDFKit.load({
		container: "#pspdfkit",
  		document: "{{asset('uploads/'.$lihat->file)}}"// Add the path to your document here.
	})
	.then(function(instance) {
		console.log("PSPDFKit loaded", instance);
	})
	.catch(function(error) {
		console.error(error.message);
	});

	$data
</script>
</body>
</html>
