$(document).ready(function() {

	//Click on span
	$('span').click(function() {
		this.innerHTML = reversedText(this.innerHTML)
	}); 


	function reversedText(original) {
		var reversedWordArray = []
		
		for (var i = original.length - 1; i >= 0; i--) {
			reversedWordArray.push(original.charAt(i))
		};

		return reversedWordArray.join().replace(/,/g, "")

	}
});