
<!DOCTYPE html>
<html lang="en">

<body>
  <div id="pspdfkit" style="height: 100vh"></div>  

<script src="assets/pspdfkit.js"></script>
<script>
	PSPDFKit.load({
		container: "#pspdfkit",
  		document: "uploads/Surat Tugas2022-11-22.pdf" // Add the path to your document here.
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
